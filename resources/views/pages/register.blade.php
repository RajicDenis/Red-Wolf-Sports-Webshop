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

		@if(count($errors))
				<div class="alert alert-danger" style="width: 300px;">
					@foreach($errors->all() as $error)
						<span>* {{ $error }}</span><br>
					@endforeach
				</div>
		@endif

		<form action="{{ action('AuthenticationController@register') }}" class="form-signin" method="POST">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input id="login-username" class="form-control" type="text" name="username" placeholder="Username" required>

			<input id="login-mail" class="form-control" type="text" name="email" placeholder="E-Mail" required>

			<input id="login-pass" class="form-control" type="password" name="password" placeholder="Password" required>

			<input id="login-confirm-pass" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>

			<button id="login-btn" class="white" type="submit">R E G I S T E R</button>

			<div class="input-group"><input type="checkbox" name="rememberMe"> Remember Me</div>

		</form>	

	</div>

	<a href="{{ route('login') }}" class="goto">LOGIN</a>

</div>



@endsection