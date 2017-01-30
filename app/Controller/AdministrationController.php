<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\DeleguesRegionauxManager;
use \Manager\ArticleManager;
use \Manager\ConseilManager;
use \Manager\NewsManager;
use \Manager\CalendrierManager;
use \Manager\VigilanceManager;

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

// Gestion des délégués régionaux
	public function gestionDelegue(){
		$this->allowTo('admin');
		
		$manager = new DeleguesRegionauxManager();
		$manager->setTable('delegues_regionaux');
		$delegues = $manager->findAll();
		$this->show('Administration/gestionDelegue', ['delegues' => $delegues]);
	}

// Ajout d'un délégué régional
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

			$uploads_dir = '/var/www/public/assets/uploads';
			foreach ($_FILES["myform"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $_FILES["myform"]["tmp_name"][$key];
					$name = $_FILES["myform"]["name"][$key];
					move_uploaded_file($tmp_name, "$uploads_dir/$name");
				}
			}

			if(empty($erreurs)) {

				$manager = new ArticleManager();
				$manager->setTable('articles');
				$article = $manager->insert(array_merge($_POST['myform'],['fichier' => $name]));
				$this->redirectToRoute('gestionArticles');
			}
			$this->show('administration/ajoutArticles', ['erreurs' => $erreurs]);
		} else {
			$this->show('administration/ajoutArticles', ['erreurs' => $erreurs]);
		}
	}

// Modification d'un article
	public function modificationArticle($id){
		if(isset($_POST['modifier'])){
			$erreurs = [];

			if(empty($_POST['myform']['titre'])){
				$erreurs = "Le titre n'est pas renseigné.";
			}

			if(empty($_POST['myform']['contenu'])){
				$erreurs = "Le contenu de l'article est vide.";
			}

			if(empty($_POST['myform']['categorie'])){
				$erreurs = "Il faut séléctionner une catégorie pour que l'article soit répertorié.";
			}

				if(empty($erreurs)){
					$manager = new ArticleManager();
					$manager->setTable('articles');
					$manager->update($_POST['myform'], $id);
					$messages[] = "Les modifications sont enregistrées";
					$this->redirectToRoute('gestionArticles', ['messages' => $messages]);
				}else{
					$this->redirectToRoute('modificationArticle', ['erreurs' => $erreurs]);
				}
			
		}else{
			$manager = new ArticleManager();
			$manager->setTable('articles');
			$article = $manager->find($id);
			$this->show('administration/modificationArticle', ['article' => $article]);
		}
	}

// Supprimer un article
	public function deleteArticle($id){
		$this->allowTo('admin');
		$manager = new ArticleManager();
		$manager->setTable('articles');
		$delegue = $manager->delete($id);

		$this->redirectToRoute('gestionArticles', ['messages' => "L'article est supprimé."]);
	}


// Gestion des membres du conseil d'administration
	public function gestionConseil(){
		$this->allowTo('admin');
		
		$manager = new ConseilManager();
		$manager->setTable('conseil_administration');
		$delegues = $manager->findAll();
		$this->show('Administration/gestionConseil', ['delegues' => $delegues]);
	}

// Ajouter un membre du conseil d'administration
	public function ajoutConseil(){			
		$this->allowTo('admin');
		$erreurs = [];

		if ( isset($_POST['ajouter']) ) {
			
			// prenom requis
			if( empty($_POST['myform']['identite']) ) {
				$erreurs[] .= "L'identité est obligatoire.";
			}

			// région
			if( empty($_POST['myform']['titre'])) {
				$erreurs[] .= "Vous n'avez pas séléctionné de titre";
			}

			if( ! empty($_POST['myform']['email']) ) {

				if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
					$erreurs[] .= "L'email n'est pas d'une forme reconnue.";
				}
			}

			// insertion dans la BDD
			if(empty($erreurs)){
				
					// traitement
				$manager = new ConseilManager();
				$manager->setTable('conseil_administration');
				$manager->insert($_POST['myform']);
				$messages[] = "L'ajout est effectué";
				$this->show('Administration/ajoutConseil', ['messages' => $messages]);
			}else{
				$this->show('Administration/ajoutConseil', ['erreurs' =>$erreurs]);
			}
		}else{
			$this->show('Administration/ajoutConseil');
		}
	}

// Modification d'un membre
	public function updateConseil($id){	
		$this->allowTo('admin');
		if(isset($_POST['modifier'])){
			// Vérifications
			if( empty($_POST['myform']['titre'])) {
				$erreurs[] = "Le titre n'a pas été séléctionné";
			}

			if( empty($_POST['myform']['identite']) ) {
				$erreurs[] = "L'identité est obligatoire.";
			}

			if( ! empty($_POST['myform']['email']) ) {
				if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
					$erreurs[] = "L'email n'est pas d'une forme reconnue.";
				}
			}

			// Traitement
			if(empty($erreurs)){
				$manager = new ConseilManager();
				$manager->setTable('conseil_administration');
				$manager->update($_POST['myform'], $id);
				
				$this->redirectToRoute('gestionConseil');
			}else if(! empty ($erreurs)){
				$manager = new ConseilManager();
				$manager->setTable('conseil_administration');
				$delegue = $manager->find($id);
				$this->show('administration/updateConseil', ['delegue' => $delegue], ['erreurs' => $erreurs]);
			}
		}else{
			$manager = new ConseilManager();
			$manager->setTable('conseil_administration');
			$delegues = $manager->find($id);
			$this->show('administration/updateConseil', ['delegues' => $delegues]);
		}

	}

