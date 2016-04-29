@extends('layouts.subapp')
@section('title','Free and For Sale - My Products')

@section('main-content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/1.3.2/sweetalert2.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/1.3.2/sweetalert2.min.css">
    <div class="row">
        <div class="col-xs-12">
            <div class="product-lists">
                @if(!$product)
                    <p>No result found Sorry</p>
                @else
                    @foreach($users as $user)
                        @include('products.partials.interestBlock')
                    @endforeach
                @endif


            </div>
        </div>
    </div>
    <div class="col-xs-12 col-xs-offset-5">

    </div>
@endsection