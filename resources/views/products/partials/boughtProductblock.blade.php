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
                <h5 class="">Price: <span class="product-price">${{$product['price']}}</span></h5>
            </div>
            <div class="col-md-2">

            </div>

        </div>
    </a>

</div>