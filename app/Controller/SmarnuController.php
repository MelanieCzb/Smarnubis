<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\DeleguesRegionauxManager;
use \Manager\ArticleManager;
use \Manager\ConseilManager;
use \Manager\VigilanceManager;


class SmarnuController extends Controller
{

	public function presentation()
	{
		$this->show('smarnu/presentation');
	}

	public function deleguesRegionaux()
	{
		$manager = new DeleguesRegionauxManager();
		$manager->setTable('delegues_regionaux');
		$delegues = $manager->findAll();
		$this->show('smarnu/deleguesRegionaux', ['delegues' => $delegues]);
	}

	public function conseilAdministration()
	{
		$manager = new ConseilManager();
		$manager->setTable('conseil_administration');
		$delegues = $manager->findAll();
		$this->show('smarnu/conseilAdministration', ['delegues' => $delegues]);
	}

	public function crReunion()
	{
		$this->allowTo(['user', 'admin']);
		$categorie = "cr-reunion";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('smarnu/crReunion', ['articles' => $articles]);
	}

	public function regInterieur()
	{
		$this->show('smarnu/regInterieur');
	}

	public function comStatutaire()
	{
		$this->show('smarnu/comStatutaire');
	}

	public function histoireSmarnu()
	{
		$this->show('smarnu/histoireSmarnu');
	}

	public function vigilanceRisques()
	{
		$erreurs = [];

		if(isset($_POST['envoyer'])){
			// Vérification du formulaire de vigilance
				if(empty($_POST['myform']['nom'])){
					$erreurs[] = "Vous devez renseigner votre nom";
				}

				if(empty($_POST['myform']['prenom'])){
					$erreurs[] = "Votre prénom est vide";
				}

				if( empty($_POST['myform']['email']) ) {
				$erreurs[] = "Le champ Email est obligatoire.";
					}
					if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
						$erreurs[] = "L'email est incorrect.";
				}

				if(empty($_POST['myform']['message'])){
					$erreurs[] = "Vous n'avez pas saisi de message";
				}

				if(empty($erreurs)){
				
				// traitement
				$manager = new VigilanceManager();
				$manager->setTable('vigilance');
				$manager->insert($_POST['myform']);
				$this->show('smarnu/formulaireVigilance', ['message' => "Votre message a été transmis"]);
			}else{
				$this->show('smarnu/formulaireVigilance', ['erreurs' =>$erreurs]);
			}

		}else{
			$this->show('smarnu/formulaireVigilance');
		}
	}

	public function lettreSyndicale()
	{
		$categorie = "lettre-syndicale";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('smarnu/lettreSyndicale', ['articles' => $articles]);
	}


	public function liens()
	{
		$this->show('smarnu/liens');
	}

	public function sfar()
	{
		$this->show('smarnu/sfar');
	}

	public function conseilOrdre()
	{
		$this->show('smarnu/conseilOrdre');
	}

}