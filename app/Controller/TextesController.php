<?php

namespace Controller;

use \W\Controller\Controller;

class TextesController extends Controller
{

	public function nouveauxTextes()
	{
		$this->show('Textes/nouveauxTextes');
	}

	public function textesEuropeens()
	{
		$this->show('Textes/textesEuropeens');
	}

	public function emoluments()
	{
		$this->show('Textes/emoluments');
	}

	public function gardesAstreintes()
	{
		$this->show('Textes/gardesAstreintes');
	}

}