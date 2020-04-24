@extends('layouts.regapp')

@section('content')
    <link href="/auth/css/login.css" rel="stylesheet">
    <script src="/auth/js/login.js"></script>

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

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail"/>
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
    </div>
@endsection
