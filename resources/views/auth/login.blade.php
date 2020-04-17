@extends('layouts.app')

@section('content')
<link href="/auth/css/login.css" rel="stylesheet">
<script src="/auth/js/login.js"></script>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{ route('login') }}">
		@csrf
		
		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail"/>
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		
		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password"/>
		@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		
		<button type="submit" class="btn btn-primary">login</button>
		<p class="message">Not registered? <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
    </form>
  </div>
</div>	
@endsection
