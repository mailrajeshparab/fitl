<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

//Add validataion capabilities to this model use Esensi model class
use \Esensi\Model\Model;

class Comment extends Model
{
	// define the arrary of validation rules 
    protected $rules = [
		'question_id' => ['required'],
		'comment' => ['required'],
	];

}
