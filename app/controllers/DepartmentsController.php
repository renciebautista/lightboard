<?php

class DepartmentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /departments
	 *
	 * @return Response
	 */
	public function index()
	{
		$departments = Department::all();
		return View::make('departments.index')->with('departments',$departments);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /departments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('departments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /departments
	 *
	 * @return Response
	 */
	public function store()
	{	
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();
		$validation = Validator::make($input, Department::$rules);

		if($validation->passes())
		{
			$department = Department::create(array('department_desc' => Input::get('department_desc')));
			return Redirect::route('department.index');
		}

		return Redirect::route('department.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /departments/{id}
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
	 * GET /departments/{id}/edit
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
	 * PUT /departments/{id}
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
	 * DELETE /departments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}