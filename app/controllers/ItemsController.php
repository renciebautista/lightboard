<?php

class ItemsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /items
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagetitle = "Item List";
		// $items = Item::where('account_id',Auth::user()->account_id)
		// 			->with(array('department','category'))
		// 			->get();
		$items = Item::getAccountItems(Auth::user()->account_id);
		return View::make('items.index', compact('pagetitle', 'items'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /items/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pagetitle = "New Item";
		$account = Account::find(Auth::user()->account_id);
		$departments = $account->departments()->orderBy('department_desc')->lists('department_desc', 'id');
		return View::make('items.create', compact('pagetitle','departments'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::merge(array_map('trim', Input::all()));
		Input::merge(array('account_id' => $this->currentUser()->account->id));
		$input = Input::all();

		$rules = array(
			'item_code' => 'required|unique:items,item_code,NULL,id,account_id,'.$this->currentUser()->account->id,
			'barcode' => 'required',
			'description' => 'required',
			'department_id' => 'required',
			'category_id' => 'required',
			'price' => 'required',
		);

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$item = new Item;
			$item->account_id = $this->currentUser()->account->id;
			$item->item_code = Input::get('item_code');
			$item->barcode = Input::get('barcode');
			$item->description = Input::get('description');
			$item->department_id = Input::get('department_id');
			$item->category_id = Input::get('category_id');
			$item->price = Input::get('price');
			$item->save();

			return Redirect::route('item.index');
		}

		return Redirect::route('item.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /items/{id}
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
	 * GET /items/{id}/edit
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
	 * PUT /items/{id}
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
	 * DELETE /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}