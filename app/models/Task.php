<?php

class Task extends \Eloquent {

	protected $fillable = ['name'];


    public function getCompletedAttribute($value)
    {
        return (boolean) $value;
    }

}