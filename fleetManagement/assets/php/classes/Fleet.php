<?php
require_once "db/DataBase.php";

class Fleet
{

	public int $idFleet;

	/**
	 * @var string Nom de la flotte
	 */
	public string $fleetName;

	/**
	 * @var string Nom du commandant de la flotte
	 */
	public string $captainName;

	/**
	 * @var string Description de la flotte
	 */
	public string $description;

	public function __construct()
	{

	}

	/**
	 * Ajouter une flotte
	 *
	 * @param $fleetName
	 * @param $captainName
	 * @param $description
	 */
	public function addFleet($fleetName, $captainName, $description)
	{
		$bdd = new DataBase();
		$connect = $bdd->connect();

		$stmt = $connect->prepare(
			'INSERT INTO fleet (fleetName, captainName, description) VALUES (:fleetName, :captainName, :description)'
		);
		$stmt->bindParam(':fleetName', $fleetName);
		$stmt->bindParam(':captainName', $captainName);
		$stmt->bindParam(':description', $description);

		$stmt->execute();
	}


    /**
     * Afficher toutes les flottes
     *
     * @return array
     */
    public function getAllFleet()
	{
		$bdd = new DataBase();
		$connect = $bdd->connect();

		$stmt = $connect->prepare(
			'SELECT * FROM fleet '
		);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    /**
     * Récuperer une flotte par son id
     *
     * @param $idFleet
     */
	public function getFleetById($idFleet)
	{
		$bdd = new DataBase();
		$connect = $bdd->connect();

		$stmt = $connect->prepare(
			'SELECT * FROM fleet WHERE idFleet = :idFleet'
		);
		$stmt->execute(['idFleet' => $idFleet]);

		return $stmt->fetch();
	}

}