@extends('layouts.app')
@section('title','Free and For Sale - Buy')
@section('content')
    <div class="container">
        @include('layouts.partials.alerts')
        <div class="row">
            <div class="col-xs-2">
                @include('products.partials.filters')
            </div>
            <div class="col-xs-10">
                <div class="product-lists">
                    @foreach($products as $product)
                        @include('products.partials.productblock')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection