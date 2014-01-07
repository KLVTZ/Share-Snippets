<?php

class Snippet extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public $timestamps = false;
	
	protected $fillable = array('snippet');
}
