<h5 class="text-center">Price: <span class="product-price">${{$product['price']}}</span></h5>
@if(\App\Interest::isInterest($product['name']))
    <a href="{{route('interest.remove',['prodName'=>$product['name']])}}" class="btn btn-success">
        <i class="fa fa-check" title="" aria-hidden="true"></i>&nbsp;&nbsp;Contacted</a>
@else
    <a href="{{route('interest.add',['prodName'=>$product['name']])}}" class="btn btn-success">
        <i class="fa fa-shopping-cart" title="" aria-hidden="true"></i>&nbsp;&nbsp;Ping Seller</a>
@endif
<hr class="hr-custom">
@if(\App\Wishlist::isInterest($product['name']))
    <a href="{{route('wishlist.remove',['prodName'=>$product['name']])}}" class="btn btn-success"  ><i class="fa fa-heart heart-red" aria-hidden="true"></i>&nbsp;&nbsp;Saved</a>
@else
    <a href="{{route('wishlist.add',['prodName'=>$product['name']])}}" class="btn btn-success"  ><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;Wishlist</a>
@endif
