<?php

require_once "classes/Type.php";

$type = new Type();

// AJOUTER UN TYPE DE VAISSEAU
//
// $type->addType("support_craft", "cargo", "", "600", "50");


// RECHERCHER TOUS LES VAISSEAUX
//
$vesselTypes = $type->getAllType();
foreach ($vesselTypes as $vesselType) {
    echo "idType : " . $vesselType['idType'] . "<br>" .
         "parentType : ".$vesselType['parentType']."</br>".
         "typeName : ".$vesselType['typeName']."</br>".
         "description : ".$vesselType['description']."</br>".
         "life : ".$vesselType['life']."</br>" .
         "damage resistance : ".$vesselType['damageResistance']."</br>"
    ;
    echo "<br>";
}