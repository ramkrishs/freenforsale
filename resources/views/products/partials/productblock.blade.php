<div class="Box list-group product-list-items">
    <a href="{{route('product.searchByName',['prodName'=>$product['name']])}}" class="product-item">
        <div class="col-md-3">
            <img class="product-img" src="{{URL::asset('images/'.$product['productImg'])}}" alt="">
        </div>
        <div class="col-md-9">
            <h4 class="list-group-item-heading">{{$product['name']}}</h4>
            <hr>
            <div class="col-md-10">
                <h5>Description</h5>
                <p class="list-group-item-text">{{$product['description']}}</p>

                <hr>

                <span class="label label-primary">{{$product['category']}} <i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-2">
                @include('products.partials.viewProductBtn')
            </div>
        </div>
    </a>
</div>