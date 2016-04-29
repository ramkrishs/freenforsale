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
                <div class="col-md-5">
                    <br>
                    <div class="product-img">
                        <img class="" src="{{URL::asset('images/'.$product['productImg'])}}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <h3 >{{$product['name']}}</h3>
                    <hr>
                    <div><p><i class="fa fa-money" aria-hidden="true"></i> <strong>Price</strong>: <i class="fa fa-usd" aria-hidden="true"></i>{{$product['price']}}</p></div>
                    <hr>
                    <div class="col-xs-5 remove-padding">
                        @if(\App\Interest::isInterest($product['name']))
                            <a href="{{route('interest.remove',['prodName'=>$product['name']])}}" class="btn-success btn  btn-block " @if(($user['username'] == Auth::user()->username)) disabled data-toggle="tooltip" data-placement="bottom" title="You cannot ping you :)" @endif()><i class="fa fa-check" title="" aria-hidden="true"></i> Contacted</a>
                        @else
                            <a href="{{route('interest.add',['prodName'=>$product['name']])}}" class="btn-success btn  btn-block " @if(($user['username'] == Auth::user()->username)) disabled data-toggle="tooltip" data-placement="bottom" title="You cannot ping you :)" @endif()><i class="fa fa-shopping-cart" title="" aria-hidden="true"></i> Ping Seller</a>
                        @endif

                    </div>
                    <div class="col-xs-5">
                        @if(\App\Wishlist::isInterest($product['name']))
                            <a href="{{route('wishlist.remove',['prodName'=>$product['name']])}}" class="btn-success btn  btn-wishlist "  @if(($user['username'] == Auth::user()->username)) disabled data-toggle="tooltip" data-placement="bottom" title="You cannot add your product to wishlist :)" @else data-toggle="tooltip" data-placement="right" title="Added to ur wishlist :)" @endif()> <i class="fa fa-heart heart-red" aria-hidden="true"></i></a>
                        @else
                            <a href="{{route('wishlist.add',['prodName'=>$product['name']])}}" class="btn-success btn  btn-wishlist "  @if(($user['username'] == Auth::user()->username)) disabled data-toggle="tooltip" data-placement="bottom" title="You cannot add your product to wishlist :)" @else data-toggle="tooltip" data-placement="right" title="Add to ur wishlist" @endif()> <i class="fa fa-heart" aria-hidden="true"></i></a>
                        @endif

                    </div>
                </div>
                <div class="col-md-12">
                    <h5><strong>Description :</strong></h5>
                    <hr>
                    <p>{{$product['description']}}</p>
                    <div><i class="fa fa-folder-o" aria-hidden="true"></i> Category: {{$product['category']}}</div>
                </div>
                <div class="col-md-12">
                    <br>
                </div>

                <div class="col-md-12">
                    <h5><strong>Seller information :</strong></h5>
                    <hr>
                    <div><strong>Name: </strong>{{$user['name']}} <strong>Phone:</strong> {{$user['phone']}}</div>
                    <div></div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>

        </div>




    </div>

@endsection