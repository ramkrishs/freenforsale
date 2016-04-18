@extends('layouts.main')

@section('title', 'Welcome to Free and For sale')

@section('content')


    <div class="form-container">

        <h1>Login to our portal</h1>
        <p class='explanation'>
            To login make sure you use your UTD email id to access the  portal.
        </p>
        <form role="form" method="POST" action="{{ route('auth.signin') }}">

            <div class='form'>

            <div class='field'>
                <input class='placeholder-input {{ $errors->has('email') ? 'has-error' :'' }}' name="email" id='email'
                       type='email'>
                @if($errors->has('email'))
                    <div class="error">{{$errors->first('email')}}</div>
                @endif
                <label class='placeholder-label' for='email'>Email</label>
            </div>
            <div class='field'>
                <input class='placeholder-input {{ $errors->has('password') ? 'has-error' :'' }}' name="password"
                       id='password' type='password'>
                @if($errors->has('password'))
                    <div class="error">{{$errors->first('password')}}</div>
                @endif
                <label class='placeholder-label' for='password'>Password</label>
            </div>
            <div class="field">
                <button class="placeholder-input btn-lg btn-success " type="submit">Login</button>
            </div>
            <div class="field">
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>
        </div>
        </form>
        <label class="placeholder-label">Do not have an account? <a href="{{ URL::to('/register')}}">Sign up</a></label>
    </div>


@endsection
