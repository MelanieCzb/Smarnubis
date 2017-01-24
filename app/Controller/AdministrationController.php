<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\DeleguesRegionauxManager;
use \Manager\ArticleManager;

class AdministrationController extends Controller{
// Gestion de l'inscription
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
			
			if ( ! ((strlen($_POST['myform']['password']) >= 6) && (strlen($_POST['myform']['password']) <= 20)) ) {
				$erreurs[] = "Le champ Password doit comprendre entre 6 et 20 caractères."; 
					// confirmation
				if($_POST['myform']['password'] != $_POST['confirmMotDePasse']) {
					$erreurs[] = "Password et confirmation du password ne sont pas identiques.";
				}
			}

			// insertion dans la BDD
			if(empty($erreurs)){
				
					// traitement
				$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
				$manager = new UserManager();
				$manager->insert($_POST['myform']);
				$this->redirectToRoute('login');
			}else{
				$this->show('Administration/formulaireInscription', ['erreurs' =>$erreurs]);
			}
		}else{
			$this->show('Administration/formulaireInscription');
		}
		
	}

// Gestion des connexions/deconnexions
	public function login()
	{
		if (isset($_POST['connexion'])) {
			$auth_manager = new AuthentificationManager();
			$user_manager = new UserManager();
			if($auth_manager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])){
				$user = $user_manager->getUserByUsernameOrEmail($_POST['myform']['username']);
				$auth_manager->logUserIn($user);
				$this->redirectToRoute('home');
			}else{
				$messages[] = "Problème d'authentification";
				$this->show('administration/login', ['messages' => $messages]);
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

// Ajout d'un délégué régional
	public function gestionDelegue(){
		$this->allowTo('admin');
		
		$manager = new DeleguesRegionauxManager();
		$manager->setTable('delegues_regionaux');
		$delegues = $manager->findAll();
		$this->show('Administration/gestionDelegue', ['delegues' => $delegues]);
	}

	public function ajoutDelegue(){			
		$this->allowTo('admin');
		$erreurs = [];

		if ( isset($_POST['ajouter']) ) {
			
			// prenom requis
			if( empty($_POST['myform']['identite']) ) {
				$erreurs[] .= "L'identité du délégué régional est obligatoire.";
			}

			// région
			if( empty($_POST['myform']['region'])) {
				$erreurs[] .= "La région n'a pas été séléctionnée";
			}

			if( ! empty($_POST['myform']['email']) ) {

				if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
					$erreurs[] .= "L'email n'est pas d'une forme reconnue.";
				}
			}

			// insertion dans la BDD
			if(empty($erreurs)){
				
					// traitement
				$manager = new DeleguesRegionauxManager();
				$manager->setTable('delegues_regionaux');
				$manager->insert($_POST['myform']);
				$messages[] = "Délégué régional ajouté";
				$this->show('Administration/ajoutDelegue', ['messages' => $messages]);
			}else{
				$this->show('Administration/ajoutDelegue', ['erreurs' =>$erreurs]);
			}
		}else{
			$this->show('Administration/ajoutDelegue');
		}
	}

// Modification d'un délégué
	public function updateDelegue($id){	
		$this->allowTo('admin');
		if(isset($_POST['modifier'])){
			// Vérifications
			if( empty($_POST['myform']['identite']) ) {
				$erreurs[] = "L'identité du délégué régional est obligatoire.";
			}

			if( empty($_POST['myform']['region'])) {
				$erreurs[] = "La région n'a pas été séléctionnée";
			}

			if( ! empty($_POST['myform']['email']) ) {
				if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
					$erreurs[] = "L'email n'est pas d'une forme reconnue.";
				}
			}

			// Traitement
			if(empty($erreurs)){
				$manager = new DeleguesRegionauxManager();
				$manager->setTable('delegues_regionaux');
				$manager->update($_POST['myform'], $id);
				$messages[] = "Les modifications sont enregistrées";
				$this->redirectToRoute('gestionDelegue', ['messages' => $messages]);
			}else if(! empty ($erreurs)){
				$manager = new DeleguesRegionauxManager();
				$manager->setTable('delegues_regionaux');
				$delegue = $manager->find($id);
				$this->show('administration/updateDelegue', ['delegue' => $delegue], ['erreurs' => $erreurs]);
			}
		}else{
			$manager = new DeleguesRegionauxManager();
			$manager->setTable('delegues_regionaux');
			$delegues = $manager->find($id);
			$this->show('administration/updateDelegue', ['delegues' => $delegues]);
		}

	}

// Supprimer un délégué
	public function deleteDelegue($id){
		$this->allowTo('admin');
		$manager = new DeleguesRegionauxManager();
		$manager->setTable('delegues_regionaux');
		$delegue = $manager->delete($id);
		// $messages[] = "Le délégué est supprimé.";

		$manager = new DeleguesRegionauxManager();
		$manager->setTable('delegues_regionaux');
		$delegues = $manager->findAll();
		$this->show('administration/gestionDelegue', ['delegues' => $delegues]);
	}

// Gestion des articles
	// Affichage des articles existants
	public function gestionArticles(){
		$this->allowTo('admin');
		
		$manager = new ArticleManager();
		$articles = $manager->findAll();
		$this->show('administration/gestionArticles', ['articles' => $articles]);
	}

	// Ajouter un article
	public function ajoutArticles(){

		$erreurs = [];

		if(isset($_POST['ajouter'])) { //traitement
			
			if (empty($_POST['myform']['titre'])) {
				$erreurs[] = "Vous n'avez pas renseigner de titre";
			}

			if (empty($_POST['myform']['contenu'])) {
				$erreurs[] = "Le contenu de l'article est vide";
			}

			if ($_POST['myform']['categorie'] == "") {
				$erreurs[] = "Veuillez séléctionner une catégorie d'article";
			}

			if(empty($erreurs)) {

				$manager = new ArticleManager();
				$manager->setTable('articles');
				$article = $manager->insert($_POST['myform']);
				$this->redirectToRoute('home');
			}
			$this->show('administration/ajoutArticles', ['erreurs' => $erreurs]);
		} else {
			$this->show('administration/ajoutArticles', ['erreurs' => $erreurs]);
		}

	}
}