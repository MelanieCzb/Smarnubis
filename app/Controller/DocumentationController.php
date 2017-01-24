<?php

namespace Controller;

use \W\Controller\Controller;

class DocumentationController extends Controller
{

	public function statutPH()
	{
		$this->show('documentation/statutPH');
	}

	public function chirurgiePlateaux()
	{
		$this->show('documentation/chirurgiePlateaux');
	}

	public function primes()
	{
		$this->show('documentation/primes');
	}

	public function perinatalite()
	{
		$this->show('documentation/perinatalite');
	}

	public function demographie()
	{
		$this->show('documentation/demographie');
	}

	public function securite()
	{
		$this->show('documentation/securite');
	}

	public function retraites()
	{
		$this->show('documentation/retraites');
	}

	public function permanenceSoins()
	{
		$this->show('documentation/permanenceSoins');
	}

	public function urgences()
	{
		$this->show('documentation/urgences');
	}

	public function travailAdditionnel()
	{
		$this->show('documentation/travailAdditionnel');
	}

	public function reanimation()
	{
		$this->show('documentation/reanimation');
	}
	
	public function fmcEpp()
	{
		$this->show('documentation/fmcEpp');
	}

	public function rttCet()
	{
		$this->show('documentation/rttCet');
	}

	public function mapar()
	{
		$this->show('documentation/mapar');
	}
}