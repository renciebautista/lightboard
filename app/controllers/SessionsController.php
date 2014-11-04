<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$remember = (isset($input['remember'])) ? true : null;
		$rules = array('email' => 'required', 'password' => 'required|min:6');

		$validator = Validator::make($input, $rules);
		 
		if ($validator->fails())
		{
			Session::flash('message', 'Invalid credentials, please try again');
			Session::flash('class', 'alert alert-danger');
			return Redirect::back()->withErrors($validator)->withInput();
		}
		 
		// get model based on username_or_email, returns null if not present
		$user = User::where('email', $input['email'])->first();
		 
		 
		if(!$user) {
			$attempt = false;
		} else {
			$attempt = Auth::attempt(array(	'email' => $user->email,'password' => $input['password']),$remember);
		}	
		 
		if($attempt) {
			return Redirect::intended();
			// return Redirect::intended('/')
			// ->with(array('flash_message' => 'Successfully logged in',
			// 'flash_type' => 'success') );
		}
		 
		Auth::logout();
		Session::flash('message', 'Invalid credentials, please try again');
		Session::flash('class', 'alert alert-danger');
		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::intended('/');
	}

}