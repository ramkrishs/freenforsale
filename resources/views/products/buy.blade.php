@extends('layouts.app')
@section('title','Free and For Sale - Buy')

@section('content')
    @include('layouts.partials.searchnav')
    <div class="container product-container">
        @include('layouts.partials.alerts')
        <div class="row">
            <div class="col-xs-2">
                @include('products.partials.filters')
            </div>
            <div class="col-xs-10">
                <div class="product-lists">

                    @if(!$products->count())
                        <p>Sorry no results found!!</p>
                    @else
                        @foreach($products as $product)
                            @include('products.partials.productblock')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-xs-offset-6">
            {!! $products->links() !!}

        </div>

    </div>

@endsection