<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\DeleguesRegionauxManager;
use \Manager\ArticleManager;
use \Manager\ConseilManager;


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
		$this->show('smarnu/formulaireVigilance');
	}

	public function lettreSyndicale()
	{
		$categorie = "lettre-syndicales";
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