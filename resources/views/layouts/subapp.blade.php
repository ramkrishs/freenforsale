@extends('layouts.app')
@section('content')
    <div class=" container">
        <div class="row">
            <header>
                <h1 class="col-xs-12 sideb">Settings</h1>
            </header>
        </div>
        <div class="row">
            <div class="col-xs-2">
                <nav class="sidebar">
                    <h3>Account</h3>
                    <ul class="">
                        <li><a class="" href="{{URL::to('/account/sold')}}">Sold Products</a></li>
                        <li><a class="" href="{{URL::to('/account/bought')}}">Bought Products</a></li>
                        <li><a class="" href="{{URL::to('/account/wishlist')}}">Wishlist</a></li>
                    </ul>
                    <h3>User</h3>
                    <ul class="">
                        <li><a class="" href="{{URL::to('/user/profile')}}">Profile</a></li>
                        <li><a class="" href="{{URL::to('/user/preference')}}">Preference</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-xs-10">
                <div class="mainbar">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>
@endsection