@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')
    <h1><i class="fa fa-shopping-bag" aria-hidden="true"></i> My Wishlist</h1>

    <div class="row">
        <div class="col-xs-12">
                {{--@if(!$products->count())--}}
                    {{--<p>No Wishlist made so far</p>--}}
                {{--@else--}}

                {{--@endif--}}
                    @foreach($products as $product)
                        <div class="hovereffect">
                            <a class="wish-box" href="#">
                                <img src="{{URL::asset('images/'.$product['productImg'])}}" class="img-rounded" alt="" width="200" height="170">
                            </a>
                            <div class="overlay">
                                <h2>{{$product['products']}}</h2>
                                <a class="info" href="{{route('product.searchByName',['prodName'=>$product['products']])}}">Open Product</a>
                            </div>
                        </div>
                    @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-xs-offset-4">
        {{--{!! $products->links() !!}--}}
    </div>
@endsection