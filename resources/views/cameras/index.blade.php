@extends('app')

@section('content')

	<h1>Cameras</h1>
	
	@foreach ($cameras as $camera)
		<article>
		<a href=" {{ action('CamerasController@show', [ $camera->slug ] ) }} "> {{$camera->name }} </a>

			<div class="description">
				{{ $camera->description }}
			</div>

		</article>	

	@endforeach


@stop
