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
            </div>
            <div class="col-md-2">
                <h5 class="text-center">Price: <span class="product-price">${{$product['price']}}</span></h5>
                <a href="" class="btn btn-success">
                    <i class="fa fa-shopping-cart" title="" aria-hidden="true"></i>&nbsp;&nbsp;Add to cart</a>
                <hr class="hr-custom">
                <a href="" class="btn btn-success"><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;&nbsp;Wishlist</a>
            </div>

        </div>
    </a>

</div>