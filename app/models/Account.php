<?php

class Account extends \Eloquent {
	protected $fillable = ['full_name', 'company', 'domain', 'email', 'active'];
	protected $guarded = array('id', 'password');

	protected $hidden = array('password');

  	public static $rules = array(
    	'full_name' => 'required',
    	'company' => 'required',
    	'domain' => 'required|unique:accounts',
    	'email' => 'required|email'
  	);

  	public function users()
    {
        return $this->hasMany('User');
    }
}