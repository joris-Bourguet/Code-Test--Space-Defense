<?php
require_once "classes/Vessel.php";

$vessel = new Vessel();

// AJOUTER UN NOUVEAU VAISSEAU
//
// $vessel->addVessel('test2', 1, '0;0', null, 1, null, 1);

// AFFICHER TOUS LES VAISSEAUX
//
$vaisseaux = $vessel->getAllVessel();
foreach ($vaisseaux as $vaisseau) {
    echo "idVessel : " . $vaisseau['idVessel'] . "<br>" .
        "vesselName : ".$vaisseau['vesselName']."</br>".
        "medicalUnit : ".$vaisseau['medicalUnit']."</br>".
        "currentPosition : ".$vaisseau['currentPosition']."</br>".
        "nextPosition : ".$vaisseau['nextPosition']."</br>" .
        "idType : ".$vaisseau['idType']."</br>" .
        "idTask : ".$vaisseau['idTask']."</br>" .
        "idFleet : ".$vaisseau['idFleet']."</br>"
    ;
    echo "<br>";
}


// RECUPERER LES POSITIONS ACTUELLE DES VAISSEAUX
//
// $positions = $vessel->getPosition();
// foreach ($positions as $position) {
//     list($x,$y) = explode(";", $position["currentPosition"]);
//     echo $x . " et " . $y;
//     echo "<br>";
// }