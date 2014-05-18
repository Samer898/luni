<?php

class Major extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required:unique',
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'degree', 'hour_price'];

    public function students(){
        return $this->hasMany('Student');
    }

}