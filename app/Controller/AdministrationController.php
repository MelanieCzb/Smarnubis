<?php

namespace Controller;

use \W\Controller\Controller;

class AdministrationController extends Controller
{

	public function login()
	{
		$this->show('Administration/login');
	}

	public function inscription()
	{
		$this->show('Administration/inscription');
	}

	
}