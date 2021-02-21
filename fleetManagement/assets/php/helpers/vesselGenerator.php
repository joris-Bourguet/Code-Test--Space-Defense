<?php
require_once "../classes/Vessel.php";
require_once "faker.php";


function vesselGeneration($nbOfVessel = 50, $tailleMapX = 20, $tailleMapY = 20)
{

//offensive craft
    for ($i = 0; $i < $nbOfVessel / 2; $i++) {
        $vessel = new Vessel();
        $vessel->addVessel(
            nameFaker(),
            1,
            positionFaker($tailleMapX).";".positionFaker($tailleMapY),
            null,
            typeOffensiveFaker(),
            null,
            "1"
        );
    }

//support craft
    for ($i = 0; $i < $nbOfVessel / 2; $i++) {
        $vessel = new Vessel();
        $vessel->addVessel(
            nameFaker(),
            1,
            positionFaker($tailleMapX).";".positionFaker($tailleMapY),
            null,
            typeSupportFaker(),
            null,
            "1"
        );
    }
}

vesselGeneration(20, 20, 20);
