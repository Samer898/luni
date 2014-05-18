<?php

class Student extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['uni_id', 'nati_id', 'first_name', 'last_name', 'major_id', 'date_of_birth'];

}