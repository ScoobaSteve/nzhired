<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('user.login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password')))
		{
			if (Auth::user()->role == 'Employer')
			{
				$userID = Auth::user()->id;
				$employer = Employer::where('user_id', '=', $userID)->first();

				$joblistings = Joblisting::all();
	
				return View::make('employer/dashboard', ['employer' => $employer, 'joblistings' => $joblistings]);
			}

			return View::make('jobseeker/dashboard');
			
		}	

		return Redirect::toRoute('auth.create');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

	public function onLogout()
	{
		Auth::logout();

		return Redirect::to('goodbye');
	}

}
