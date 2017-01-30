<?php

namespace Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class CalendarhomeManager extends \W\Manager\Manager
{

	public function findAllByCategory($categorie, $orderBy = "id", $orderDir = "DESC", $limit = 3, $offset = null)
	{

		$sql = "SELECT * FROM " . $this->table . "";
		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
				die("invalid orderBy param");
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != "ASC" && $orderDir != "DESC"){
				die("invalid orderDir param");
			}
			if ($limit && !is_int($limit)){
				die("invalid limit param");
			}
			if ($offset && !is_int($offset)){
				die("invalid offset param");
			}

			$sql .= " ORDER BY $orderBy $orderDir";
			if ($limit){
				$sql .= " LIMIT $limit";
				if ($offset){
					$sql .= " OFFSET $offset";
				}
			}
		}
		$sth = $this->dbh->prepare($sql);

		$sth->execute();

		return $sth->fetchAll();
	}

}