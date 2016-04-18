@extends('layouts.app')
@section('title','Free and For Sale - Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 main-container">
                <div class="btn-holder">
                    <a href="{{URL::to('/buy')}}" class="btn btn-lg btn-success text-center">What do you Buy ?</a>

                </div>
                <div class="btn-holder">
                    <a href="{{URL::to('/sell')}}" class="btn btn-lg btn-success text-center">Do you want to Sell
                        something? </a>
                </div>
            </div>
        </div>
    </div>
@endsection
