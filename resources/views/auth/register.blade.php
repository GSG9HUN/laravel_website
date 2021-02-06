@extends('layouts.layout')

@section('content')
    <div id="reg-form">
        <form class="form-register" method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-bold" style="text-align: center">Register</h1>

            <div class="input-group">
                <label for="email" class="custom-label">{{ __('Username') }}</label>
                <input id="input" type="text" class="form-control @error('username') is-invalid @enderror"
                       name="username" value="{{ old('username') }}" required autocomplete="username">

                @error('username')
                <div class="alert-danger text-danger">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                </div>
                @enderror
            </div>
            <div class="input-group">
                <label for="email" class="custom-label">{{ __('E-Mail Address') }}</label>
                <input id="input" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <div class="alert-danger text-danger">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
        @enderror
    </div>
    <div class="input-group">
        <label for="password" class="custom-label">{{ __('Password') }}</label>
        <input id="input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
               autocomplete="current-password">

        @error('password')
        <div class="text-danger alert-danger">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        </div>
        @enderror
    </div>

    <div class="input-group">
        <label for="password-confirm" CLASS="custom-label">{{ __('Confirm Password') }}</label>
        <input id="input" type="password" class="form-control" name="password_confirmation" required
               autocomplete="new-password">
    </div>

    <div class="register_button">
        <button class="btn btn-primary btn-block" id="btn-signup" type="submit"><i class="fas fa-user-plus"></i>
            Register new account
        </button>
    </div>

    </form>



    </div>

@endsection
