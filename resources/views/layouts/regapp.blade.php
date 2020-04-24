<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<<<<<<< HEAD
    <script src="/auth/js/login.js"></script>
=======
	<script src="/auth/js/login.js"></script>
>>>>>>> origin/master

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <link href="/auth/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name"/>
            @error('name')
            <span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
            @enderror

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e-mail"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
            @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password"/>
            @error('password')
            <span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
            @enderror

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password"/>

            <button type="submit" class="btn btn-primary">create</button>
            <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
=======
	<link href="/auth/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{ route('register') }}">
		@csrf
		
		<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name"/>
		@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		
		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e-mail"/>
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		
		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password"/>
		@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		
		<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password"/>
		
		<button type="submit" class="btn btn-primary">create</button>
		<p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
    </form>
  </div>
>>>>>>> origin/master
</div>
</body>
</html>
