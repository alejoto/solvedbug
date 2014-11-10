<?php

class Bug extends \Eloquent {
	protected $fillable = [];

	public function llangs () {
		return $this->belongsToMany('Llang');
	}
}