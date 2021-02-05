@extends('layouts.layout')

@section('content')

<div id="log-form">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-bold" style="text-align: center"> Login</h1>

        @if(\Session::has('error'))
            <div class="text-danger text-center font-weight-bold">{{\Session::get('error')}}</div>
        @endif
        <div class="input-group">
        <label for="email" class="custom-label" >{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                @enderror
        </div>
        <div class="input-group">
            <label for="password" class="custom-label">{{ __('Password') }}</label>


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
        </div>
        <div class="input-group login_button">
        <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
        </div>
        <div class="text-center">
        <a href="{{route('password.request')}}" class="text-right">Forgot password?</a>
        </div>
        <hr>
        <!-- <p>Don't have an account!</p>  -->

    </form>

    <div class="input-group">
        <a href="{{route('register')}}" ><button  class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
        </a>
    </div>



</div>
@endsection
