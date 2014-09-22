<?php

class EmployerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employers = Employer::all();

		return View::make('employer.index', ['employers' => $employers]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employer.create');
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

		if (Input::hasFile('logo'))
		{
			$file = Input::file('logo');

			if ($file->getClientOriginalExtension() == 'jpg')
			{
				$filePath = time() . '-' . $file->getClientOriginalName();
				$file->move(public_path() .'/assets/img/Uploads/', $filePath);
				$employer->logo = $filePath;
			}

			else
			{
				return 'incorrect file type, Please use a .jpg file';
			}
		}
		else
		{
			$employer->logo = Input::file('logo');
		}

		$employer->save();
		
		$joblistings = Joblisting::all();

		return View::make('employer/dashboard', ['employer' => $employer, 'joblistings' => $joblistings]);

		


		


		/*Moving An Uploaded File

		Input::file('photo')->move($destinationPath);

		Input::file('photo')->move($destinationPath, $fileName);
		Retrieving The Path To An Uploaded File

		$path = Input::file('photo')->getRealPath();
		Retrieving The Original Name Of An Uploaded File

		$name = Input::file('photo')->getClientOriginalName();
		Retrieving The Extension Of An Uploaded File

		$extension = Input::file('photo')->getClientOriginalExtension();
		Retrieving The Size Of An Uploaded File

		$size = Input::file('photo')->getSize();
		Retrieving The MIME Type Of An Uploaded File

		$mime = Input::file('photo')->getMimeType();
		*/

		/*
		$userID = Auth::user()->id;

		$employernow = Employer::where('user_id', '=', $userID)->first();

		$employerid = $employernow->id;

		$joblistings = Joblisting::whereEmployerID($employerid)->firstOrFail();
		*/

/*
		
*/
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

	public function dash()
	{
		$userID = Auth::user()->id;
		$employer = Employer::where('user_id', '=', $userID)->first();
		$employerid = $employer->id;

		//$joblistings = Joblisting::where('employer_id', '=', $employerid)->get();

		$joblistings = Joblisting::all();

		return View::make('employer/dashboard', ['employer' => $employer, 'joblistings' => $joblistings]);
	}

}
