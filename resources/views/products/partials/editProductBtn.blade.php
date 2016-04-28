
<a href="{{route('product.edit',['prodName'=>$product['name']])}}" class="btn btn-success">
    <i class="fa fa-pencil" title="" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a>
<hr class="hr-custom">

<a id="delete-btn" class="btn btn-danger" href="{{route('product.delete',['prodName'=>$product['name']])}}">
    <i class="fa fa-trash-o"></i>
    Delete
</a>

