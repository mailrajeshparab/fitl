@extends('layouts.master')

@section('title', 'Edit a Programming Question' )

@section('content')

<div class="page-header">
	<h1>Edit a Programming Question</h1>
</div>
<!-- create forms elements using laravel forms library -->
{!! Form::model( $question,
	[
	  'action' => ['QuestionController@update', $question->id],
	  'method' => 'put'
	]) !!}

  @include('questions.partials.object_form')

  <button type="submit" class="btn btn-success">Update the Question!</button>

{!! Form::close() !!}

@endsection