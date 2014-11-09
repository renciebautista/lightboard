<?php

class DepartmentCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /departmentcategory
	 *
	 * @return Response
	 */
	public function index($id)
	{
		if (Request::ajax())
		{
		    $department = Department::find($id);
			$categories = $department->categories;
			return Response::json(array(
				'status' => 'ok',
				'category' => $categories));
		}

		$department = Department::find($id);
		$categories = $department->categories;
		return View::make('departmentcategory.index', compact('department','categories'));

		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /departmentcategory/create
	 *
	 * @return Response
	 */
	public function create($id)
	{

		$department = Department::find($id);
		$pagetitle ="New '".$department->department_desc."' Category";
		return View::make('departmentcategory.create', compact('pagetitle','department'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /departmentcategory
	 *
	 * @return Response
	 */
	public function store($id)
	{
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();

		$rules = array(
			'department_id' => 'required',
			'category' => 'required|unique:categories,category,NULL,id,department_id,'.Input::get('department_id')
			
		);

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$category = Category::create(array(
				'department_id' =>Input::get('department_id'),
				'category' => strtoupper(Input::get('category')),
				));
			return Redirect::route('department-category.index', array('id' => $id));
		}

		return Redirect::route('department-category.create', array('id' => $id))
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /departmentcategory/{id}
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
	 * GET /departmentcategory/{id}/edit
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
	 * PUT /departmentcategory/{id}
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
	 * DELETE /departmentcategory/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}