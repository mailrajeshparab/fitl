<hr>

<h2>Delete this question:</h2>

<!-- create forms elements using laravel forms library -->
{!! Form::open(
	[
	  'action' => ['QuestionController@destroy', $question->id],
	  'method' => 'delete',
	  'class' => 'delete-object'
	]) !!}

    <button type="submit" class="btn btn-danger">DELETE this Question!</button>

{!! Form::close() !!}