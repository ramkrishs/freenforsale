<div class="Box list-group product-list-items">
    <a href="{{route('profile.index',['username'=>$user['username']])}}" class="product-item">
        <div class="col-md-3">
            <img class="product-img img-circle"  src="{{URL::asset('images/'.$user['profilepic'])}}" alt="">
        </div>
        <div class="col-md-9">
            <h4 class="list-group-item-heading">{{$product['name']}}</h4>
            <hr>
            <div class="col-md-10">
                <h4>{{$user['name']}}</h4>
                <h5>Interested in </h5>
                <h5>You can reach me at : <i class="fa fa-phone-square" aria-hidden="true"></i> {{$user['phone']}}</h5>
                @if(\App\Product::isSold($product['name']))
                    <a class="btn btn-info" disabled>Sold <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                @else
                    <a class="btn btn-info" href="{{route('product.sell',['productname'=>$product['name'],'buyer'=>$user['username']])}}">Close the Deal <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                @endif
            </div>
            <div class="col-md-2">
                <img class="product-img" src="{{URL::asset('images/'.$product['productImg'])}}" alt="">
            </div>

        </div>
    </a>
</div>