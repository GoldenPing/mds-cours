<?php

namespace tpNote\controller;

use tpNote\model\entities\Structure;
use tpNote\model\manager\StructureManager;
use tpNote\utils\ArrayUtils;

class StructureController extends Controller
{
    public function __construct()
    {
        $this->manager = new StructureManager();
    }


    public function viewStructures()
    {
        $data['title'] = 'Liste des structures';
        $data['liste'] = $this->findAll();

        $this->render("viewStructures", $data);
    }

    public function oneStructure(int $id)
    {
        $structure = $this->findById($id);

        if ($structure) {
            $data['title'] = "Détails : " . $structure->nom;
            $data['one'] = $structure;
            $this->render("viewStructure", $data);
        } else {
            $data['title'] = 'Error';
            $data['error'] = "id de compte non valide";
            $this->render("error", $data);
        }
    }

    public function fromAjoutAssocSecteur(int $id)
    {
        $secteurController = new SecteurController();
        $data['title'] = "Ajout secteur";
        $data['secteurs'] = $secteurController->findAll();
        $data['id'] = $id;
        $this->render("formAjoutSecteurToStructure", $data);
    }

    public function doAjoutSecteurAssoc(int $secteur, int $id)
    {
        $this->manager->assoc($id, $secteur);
        $this->redirect("./index.php?page=oneStructure&id=" . $id);
    }

    public function deassocSecteur(int $idStr, int $idSec)
    {
        $this->manager->deassoc($idStr, $idSec);
        $this->redirect("./index.php?page=oneStructure&id=" . $idStr);
    }

    public function formModifAssocSecteur(int $id, int $idSec)
    {
        $secteurController = new SecteurController();
        $data['title'] = "modif secteur";
        $data['secteurs'] = $secteurController->findAll();
        $data['secteur'] = $secteurController->findById($idSec);
        $data['id'] = $id;
        $this->render("formModifSecteurToStructure", $data);
    }

    public function doModifSecteurAssoc(int $secteur, int $idStructure, int $idOldSec)
    {
        $this->manager->updateAssoc($secteur, $idStructure, $idOldSec);
        $this->redirect("./index.php?page=oneStructure&id=" . $idStructure);
    }

    public function formModifStructure(int $id)
    {
        $data['structure'] = $this->findById($id);
        $this->render("formModifStructure", $data);
    }

    public function doModifStructure(
        int $idStr,
        string $nomStr,
        string $rueStr,
        string $cpStr,
        string $villeStr,
        bool $assoStr,
        ?int $donaStr,
        ?int $actStr
    ) {
        $structure = new Structure(
            $idStr,
            $nomStr,
            $rueStr,
            $cpStr,
            $villeStr,
            $assoStr,
            ($donaStr === 0) ? null : $donaStr,
            ($actStr === 0) ? null : $actStr
        );
        $this->update($structure);
        $this->redirect("./index.php?page=viewStructures");
    }

    public function formAjoutStructure()
    {
        $this->render("formAddStructure");
    }

    public function doAjoutStructure(
        string $nomStr,
        string $rueStr,
        string $cpStr,
        string $villeStr,
        bool $assoStr,
        int $donaStr,
        int $actStr
    ) {
        if (strlen($cpStr) !== 5) {
            $errors [] ="Le code postal n'est pas valide";
        }

        if ($assoStr && $actStr !== 0) {
            $errors [] =  "Une association ne peut avoir d'actionnaire";
        }

        if (!$assoStr && $donaStr !== 0) {
            $errors [] = "Une entreprise ne peut avoir de donateurs";
        }

        if (empty($errors)) {
            $structure = new Structure(
                null,
                $nomStr,
                $rueStr,
                $cpStr,
                $villeStr,
                $assoStr,
                ($donaStr === 0) ? null : $donaStr,
                ($actStr === 0) ? null : $actStr
            );
            $this->insert($structure);
            $this->redirect("./index.php?page=viewStructures");
            $_SESSION['errors']['addStructure'] = [];
        }else{
            $_SESSION['errors']['addStructure'] = $errors;
            $this->redirect("./index.php?page=addStructure");
        }
    }
}