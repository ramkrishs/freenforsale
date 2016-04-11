@extends('layouts.main')

@section('title', 'Welcome to Free and For sale')

@section('content')


    <div class="form-container">

        <h1>Sign up here to our portal</h1>
        <p class='explanation'>
            To sign up make sure you use your UTD email id.
        </p>
        <div class='form'>
            <div class='field'>
                <input class='placeholder-input' id='name' type='text'>
                <label class='placeholder-label' for='name'>Full name</label>
            </div>
            <div class='field'>
                <input class='placeholder-input' id='email' type='email'>
                <label class='placeholder-label' for='email'>Email</label>
            </div>
            <div class='field'>
                <input class='placeholder-input' id='password' type='password'>
                <label class='placeholder-label' for='password'>Password</label>
            </div>
            <div class="field">
                <button class="placeholder-input btn-lg btn-success " type="submit">Sign up</button>
            </div>
            <div class="field">

            </div>


        </div>
        <label class="placeholder-label">Already have an account? <a href="{{ URL::to('/login')}}">Sign in</a></label>
    </div>


@endsection
