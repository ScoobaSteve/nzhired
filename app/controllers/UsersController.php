<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('user.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($email)
	{
		$user = User::whereEmail($email)->first();

		return View::make('user.show', ['user' => $user]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function loginCheck()
	{
		if (Auth::check()) 
		{
			if (Auth::user()->role == 'Employer') return 'Registered Employer';//Redirect::to('employer');

			return 'Registered Jobseeker';//Redirect::to('jobseeker');
		}
				
		Return View::make('user.login');
	}

	public function onLogin()
	{
		if (Auth::attempt(Input::only('email', 'password')))
		{
			return 'SuccessfulLogin'; //Redirect::to('session/create');
		}	

		return 'Failed';
	}

	public function onLogout()
	{
		Auth::logout();

		return Redirect::to('goodbye');
	}

	public function one()
	{
		return View::make('user/test');
	}

	public function two()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->role = 'Employer';
		$user->save();

		Auth::attempt(Input::only('email', 'password'));

		$employer = new Employer;
		$employer->user_id = Auth::user()->id;
		$employer->companyname = Input::get('companyname');
		$employer->contactname = Input::get('contactname');
		$employer->website = Input::get('website');
		$employer->location = Input::get('location');
		$employer->area = Input::get('area');
		$employer->phone = Input::get('phone');
		$employer->save();

		$joblistings = Joblisting::all();

		return View::make('home');
	}


}
