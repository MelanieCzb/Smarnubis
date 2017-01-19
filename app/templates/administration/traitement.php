<?php

$erreurs = [];

if ( isset($_POST['inscrire']) ) {
	// traitement du formulaire
	//echo "Traitement du formulaire.";

	// nom requis
	// if( empty($_POST['nom']) ) {
	// 	$erreurs[] = "Le champ Nom est obligatoire.";
	// }
	// // nom <= 50 caractères
	// if( strlen($_POST['nom']) > 50 ) {
	// 	$erreurs[] = "Le nom ne doit pas dépasser 50 caractères.";
	// }

	// prenom requis
	if( empty($_POST['login']) ) {
		$erreurs[] = "Le champ login est obligatoire.";
	}
	// prenom <= 50 caractères
	if( strlen($_POST['login']) > 50 ) {
		$erreurs[] = "Le login ne doit pas dépasser 50 caractères.";
	}

	// email
	if( empty($_POST['email']) ) {
		$erreurs[] = "Le champ Email est obligatoire.";
	}
	if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
		$erreurs[] = "L'email est incorrect.";
	}

	// password
	if( empty($_POST['password']) ) {
		$erreurs[] = "Le champ Password est obligatoire.";
	}
	if ( ! ((strlen($_POST['password']) >= 6) && (strlen($_POST['password'] <= 20))) ) {
		$erreurs[] = "Le champ Password doit être en 6 et 20 caractères."; // confirmation
		if( ! ($_POST['password'] === $_POST['confirmMotDePasse']) ) {
		$erreurs[] = "Password et confirmation du password ne sont pas identiques.";
		}
	}
	
	// // adresse
	// if( empty($_POST['adresse']) ) {
	// 	$erreurs[] = "Le champ Adresse est obligatoire.";
	// }
	// if( strlen($_POST['adresse']) > 100 ) {
	// 	$erreurs[] = "L'adresse ne doit pas dépasser 100 caractères.";
	// }

	// code postal : requis et 5 chiffres exactement
	// if( empty($_POST['codePostal']) ) {
	// 	$erreurs[] = "Le champ Code Postal est obligatoire.";
	// }
	// if( strlen($_POST['codePostal']) === 5 ) {
	// 	$erreurs[] = "Le champ Code Postal doit comporter exactement 5 chiffres.";
	// }

	// // ville
	// if( empty($_POST['ville']) ) {
	// 	$erreurs[] = "Le champ Ville est obligatoire.";
	// }
	// if( strlen($_POST['ville']) > 50 ) {
	// 	$erreurs[] = "Le champ ville ne doit pas dépasser 50 caractères.";
	// }

	// // lieu exercice
	// if( empty($_POST['lieuExercice']) ) {
	// 	$erreurs[] = "Le champ lieu exercice est obligatoire.";
	// }
	// if( strlen($_POST['lieuExercice']) > 50 ) {
	// 	$erreurs[] = "Le champ lieu exercice ne doit pas dépasser 50 caractères.";
	// }

	// $dbh->query('SELECT * FROM users')->fetch();

	// $query=$dbh->prepare('INSERT INTO users(nom, prenom, email, password,  adresse, codePostal, ville, lieuExercice) VALUES (:nom, :prenom, :email, :password, :adresse, :codePostal, :ville, :lieuExercice)');
	// $query->bindValue('nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
	// $query->bindValue('prenom', strip_tags($_POST['prenom']), PDO::PARAM_STR);
	// $query->bindValue('email', strip_tags($_POST['email']), PDO::PARAM_STR);
	// $query->bindValue('password', strip_tags($_POST['password']), PDO::PARAM_STR);
	// // $password_crypte = password_hash($_POST['password'], PASSWORD_DEFAULT);
	// // $query->bindValue('password', $password_crypte, PDO::PARAM_STR);
	// $query->bindValue('adresse', strip_tags($_POST['adresse']), PDO::PARAM_STR);
	// $query->bindValue('codePostal', strip_tags($_POST['codePostal']), PDO::PARAM_STR);
	// $query->bindValue('ville', strip_tags($_POST['ville']), PDO::PARAM_STR);
	// $query->bindValue('lieuExercice', strip_tags($_POST['lieuExercice']), PDO::PARAM_STR);
	// $query->execute();
	// $new_id = $dbh->lastInsertId();
	
	// } else {
	
	// $message = "Erreur";

}