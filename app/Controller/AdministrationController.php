<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;

class AdministrationController extends Controller{

	public function inscription(){
		$erreurs = [];

		if ( isset($_POST['inscrire']) ) {
			
			// prenom requis
			if( empty($_POST['myform']['username']) ) {
				$erreurs[] = "Le nom d'utilisateur est obligatoire.";
			}
			// prenom <= 50 caractères
			if( strlen($_POST['myform']['username']) > 50 ) {
				$erreurs[] = "Le nom d'utilisateur ne doit pas dépasser 50 caractères.";
			}

			// email
			if( empty($_POST['myform']['email']) ) {
				$erreurs[] = "Le champ Email est obligatoire.";
			}
			if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
				$erreurs[] = "L'email est incorrect.";
			}

			// password
			if( empty($_POST['myform']['password']) ) {
				$erreurs[] = "Le champ Password est obligatoire.";
			}
			if ( ! ((strlen($_POST['myform']['password']) >= 6) && (strlen($_POST['myform']['password'] <= 20))) ) {
				$erreurs[] = "Le champ Password doit être en 6 et 20 caractères."; // confirmation
				if( ! ($_POST['myform']['password'] === $_POST['confirmMotDePasse']) ) {
				$erreurs[] = "Password et confirmation du password ne sont pas identiques.";
				}
			}

			// insertion dans la BDD
			if(empty($erreurs) && isset($_POST['inscrire'])){
					// traitement
					$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
					$manager = new UserManager();
					$manager->insert($_POST['myform']);
					$this->redirectToRoute('login');
				}
		}else{
					$this->show('Administration/formulaireInscription');
				}
		
	}

		public function login()
		{
			if (isset($_POST['connexion'])) {
				$auth_manager = new AuthentificationManager();
				$user_manager = new UserManager();
				if($auth_manager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])){
					$user = $user_manager->getUserByUsernameOrEmail($_POST['myform']['username']);
					$auth_manager->logUserIn($user);
					$this->redirectToRoute('home');
				}
			}else{
			$this->show('Administration/login');
			}
		}

		public function logout(){
			$auth_manager = new AuthentificationManager();
			$auth_manager->logUserOut();
			$this->redirectToRoute('home');
		}

	
}