<?php

namespace Controller;

use \W\Controller\Controller;

class NewsController extends Controller
{

	public function archives()
	{
		$this->show('News/archives');
	}

	public function newsletter()
	{
		$this->show('News/newsletter');
	}

	public function news()
	{
		$this->show('News/news');
	}

}