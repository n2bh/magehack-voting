<?php

class Vote extends Eloquent {
    protected $guarded = array('id');

	public static $rules = array();


    public function user()
    {
        return $this->belongsTo('User');
    }

    public function project()
    {
        return $this->belongsTo('Project');
    }
}
