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
    <script src="/auth/js/login.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/auth/css/login.css" rel="stylesheet">
</head>
<body>
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
            <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
</div>
</body>
</html>
