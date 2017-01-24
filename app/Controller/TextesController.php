<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager; 

class TextesController extends Controller
{

	public function nouveauxTextes(){
		$categorie = "nouveaux-textes";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('Textes/nouveauxTextes', ['articles' => $articles]);
	}

	public function textesEuropeens(){
		$categorie = "textes-europeens";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('Textes/textesEuropeens', ['articles' => $articles]);
	}

	public function emoluments(){
		$categorie = "emoluments";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);
		
		$this->show('Textes/emoluments', ['articles' => $articles]);
	}

	public function gardesAstreintes(){
		$categorie = "gardes-astreintes";
		$manager = new ArticleManager();
		$articles = $manager->findAllByCategory($categorie);
		
		$this->show('Textes/gardesAstreintes', ['articles' => $articles]);
	}

}