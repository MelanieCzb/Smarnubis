<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	public function login()
	{
		$this->show('Administration/login');
	}

	
}