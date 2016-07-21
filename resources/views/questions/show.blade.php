@extends('layouts.master')

@section('title', $object->title )

@section('content')
<div class="page-header">
	<!-- EDIT-BUTTON -->
	<a href="{{ action('QuestionController@edit', $object->id) }}" class="btn btn-info pull-right">Edit</a>
	<h1>{{$object->title}}</h1>
</div>

<p>{{$object->description}}</p>
<pre>
	{{$object->code}}
</pre>
<p>Question subimtted at: {{ $object->created_at }} </p>

<h2>Comments</h2>

@foreach ($object->comments as $comment)
	<p>{{ $comment->comment }}</p>
	<div><small>{{ $comment->created_at->diffForHumans() }}</small></div>
@endforeach
 
@endsection