<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Moyens de transports</title>
</head>
<body>
<?php
require_once('Adresse.php');
require_once('Personne.php');
require_once('Conducteur.php');
require_once('IVeloType.php');
require_once('Velo.php');
require_once('IEnergie.php');
require_once('Voiture.php');
require_once('Camion.php');
require_once('AMoyenTransport.php');
require_once('AMoyenTransportMotorise.php');

use POO\transports\Adresse;
use POO\transports\Personne;
use POO\transports\Conducteur;
use POO\transports\IVeloType;
use POO\transports\Velo;
use POO\transports\IEnergie;
use POO\transports\Voiture;
use POO\transports\Camion;
use POO\transports\AMoyenTransport;
use POO\transports\AMoyenTransportMotorise;


$adress = new Adresse('1 chemin de la forêt','38000','Grenoble');
$person = new Personne('Durand','Jacques','55',$adress);
echo '<p>'.$person.'</p>';

$conduc = new Conducteur('Dupont','Jean',50, $adress, 1234);

$vl1 = new Velo('VTT1', 1, IVeloType::TYPE_VTT);
//echo $vl1;

$vl2 = new Velo('Tandem1', 2, IVeloType::TYPE_VTC);
//echo '<p>'.$vl2.'</p>';

$vt1 = new Voiture('Voiture diesel 1', 5, IEnergie::UNITE_CONSO_CARBU, 5.5, 5);
$vt2 = new Voiture('Voiture électrique 1', 2, IEnergie::UNITE_CONSO_ELEC, 12.1, 3);
$cam1 = new Camion('Camion essence 1', 3, IEnergie::UNITE_CONSO_CARBU, 25, 2);
$cam2 = new Camion('Camion diesel 1', 2, IEnergie::UNITE_CONSO_CARBU, 20, 2);

echo '<p>'.$conduc.'</p>';
echo '<p>'.$vl1.'</p>';
echo '<p>'.$vl2.'</p>';
echo '<p>'.$vt1.'</p>';
echo '<p>'.$vt2.'</p>';
echo '<p>'.$cam1.'</p>';
echo '<p>'.$cam2.'</p>';

$instances = [$conduc,$vl1,$vl2,$vt1,$vt2,$cam1,$cam2];

foreach ($instances as $instance) {
    echo '<p>'.$instance.'</p>';
    if ($instance instanceof AMoyenTransport) {
        echo '<p>Instance de moyen de transport</p>';
        if ($instance instanceof AMoyenTransportMotorise) {
            echo '<p>Instance de moyen de transport motorisé</p>';
            echo '<p>Consommation pour 500 km : ' .$instance->calculerConso(500).' '.
                $instance->getUniteEnergie().'</p>';
        } else {
            echo '<p>Moyen de transport non motorisé</p>';
        }
    }
    else {
        echo '<p>Pas une instance de moyen de transport</p>';
    }
    echo '<p></p>';
}

?>
</body>
