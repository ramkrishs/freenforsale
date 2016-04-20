@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="Box row">
        <!-- left column -->
        <div class="row profiles">
            <div class="col-xs-12 col-xs-offset-5">
                @if(Auth::user()->profilepic)
                    <img src="{{URL::asset('images/'.Auth::user()->profilepic)}}"
                         class="img-circle img-thumbnail pro-pic" alt="avatar">
                @else
                    <img src="{{URL::asset('images/profilepic.jpg')}}"
                         class="pro-pic img-circle img-thumbnail" alt="avatar">
                @endif


            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 pro-data">
                <br>
                <h4 class="text-center">
                    <i class="fa fa-user" aria-hidden="true">  </i> {{!empty($user["username"])? $user["username"]:''}}
                </h4>
                <h1 class="text-center">{{!empty($user["name"])?$user["name"]:''}}</h1>

                <div class="col-xs-4">
                    <h4 class="text-center">
                    <i class="fa fa-envelope-o" aria-hidden="true"> </i> {{!empty($user["email"])? $user["email"]:''}}
                    </h4>
                </div>

                <div class="col-xs-4">
                    <h4 class="text-center">
                        <i class="fa fa-map-marker" aria-hidden="true"> </i> {{!empty($user["address"])? $user["address"]:''}}
                    </h4>
                </div>
                <div class="col-xs-4">
                    <h4 class="text-center">
                        <i class="fa fa-phone" aria-hidden="true"> </i> {{!empty($user["phone"])? $user["phone"]:''}}
                    </h4>
                </div>


        </div>



    </div>

@endsection