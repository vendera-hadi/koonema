<?php

class Link extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function post()
    {
        return $this->belongsTo('Post','post_id');
    }
}
