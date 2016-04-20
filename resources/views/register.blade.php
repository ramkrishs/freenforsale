@extends('layouts.main')

@section('title', 'Welcome to Free and For sale')

@section('content')


    <div class="form-container">

        <h1>Sign up here to our portal</h1>
        <p class='explanation'>
            To sign up make sure you use your UTD email id.
        </p>
        <form role="form" method="POST" action="{{ route('auth.signup') }}">

            <div class='form'>
                <div class='field '>
                    <input class='placeholder-input {{ $errors->has('username') ? 'has-error' :'' }}' name="username" id='username'
                           type='text'
                           value="{{Request::old('username') ?: ''}}">
                    @if($errors->has('username'))
                        <div class="error">{{$errors->first('username')}}</div>
                    @endif
                <label class='placeholder-label' for='name'>Username</label>
            </div>
            <div class='field'>
                <input class='placeholder-input {{ $errors->has('email') ? 'has-error' :'' }}' name="email" id='email'
                       type='email'
                       value="{{Request::old('email') ?: ''}}">
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
                <button class="placeholder-input btn-lg btn-success " type="submit">Sign up</button>
            </div>
            <div class="field">
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>


        </div>
        </form>
        <label class="placeholder-label">Already have an account? <a href="{{ URL::to('/login')}}">Sign in</a></label>
    </div>


@endsection
