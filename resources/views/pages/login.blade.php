@extends('app')

@section('css')
	{!! Html::style('css/pages/login.css') !!}
@stop

@section('content')

<style>
	.login-box {
		background-image: url('{{ URL::asset('images/bg/login-bg.jpg') }}');
	}
	
</style>

<div class="login-box">

	<a href="{{ route('home') }}"><img class="home_btn" src="{{ URL::asset('images/icons/home.png') }}"></a>

	<div class="login-frame">

		<img class="login-logo" src="{{ URL::asset('images/logo.png') }}">

		@if(Session('error'))
				<div class="error-login">{{ Session('error') }}</div>
		@endif

		<form action="{{ action('AuthenticationController@login') }}" class="form-signin" method="POST">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input id="login-mail" class="form-control" type="text" name="email" placeholder="E-Mail" required>

			<input id="login-pass" class="form-control" type="password" name="password" placeholder="Password" required>

			<button id="login-btn" class="white" type="submit">L O G I N</button>

			<div class="input-group"><input type="checkbox" name="rememberMe"> Remember Me</div>

		</form>	

	</div>

	<a href="{{ route('register') }}" class="goto">REGISTER</a>

</div>



@endsection