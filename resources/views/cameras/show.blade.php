@extends('app')

@section('content')

	<h2>{{ $camera->name }}</h2>
	<article>
		{{ $camera->description }}
	</article>
@stop
