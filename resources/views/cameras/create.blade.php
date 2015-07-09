@extends('app')

@section('content')

	<h1>Insert a new Camera</h1>

	<hr/>

	{!! Form::model($camera = new \App\Camera, ['url' => 'cameras']) !!}
		@include ('cameras.form', ['submitButtonText' => 'Add Camera'])
	{!! Form::close() !!}

	@include ('errors.list')

@stop
