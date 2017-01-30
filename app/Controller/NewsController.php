<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\NewManager;
use \Manager\NewsManager;
use \Manager\NewsletterManager;

class NewsController extends Controller
{

	public function archives()
	{
		$categorie = "archives";
		$manager = new NewManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('News/archives', ['articles' => $articles]);
	}

	public function newsletter()
	{
		if(isset($_POST['inscrire'])){

			if( empty($_POST['myform']['email']) ) {
				$erreurs[] = "Le champ Email est obligatoire.";
			}
				if( ! filter_var($_POST['myform']['email'], FILTER_VALIDATE_EMAIL) ) {
					$erreurs[] = "L'email est incorrect.";
				}

			if(empty($erreurs)){
				$manager = new NewsletterManager();
				$manager->setTable('newsletter');
				$manager->insert($_POST['myform']);
				$messages[] = "Vous êtes désormais inscrit à la newsletter";
				$this->show('news/newsletter', ['messages' => $messages]);
			}else{
				$this->show('News/newsletter', ['erreurs' => $erreurs]);
			}
		}
		$this->show('News/newsletter');
	}

	public function news()
	{
		$categorie = "news";
		$manager = new NewManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('News/news', ['articles' => $articles]);

	}

	public function detailNews($id)
	{
		$manager = new NewManager();
		$article = $manager->find($id);
		$this->show('News/detailNews', ['article' => $article]);
	}

}