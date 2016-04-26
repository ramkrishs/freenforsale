@extends('layouts.app')
@section('title','Free and For Sale - Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 main-container ">
                <div class="btn-holder">
                    <a href="{{route('product.view')}}" class="btn btn-lg btn-success btn-custom text-center">What do you Buy ?</a>
                </div>
            </div>
            <div class="col-md-6 main-container">
                <div class="btn-holder">
                    <a href="{{route('product.add')}}" class="btn btn-lg btn-success btn-custom text-center">Do you want to Sell
                        something? </a>
                </div>
            </div>
        </div>
    </div>
@endsection
