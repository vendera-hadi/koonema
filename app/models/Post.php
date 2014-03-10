<?php

class Post extends Eloquent {

	protected $guarded = array();

	public static $rules = array();

	public function drama()
    {
        return $this->belongsTo('Drama','drama_id');
    }

    public function links()
    {
    	return $this->hasMany('Link');
    }
}
