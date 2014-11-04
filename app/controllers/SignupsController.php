<?php

class SignupsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /signups
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('signups.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /signups/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('signups.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /signups
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, Account::$rules);

        if ($validation->passes())
        {
        	DB::transaction(function(){
        		$account = new Account;
				$account->full_name = Input::get('full_name');
				$account->company = Input::get('company');
				$account->domain = Input::get('domain');
			    $account->save();

			    $user = new User;
			    $user->account_id = $account->id;
				$user->full_name = Input::get('full_name');
				$user->username = Input::get('email');
				$user->password = Hash::make(Input::get('password'));
				$user->admin = 0;
				$user->account_admin = 1;
				$user->active = 1;
				$user->email = Input::get('email');
				$user->save();
        	});
           
		   

            return Redirect::route('items.index');
        }

        return Redirect::route('sign-up')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');

	}

	/**
	 * Display the specified resource.
	 * GET /signups/{id}
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
	 * GET /signups/{id}/edit
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
	 * PUT /signups/{id}
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
	 * DELETE /signups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}