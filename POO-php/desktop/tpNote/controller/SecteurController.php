<?php

namespace tpNote\controller;

use tpNote\model\entities\Secteur;
use tpNote\model\manager\SecteurManager;

class SecteurController extends Controller
{
    public function __construct()
    {
        $this->manager = new SecteurManager();
    }

    public function viewSecteur()
    {
        $data['title'] = 'Liste des secteurs';
        $data['liste'] = $this->findAll();

        $this->render("viewSecteurs", $data);
    }

    public function formAjoutSecteur()
    {
        $this->render("formAjoutSecteur");
    }

    public function doAjoutSecteur(string $libelleSec)
    {
        $newSecteur = new Secteur(null, $libelleSec);
        $this->insert($newSecteur);
        $this->redirect("./index.php?page=viewSecteurs");
    }

    public function formModifSecteur(int $id)
    {
        $secteur = $this->findById($id);
        $data['title'] = "Ajout Secteur";
        $data['secteur'] = $secteur;
        $this->render("formModifSecteur",$data);
    }

    public function doModifSecteur(int $id, string $libelle)
    {
        $secteur = $this->findById($id);
        $secteur->libelle = $libelle;
        $this->update($secteur);
        $this->redirect("./index.php?page=viewSecteurs");
    }

    public function supprimerSecteur(mixed $id)
    {

    }
}