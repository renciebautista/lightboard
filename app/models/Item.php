<?php

class Item extends Eloquent {

	public function department()
	{
		return $this->belongsTo('Department');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}

	public static function getAccountItems($account_id){
		return DB::table('items')
			->select('items.id','items.item_code','items.barcode','items.description','departments.department_desc','categories.category','items.price')
			->join('departments', 'departments.id', '=', 'items.department_id')
			->join('categories', 'categories.id', '=', 'items.category_id')
			->where('items.account_id', $account_id)
			->get();;
	}
}