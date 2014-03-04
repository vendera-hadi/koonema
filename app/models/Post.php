<?php

class Post extends Eloquent {

	protected $table = 'posts';
	protected $guarded = array();

	public static $rules = array();
}
