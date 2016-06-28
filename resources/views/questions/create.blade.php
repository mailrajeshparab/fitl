@extends('layouts.master')

@section('title', 'Submit a programming question' )

@section('content')

<div class="page-header">
	<h1>Submit a programming question</h1>
</div>

{!! Form::model($question, ['action' => 'QuestionController@store']) !!}

	<div class="form-group">
    	<!-- <label for="title">What is your question</label> -->
    	{!! Form::label('title','What is your question?') !!}
    	<!-- <input type="text" class="form-control" id="title" placeholder="title"> -->
    	{!! Form::text('title','defaultvalue',['class' => 'form-control']) !!}
  	</div>

	<div class="form-group">
    	{!! Form::label('description','Describe your situation in more detail.') !!}
    	{!! Form::textarea('description','',['class' => 'form-control']) !!}
  	</div>

	<div class="form-group">
    	{!! Form::label('code','Include a code sample (optional)') !!}
    	{!! Form::textarea('code','',['class' => 'form-control']) !!}
  	</div>

	<button type="submit" class="btn btn-success">Submit your question!</button>

{!! Form::close() !!}
@endsection