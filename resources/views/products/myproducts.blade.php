@extends('layouts.subapp')
@section('title','Free and For Sale - My Products')

@section('main-content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/1.3.2/sweetalert2.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/1.3.2/sweetalert2.min.css">
        <div class="row">
            <div class="col-xs-12">
                <div class="product-lists">
                    @if(!$products->count())
                        <p>No Products found Sorry</p>
                    @else
                        @foreach($products as $product)
                            @include('products.partials.editProductblock')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-xs-offset-5">
            {!! $products->links() !!}
        </div>
@endsection