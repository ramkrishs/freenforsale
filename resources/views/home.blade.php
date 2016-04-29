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
        <div class="jumbotron" >

                <img width="300" src="{{URL::asset('_img/logo.png')}}" class="pull-left">
                <h1 class="text-center"><b>Buy or sell your items among your college mates. <b><h1></h1><h3>Help others and get help!</h3></b></b></h1>
        </div>
    </div>
@endsection
