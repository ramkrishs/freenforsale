@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="row">
        <div class="col-xs-12">
            <div class="product-lists">
                @if(!$products->count())
                    <p>No result found Sorry</p>
                @else
                    @foreach($products as $product)
                        @include('products.partials.boughtProductblock')
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-xs-offset-5">
        {!! $products->links() !!}
    </div>
@endsection