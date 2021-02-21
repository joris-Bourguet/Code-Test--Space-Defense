<?php

require_once "classes/Fleet.php";

$fleet = new Fleet();

// AJOUTER UN FLOTTE
//
// $fleet->addFleet("fleetTest", "Joris", "desfkjhgdsghijsdfhg sdghf ikds");


// RECHERCHER UNE FLOTTE PAR ID
//
// $searchedFleet = $fleet->getFleetById(8);
// echo "Flotte : ".$searchedFleet["idFleet"]."</br>".
//     "Nom : ".$searchedFleet['fleetName']."</br>".
//     "Nom du commandant : ".$searchedFleet['captainName']."</br>".
//     "Description : ".$searchedFleet['description']."</br>".
//     "createdAt : ".$searchedFleet['createdAt']."</br>";

// RECUPERER TOUTES LES FLOTTES
//
// $allFleet = $fleet->getAllFleet();
//
// foreach ($allFleet as $fleet) {
//     echo "Flotte : ".$fleet["idFleet"]."</br>".
//           "Nom : ".$fleet['fleetName']."</br>".
//           "Nom du commandant : ".$fleet['captainName']."</br>".
//           "Description : ".$fleet['description']."</br>".
//           "createdAt : ".$fleet['createdAt']."</br>";
//     echo "<br>";
// }
