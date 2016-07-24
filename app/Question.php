<?php
namespace App;

// use Illuminate\Database\Eloquent\Model;
//Add validataion capabilities to this model use Esensi model class
use \Esensi\Model\Model;

class Question extends Model 
{
	// define the arrary of validation rules 
	protected $rules = [
		'title' => ['required'],
		'description' => ['required'],
	];

	// access comments using, e.g., $question->comments
	public function comments() {
		return $this->hasMany('App\Comment')->orderBy('created_at','desc');
	}
}
?>