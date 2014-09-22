<?php

class JoblistingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$numberjobs = Joblisting::all();

		return View::make('joblisting.index', [
			'numberjobs' => $numberjobs,
			'joblistings' => Joblisting::paginate(1)
		]);


		/*
		$joblistings = DB::table('joblistings')
			->take(5)
			->get();

		return View::make('joblisting.index', ['joblistings' => $joblistings]);
		*/
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('joblisting.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$userID = Auth::user()->id;
		$employerID = Employer::whereUser_id($userID)->firstOrFail();
		$employerID = $employerID->id;

		$joblisting = new Joblisting;
		$joblisting->employer_id = $employerID;
		$joblisting->title = Input::get('title');
		$joblisting->wage = Input::get('wage');
		$joblisting->location = Input::get('location');
		$joblisting->area = Input::get('area');
		$joblisting->category = Input::get('category');
		$joblisting->subcategory = Input::get('subcategory');
		$joblisting->start = Input::get('start');
		$joblisting->type = Input::get('type');
		$joblisting->description = Input::get('description');
		$joblisting->keywords = Input::get('keywords');
		$joblisting->save();

		return Redirect::route('employerdash');
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

	public function search()
	{
		$location = Input::get('location');

		$numberjobs = Joblisting::where('location', '=', $location);

		return View::make('joblisting.index', [
			'numberjobs' => $numberjobs,
			'joblistings' => $numberjobs->paginate(1)
		]);

		/*
		$location = Input::get('location');

		$joblistings = DB::table('joblistings')
			->where('location', '=', $location)
			->get();

		return View::make('joblisting.index', ['joblistings' => $joblistings]);
		*/
	}
}
