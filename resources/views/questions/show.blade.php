@extends('layouts.master')

@section('title', $object->title )

@section('content')
<h1>{{$object->title}}</h1>
<p>{{$object->description}}</p>
<pre>
	{{$object->code}}
</pre>
<p>Question subimtted at: {{ $object->created_at }} </p>
@endsection