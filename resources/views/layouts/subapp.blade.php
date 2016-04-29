@extends('layouts.app')
@section('content')
    <div class=" container product-container">
        @include('layouts.partials.alerts')
        <div class="row">
            <header>
                <h1 class="col-xs-12 ">Settings</h1>
            </header>
        </div>
        <div class="row">
            <div class="col-xs-2 sidebar">
                <nav class="">
                    <h3>Account</h3>
                    <ul class="">
                        <li><a class="" href="{{URL::to('/account/sold')}}">Sold Products</a></li>
                        <li><a class="" href="{{URL::to('/account/bought')}}">Bought Products</a></li>
                        <li><a class="" href="{{route('user.myproduct')}}">My Products</a></li>
                        <li><a class="" href="{{route('wishlist.view')}}">Wishlist</a></li>
                    </ul>
                    <h3>User</h3>
                    <ul class="">
                        <li><a class="" href="{{ route('profile.index',['username'=>Auth::user()->username])}}">Profile</a></li>
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