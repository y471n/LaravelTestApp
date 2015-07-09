@extends('app')

@section('content')

<h1>Edit: {!! $camera->name !!}</h1>
	
	{!! Form::model($camera, [ 'method' => 'PATCH', 'action' => ['CamerasController@update', $camera->slug ] ] ) !!}
		@include ('cameras.form', ['submitButtonText' => 'Update Camera'])
	{!! Form::close() !!}
	
	@include ('errors.list')

@stop
