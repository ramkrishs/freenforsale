@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="Box row">
        <!-- left column -->
        <div class="col-xs-7">
            <div><lable>Name :</lable>{{$user["name"]}}</div>
            <div><lable>Email :</lable>{{$user["email"]}}</div>
           <div><lable>Username :</lable> {{$user["username"]}}</div>
            <div><lable>address :</lable>{{$user["address"]}}</div>
            <div><lable>phone: </lable>{{$user["phone"]}}</div>
        </div>

        <div class="col-xs-5 ">
            {{--<div><a class="btn btn-primary btn-lg btn-custom" href="">Edit Profile</a></div>--}}
        </div>
    </div>

@endsection