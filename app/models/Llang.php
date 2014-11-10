<?php

class Llang extends \Eloquent {
	protected $fillable = [];

	public function bugs () {
		return $this->belongsToMany('Bug');
	}

	public function scopeOnbug ($query,$bug_id) {
		return $query	->where('')
		;
	}
	
}