@extends('app')

@section('content')

<form method='POST' action='/auth/login'>

<div class="form-group">
	Email
	<input type="email" name="email" value="{{ old('email') }}"/>
</div>
<div class="form-group">
	Password
	<input type="password" name="password" id="password"/> 
</div>
<div class="form-group">
	<input type="checkbox" name="remember" /> 
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
	<button type="submit">Login</button>
</div>
</form>

@stop
