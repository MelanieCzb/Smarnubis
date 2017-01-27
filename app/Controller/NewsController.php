<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\NewManager;

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
		$this->show('News/newsletter');
	}

	public function news()
	{
		$categorie = "news";
		$manager = new NewManager();
		$articles = $manager->findAllByCategory($categorie);

		$this->show('News/news', ['articles' => $articles]);

	}

}