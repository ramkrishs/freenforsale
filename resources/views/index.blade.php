@extends('layouts.main')

@section('title', 'Welcome to Free and For sale')

@section('content')


    <div class="form-container">

        <h1>Login to our portal</h1>
        <p class='explanation'>
            To login make sure you use your UTD email id to access the  portal.
        </p>
        <div class='form'>

            <div class='field'>
                <input class='placeholder-input' id='email' type='email'>
                <label class='placeholder-label' for='email'>Email</label>
            </div>
            <div class='field'>
                <input class='placeholder-input' id='password' type='password'>
                <label class='placeholder-label' for='password'>Password</label>
            </div>
            <div class="field">
                <button class="placeholder-input btn-lg btn-success ">Login</button>
            </div>
            <div class="field">

            </div>


        </div>
        <label class="placeholder-label">Do not have an account? <a href="{{ URL::to('/register')}}">Sign up</a></label>
    </div>


@endsection
