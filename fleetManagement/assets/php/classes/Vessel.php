<?php
require_once "db/DataBase.php";

class Vessel
{
    public $idVessel;

    public $vesselName;

    public $medicalUnit;

    public $currentPosition;

    public $nextPosition;

    public $idType;

    public $idTask;

    public $idFleet;


    public function __construct()
    {

    }

    /**
     * Ajouter un nouveau vaisseau
     *
     * @param $vesselName
     * @param $medicalUnit
     * @param $currentPosition
     * @param $nextPosition
     * @param $idType
     * @param $idTask
     * @param $idFleet
     */
    public function addVessel(
        $vesselName,
        $medicalUnit = true,
        $currentPosition = "0;0",
        $nextPosition,
        $idType,
        $idTask,
        $idFleet
    ) {
        $bdd = new DataBase();
        $connect = $bdd->connect();

        $stmt = $connect->prepare(
            'INSERT INTO vessel (vesselName, medicalUnit, currentPosition, nextPosition, idType, idTask, idFleet) VALUES (:vesselName, :medicalUnit, :currentPosition, :nextPosition, :idType, :idTask, :idFleet)'
        );
        $stmt->bindParam(':vesselName', $vesselName);
        $stmt->bindParam(':medicalUnit', $medicalUnit);
        $stmt->bindParam(':currentPosition', $currentPosition);
        $stmt->bindParam(':nextPosition', $nextPosition);
        $stmt->bindParam(':idType', $idType);
        $stmt->bindParam(':idTask', $idTask);
        $stmt->bindParam(':idFleet', $idFleet);

        $stmt->execute();
    }

    /**
     * Recuperer tous les vaisseaux
     *
     * @return array
     */
    public function getAllVessel() {
        $bdd = new DataBase();
        $connect = $bdd->connect();

        $stmt = $connect->prepare("SELECT * FROM vessel");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Récuperer position des vaisseaux
     *
     * @param int $tabX
     * @param int $tabY
     * @return array
     */
    public function getPosition(){
        $bdd = new DataBase();
        $connect = $bdd->connect();

        $stmt = $connect->prepare("SELECT currentPosition FROM vessel");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function showVesselOnPosition(int $tabX, int $tabY) {
        $positions = $this->getPosition();
        foreach ($positions as $position) {
            list($x,$y) = explode(";", $position["currentPosition"]);
            if ($tabX == $x && $tabY == $y){
               return true;
            }
        }
    }
}