<?php
namespace App;

// use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Question extends Model 
{
	protected $rules = [
		'title' => ['required'],
		'description' => ['required'],
	];
}
?>