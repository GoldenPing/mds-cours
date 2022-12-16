<?php

use tpNote\controller\SecteurController;
use tpNote\controller\StructureController;

include_once "conf/config.php";

try {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $structureController = new StructureController();
        $secteurController = new SecteurController();
        switch ($page) {
            case "viewStructures" :
                $structureController->viewStructures();
                break;
            case "oneStructure":
                $structureController->oneStructure($_GET['id']);
                break;
            case "viewSecteurs":
                $secteurController->viewSecteur();
                break;
            case "formAjoutSecteur":
                $secteurController->formAjoutSecteur();
                break;
            case "doAjoutSecteur":
                $secteurController->doAjoutSecteur($_POST['libelleSec']);
                break;
            case "fromAjoutAssocSecteur":
                $structureController->fromAjoutAssocSecteur($_GET['id']);
                break;
            case "doAjoutSecteurAssoc":
                $structureController->doAjoutSecteurAssoc($_POST['secteur'], $_POST['idStructure']);
                break;
            case "deassocSecteur":
                $structureController->deassocSecteur($_GET['idStr'], $_GET['idSec']);
                break;
            case "formModifAssocSecteur":
                $structureController->formModifAssocSecteur($_GET['idStr'], $_GET['idSec']);
                break;
            case "doModifSecteurAssoc":
                $structureController->doModifSecteurAssoc($_POST['secteur'], $_POST['idStructure'], $_POST['idOldSec']);
                break;
            case "modifSecteur":
                $secteurController->formModifSecteur($_GET['id']);
                break;
            case "doModifSecteur":
                $secteurController->doModifSecteur($_POST['idSec'],$_POST['libelleSec']);
                break;
            case "supprimerSecteur":
                $secteurController->supprimerSecteur($_GET['id']);
        }
    } else {
        ?>
        <a href="index.php?page=viewStructures">Liste des structures</a><br/>
        <a href="index.php?page=viewSecteurs">Liste des secteurs</a><br/>
        <?php
    }
} catch (Exception $ex) {
    $error = 'Error ' . $ex->getCode() . ' : ' . $ex->getMessage() . '<br/>' . str_replace(
            '\n',
            '<br/>',
            $ex->getTraceAsString()
        );
}

if (isset($error)) {
    require(__DIR__ . '/view/error.php');
}