<!DOCTYPE html>
<html>
<head>
	<title>{{$object->title}}</title>
</head>
<body>
	<h1>Now Hook up the Model and Controller</h1>
	<h1>{{$object->title}}</h1>
	<p>{{$object->description}}</p>
	<pre>
		{{$object->code}}
	</pre>
	<p>Question Date: {{ $object->created_at }} </p>
</body>
</html> 
