<?php

namespace Controller;

use \W\Controller\Controller;

class ContactsController extends Controller
{

	public function contacts()
	{
		$this->show('Contacts/contacts');
	}

	public function adhesion()
	{
		$this->show('Contacts/adhesion');
	}

	public function agenda()
	{
		$this->show('Contacts/agenda');
	}

	public function liste()
	{
		$this->show('Contacts/liste');
	}

}