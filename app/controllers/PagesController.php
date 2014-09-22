<?php

class PagesController extends BaseController
{
	public function home()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function goodbye()
	{
		return View::make('goodbye');
	}

	public function whatson()
	{
		return View::make('whatson');
	}

	public function denied()
	{
		return View::make('denied');
	}

		public function home2()
	{
		return View::make('home2');
	}
}
?>