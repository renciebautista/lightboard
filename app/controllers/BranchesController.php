<?php

class BranchesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /branches
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagetitle = "Branch List";
		$branches = Branch::getByAccount($this->currentUser()->account->id);
		return View::make('branches.index', compact('pagetitle','branches'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /branches/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagetitle = "New Branch";
		return View::make('branches.create',compact('pagetitle'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /branches
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::merge(array_map('trim', Input::all()));
		Input::merge(array('account_id' => $this->currentUser()->account->id));
		$input = Input::all();

		$rules = array(
			'branch_name' => 'required|unique:branches,branch_name,NULL,id,account_id,'.$this->currentUser()->account->id,
			'address' => 'required'
		);

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$branch = new Branch();
			$branch->account_id = $this->currentUser()->account->id;
			$branch->branch_name = strtoupper(Input::get('branch_name'));
			$branch->address = Input::get('address');
			$branch->save();

			return Redirect::route('branch.index');
		}
		return Redirect::route('branch.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /branches/{id}
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
	 * GET /branches/{id}/edit
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
	 * PUT /branches/{id}
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
	 * DELETE /branches/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}