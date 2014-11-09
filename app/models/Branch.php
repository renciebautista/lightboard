<?php

class Branch extends \Eloquent {
	protected $fillable = [];

	public static function getByAccount($account_id){
		return DB::table('branches')
           ->where('account_id', $account_id)
           ->get();
	}
}