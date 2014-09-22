<?php

class SessionController extends BaseController
{

	public function doLogin()
	{
		if (Auth::attempt(Input::only('email', 'password')))
		{
			return Auth::user();
		}

		return 'Failed';
	}

	public function doLogout()
	{
		Auth::logout();					//Logout the currently logged in user
		return Redirect::to('home'); 	//redirect the user to the home page
	}
}