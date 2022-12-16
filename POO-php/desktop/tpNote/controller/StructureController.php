<?php

namespace tpNote\controller;

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
}