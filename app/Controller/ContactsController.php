<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CalendrierManager;


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
		$manager = new CalendrierManager();
		$manager->setTable('evenements');
		$evenements = $manager->findAll();
		$this->show('contacts/agenda', ['evenements' => $evenements]);

	}

	public function liste()
	{
		$this->show('Contacts/liste');
	}

}