@extends('layouts.main')
@section('title', 'Thanks for registeration')

@section('content')
    <h4>Thanks for sign up your email : {{ $thisEmail }} is registered with us.</h4>
    <p class='explanation'>
        To login please <a href="{{ URL::to('/login')}}">click here</a>
    </p>
@endsection