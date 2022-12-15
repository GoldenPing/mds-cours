
<?php
require_once('./controller/AccountController.php');
require_once('./controller/AuthorizationController.php');
use mvc\controller\AccountController;
use mvc\controller\AuthorizationController;

// ajouter si action non reconnue => erreur au lieu de page d'acceuil
try {
    if (isset($_GET['action'])) {
        if (stripos($_GET['action'], 'account')) {
            $controler = new AccountController();
            switch ($_GET['action']) {
                case 'viewAccount':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler->viewAccount($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'viewAccounts':
                    $controler->viewAccounts();
                    break;
                case 'addAccount':
                    if (isset($_POST['login'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['pass'])) {
                        $controler->addAccount();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default :
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } elseif (stripos($_GET['action'], 'auth')) {
            $controler = new AuthorizationController();
            switch ($_GET['action']) {
                case 'viewAuth':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler->viewAuth($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'viewAuths':
                    $controler->viewAuths();
                    break;
                case 'addAuth':
                    if (isset($_POST['name'])) {
                        $controler->addAuth();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default :
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } else {
            $error = 'Erreur : action non reconnue<br/>';
        }
    } else {
        ?>
        <a href="index.php?action=viewAccounts">Liste des comptes</a><br/>
        <a href="index.php?action=viewAuths">Liste des autorisations</a>
        <?php
    }
}
catch (Exception $ex) {
    $error='Error '.$ex->getCode().' : '.$ex->getMessage().'<br/>'.str_replace('\n','<br/>',
            $ex->getTraceAsString());
}

if (isset($error)) {
    require(__DIR__.'/view/error.php');
}
?>
