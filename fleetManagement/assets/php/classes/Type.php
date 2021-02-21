<?php
require_once "db/DataBase.php";

class Type
{
    public $idType;

    public $parentType;

    public $typeName;

    public $description;

    public $life;

    public $damageResistance;

    public function __construct()
    {

    }

    /**
     * Ajouter un type de vaisseau
     *
     * @param $parentType
     * @param $typeName
     * @param $description
     * @param $life
     * @param $damageResistance
     */
    public function addType($parentType, $typeName, $description, $life, $damageResistance)
    {
        $bdd     = new DataBase();
        $connect = $bdd->connect();

        $stmt = $connect->prepare(
            'INSERT INTO type (parentType, typeName, description, life, damageResistance) VALUES (:parentType, :typeName, :description, :life, :damageResistance)'
        );
        $stmt->bindParam(':parentType', $parentType);
        $stmt->bindParam(':typeName', $typeName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':life', $life);
        $stmt->bindParam(':damageResistance', $damageResistance);

        $stmt->execute();
    }

    public function getAllType()
    {
        $bdd     = new DataBase();
        $connect = $bdd->connect();

        $stmt = $connect->prepare('SELECT * FROM type');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}