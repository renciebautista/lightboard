<?php

class Department extends \Eloquent {
	protected $fillable = ['department_desc','account_id'];
	public $timestamps = false;

	public static function getByAccount($account_id){
		return DB::table('departments')
           ->where('account_id', $account_id)
           ->get();
	}

	// each departmemt has many category
	public function categories() {
		return $this->hasMany('Category');
	}

	public function account()
	{
		return $this->belongsTo('Account');
	}
}