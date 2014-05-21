<?php

class Course extends \Eloquent {

    public static $rules = [];

	protected $fillable = [
        'num',
        'section',
        'name',
        'hours',
        'start_time',
        'end_time',
        'days',
        'prereq',
        'room',
        'type'
    ];
}