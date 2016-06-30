@extends('layouts.master')

@section('title', 'Submit a programming question' )

@section('content')

<div class="page-header">
    <h1>Submit a programming question</h1>
</div>
<!-- create forms elements using laravel forms library -->
{!! Form::model( $question, 
    [
      'action' => 'QuestionController@store'
    ]) !!}

  @include('questions.partials.object_form')

	<button type="submit" class="btn btn-success">Submit your question!</button>

{!! Form::close() !!}

@endsection