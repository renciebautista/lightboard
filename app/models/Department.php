<?php

class Department extends \Eloquent {
	protected $fillable = ['department_desc','account_id'];
	public $timestamps = false;

	public static function getByAccount($account_id){
		return DB::table('departments')
           ->where('account_id', $account_id)
           ->get();
	}
}