<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\NewsManager;
use \Manager\CalendarhomeManager;
use \Manager\NewsletterManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$categorie = "news";
		$manager = new NewsManager();
		$articles = $manager->findAllByCategory($categorie);

		$manager = new CalendarhomeManager();
		$manager->setTable('evenements');
		$evenements = $manager->findAll();

		$this->show('default/home', ['articles' => $articles, 'evenements' => $evenements]);
	}

	public function enregistrement()
	{
		
		if(!empty($_POST['myform']['email'])){
			$manager = new NewsletterManager();
				$manager->setTable('newsletter');
				$manager->insert($_POST['myform']);
				$messages[] = "Vous êtes désormais inscrit à la newsletter";
				$this->show('news/newsletter', ['messages' => $messages]);
		}else{
			$this->show('news/newsletter');
		}
		
	}

}