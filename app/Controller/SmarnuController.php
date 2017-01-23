<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\DeleguesRegionauxManager;


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
		$this->show('smarnu/conseilAdministration');
	}

	public function crReunion()
	{
		$this->show('smarnu/crReunion');
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

	public function vigilanceRisque()
	{
		$this->show('smarnu/formulaireVigilance');
	}

	public function lettreSyndicale()
	{
		$this->show('smarnu/lettreSyndicale');
	}

	public function liens()
	{
		$this->show('smarnu/liens');
	}

	public function partenaires()
	{
		$this->show('smarnu/partenaires');
	}

}