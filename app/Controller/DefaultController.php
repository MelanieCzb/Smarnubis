<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\NewsManager;

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

		$this->show('default/home', ['articles' => $articles]);
	}

	public function presentation()
	{
		$this->show('default/presentation');
	}

	public function deleguesRegionaux()
	{
		$this->show('default/deleguesRegionaux');
	}

	public function conseilAdministration()
	{
		$this->show('default/conseilAdministration');
	}

	public function crReunion()
	{
		$this->show('default/crReunion');
	}

	public function regInterieur()
	{
		$this->show('default/regInterieur');
	}

	public function comStatutaire()
	{
		$this->show('default/comStatutaire');
	}

	public function histoireSmarnu()
	{
		$this->show('default/histoireSmarnu');
	}

}