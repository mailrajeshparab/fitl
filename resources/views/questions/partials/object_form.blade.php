<div class="form-group">
	<!-- <label for="title">What is your question</label> -->
	{!! Form::label('title','What is your question?') !!}
	<!-- <input type="text" class="form-control" id="title" placeholder="title"> -->
	{!! Form::text('title',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description','Describe your situation in more detail.') !!}
	{!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('code','Include a code sample (optional)') !!}
	{!! Form::textarea('code',null,['class' => 'form-control']) !!}
</div>