// Supprimer un membre
	public function deleteConseil($id){
		$this->allowTo('admin');
		$manager = new ConseilManager();
		$manager->setTable('conseil_administration');
		$delegue = $manager->delete($id);

		$manager = new ConseilManager();
		$manager->setTable('conseil_administration');
		$delegues = $manager->findAll();
		$this->show('administration/gestionConseil', ['delegues' => $delegues]);
	}

// Affichage des News
	public function gestionNews(){
		$this->allowTo('admin');
		
		$manager = new NewsManager();
		$articles = $manager->findAll();
		$this->show('administration/gestionNews', ['articles' => $articles]);
	}

// Ajouter une News
	public function ajoutNews(){

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

				$manager = new NewsManager();
				$manager->setTable('news');
				$article = $manager->insert($_POST['myform']);
				$this->redirectToRoute('gestionNews');
			}
			$this->show('administration/ajoutNews', ['erreurs' => $erreurs]);
		} else {
			$this->show('administration/ajoutNews', ['erreurs' => $erreurs]);
		}
	}

// Modification d'une News
	public function modificationNews($id){
			if(isset($_POST['modifier'])){
				$erreurs = [];

				if(empty($_POST['myform']['titre'])){
					$erreurs = "Le titre n'est pas renseigné.";
				}

				if(empty($_POST['myform']['contenu'])){
					$erreurs = "Le contenu de l'article est vide.";
				}

				if(empty($_POST['myform']['categorie'])){
					$erreurs = "Il faut séléctionner une catégorie pour que l'article soit répertorié.";
				}

					if(empty($erreurs)){
						$manager = new NewsManager();
						$manager->setTable('news');
						$manager->update($_POST['myform'], $id);
						$messages[] = "Les modifications sont enregistrées";
						$this->redirectToRoute('gestionNews', ['messages' => $messages]);
					}else{
						$this->redirectToRoute('modificationNews', ['erreurs' => $erreurs]);
					}
				
			}else{
				$manager = new ArticleManager();
				$manager->setTable('news');
				$article = $manager->find($id);
				$this->show('administration/modificationNews', ['article' => $article]);
			}
		}

// Supprimer une news
	public function deleteNews($id){
		$this->allowTo('admin');
		$manager = new NewsManager();
		$manager->setTable('news');
		$delegue = $manager->delete($id);

		$this->redirectToRoute('gestionNews', ['messages' => "L'article est supprimé."]);
	}


// Affichage du calendrier
	public function gestionCalendrier(){
		$this->allowTo('admin');
		
		$manager = new CalendrierManager();
		$manager->setTable('evenements');
		$evenements = $manager->findAll();
		$this->show('administration/gestionCalendrier', ['evenements' => $evenements]);
	}

// Ajouter un évènement au calendrier
	public function ajoutCalendrier(){

		$erreurs = [];

		if(isset($_POST['ajouter'])) { //traitement
			
			if (empty($_POST['myform']['titre'])) {
				$erreurs[] = "Vous n'avez pas renseigner de titre";
			}

			if (empty($_POST['myform']['contenu'])) {
				$erreurs[] = "Le contenu de l'article est vide";
			}

			if ($_POST['myform']['date'] == "") {
				$erreurs[] = "Veuillez renseigner une date";
			}

			if(empty($erreurs)) {

				$manager = new CalendrierManager();
				$manager->setTable('evenements');
				$article = $manager->insert($_POST['myform']);
				$this->redirectToRoute('gestionCalendrier');
			}
			$this->show('administration/ajoutCalendrier', ['erreurs' => $erreurs]);
		} else {
			$this->show('administration/ajoutCalendrier', ['erreurs' => $erreurs]);
		}
	}

// Modification d'un evenement
	public function modificationCalendrier($id){
			if(isset($_POST['modifier'])){
				$erreurs = [];

				if(empty($_POST['myform']['titre'])){
					$erreurs = "Le titre n'est pas renseigné.";
				}

				if(empty($_POST['myform']['contenu'])){
					$erreurs = "Le contenu de l'évènement est vide.";
				}

				if(empty($_POST['myform']['date'])){
					$erreurs = "Il faut séléctionner une date.";
				}

					if(empty($erreurs)){
						$manager = new CalendrierManager();
						$manager->setTable('evenements');
						$manager->update($_POST['myform'], $id);
						$messages[] = "Les modifications sont enregistrées";
						$this->redirectToRoute('gestionCalendrier', ['messages' => $messages]);
					}else{
						$this->redirectToRoute('modificationCalendrier', ['erreurs' => $erreurs]);
					}
				
			}else{
				$manager = new ArticleManager();
				$manager->setTable('evenements');
				$article = $manager->find($id);
				$this->show('administration/modificationCalendrier', ['article' => $article]);
			}
		}

// Supprimer un evenement
	public function deleteCalendrier($id){
		$this->allowTo('admin');
		$manager = new CalendrierManager();
		$manager->setTable('evenements');
		$delegue = $manager->delete($id);

		$this->redirectToRoute('gestionCalendrier', ['messages' => "L'evenement est supprimé."]);
	}

// Gestion du formulaire vigilance
	public function gestionVigilance(){
		$this->allowTo('admin');
		
		$manager = new VigilanceManager();
		$manager->setTable('vigilance');
		$vigilance = $manager->findAll();
		$this->show('Administration/gestionVigilance', ['vigilance' => $vigilance]);
	}

// Supprimer une ligne du formulaire vigilance
	public function deleteVigilance($id){
		$this->allowTo('admin');
		$manager = new VigilanceManager();
		$manager->setTable('vigilance');
		$resultats = $manager->delete($id);

		$this->redirectToRoute('gestionVigilance');
	}

}