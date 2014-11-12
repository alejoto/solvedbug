<?php

class Bug extends \Eloquent {

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	
	protected $fillable = [];

	public function llangs () {
		return $this->belongsToMany('Llang');
	}


    
}