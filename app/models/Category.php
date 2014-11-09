<?php

class Category extends \Eloquent {
	protected $fillable = ['department_id', 'category'];

	public $timestamps = false;

	public function department() {
		return $this->belongsTo('Category');
	}
}