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
}