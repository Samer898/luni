<?php

class MajorsController extends \BaseController {

	/**
	 * Display a listing of majors
	 *
	 * @return Response
	 */
	public function index()
	{
		$majors = Major::all();

		return View::make('majors.index', compact('majors'));
	}

	/**
	 * Show the form for creating a new major
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('majors.create');
	}

	/**
	 * Store a newly created major in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Major::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Major::create($data);

		return Redirect::route('majors.index');
	}

	/**
	 * Display the specified major.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$major = Major::findOrFail($id);

		return View::make('majors.show', compact('major'));
	}

	/**
	 * Show the form for editing the specified major.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$major = Major::find($id);

		return View::make('majors.edit', compact('major'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$major = Major::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Major::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$major->update($data);

		return Redirect::route('majors.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Major::destroy($id);

		return Redirect::route('majors.index');
	}

}