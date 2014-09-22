<?php

class JobseekerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobseekers = Jobseeker::all();

		return View::make('jobseeker.index', ['jobseekers' => $jobseekers]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jobseeker.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->role = 'Jobseeker';
		$user->save();

		Auth::attempt(Input::only('email', 'password'));

		$jobseeker = new Jobseeker;
		$jobseeker->user_id = Auth::user()->id;
		$jobseeker->firstname = Input::get('firstname');
		$jobseeker->lastname = Input::get('lastname');
		$jobseeker->dob = Input::get('dob');
		$jobseeker->location = Input::get('location');
		$jobseeker->area = Input::get('area');
		$jobseeker->phone = Input::get('phone');
		$jobseeker->licence = Input::get('licence');
		$jobseeker->workpermit = Input::get('workpermit');
		$jobseeker->availability = Input::get('availability');
		$jobseeker->save();

		$joblistings = Joblisting::all();

		return View::make('jobseeker/dashboard', ['jobseeker' => $jobseeker, 'joblistings' => $joblistings]);
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


}
