@extends('app')

@section('css')
	{!! Html::style('css/pages/login.css') !!}
@stop

@section('content')

<style>
	.login-box {
		background-image: url('{{ URL::asset('images/bg/login-bg.jpg') }}');
		background-position: center;
		background-size: cover;
	}
</style>

<div class="login-box">

	<img class="login-logo" src="{{ URL::asset('images/logo.png') }}">

	@if(Session('error'))
			<div class="error-login">{{ Session('error') }}</div>
	@endif

	<form action="#" class="form-signin" method="POST">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input id="login-mail" class="form-control" type="text" name="email" placeholder="E-Mail" required>

		<input id="login-pass" class="form-control" type="password" name="password" placeholder="Password" required>

		<input id="login-btn" type="submit" name="login" value="Login"> 

		<div class="input-group"><input type="checkbox" name="rememberMe"> Remember Me</div>

	</form>	
</div>



@endsection