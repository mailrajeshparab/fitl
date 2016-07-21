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

	// access comments using, e.g., $question->comments
	public function comments() {
		return $this->hasMany('App\Comment')->orderBy('created_at','desc');
	}
}
?>