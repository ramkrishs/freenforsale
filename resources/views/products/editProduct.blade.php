@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="Box row">
        <!-- left column -->
        <form role="form" method="POST" action="{{ route('product.edit',['prodName'=>$product['name']]) }}" enctype="multipart/form-data">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">

                @if($product['productImg'])
                    <img src="{{URL::asset('images/'.$product['productImg'])}}"
                         class="avatar  img-thumbnail" alt="avatar">
                @else
                    <img src="{{URL::asset('images/profilepic.jpg')}}"
                         class="avatar img-circle img-thumbnail" alt="avatar">
                @endif
                <h6>Upload a different photo...</h6>
                <input type="file" name="image" class="">
            </div>
        </div>

        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            <div class="update-profile">
                <!--  General -->
                    <div class="form-group">
                        <h2 class="heading">
                            Edit the Product Details:
                        </h2>

                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('name') ? 'has-error' :'' }}" id="name" name="name" type="text" @if(!empty($product['name'])) value="{{$product['name']}}" @endif()>

                            <label for="name">
                                Product Name
                            </label>
                            </input>
                            @if($errors->has('name'))
                                <div class="form-error">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('price') ? 'has-error' :'' }}"  id="price" name="price" type="text" @if(!empty($product['price'])) value="{{$product['price']}}" @endif()>
                            <label for="price">
                                Price
                            </label>
                            </input>
                            @if($errors->has('price'))
                                <div class="form-error">{{$errors->first('price')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <textarea class="floatLabel {{ $errors->has('description') ? 'has-error' :'' }}"  id="description"  name="description" >@if(!empty($product['description'])) {{$product['description']}} @endif()</textarea>
                            <label for="description">
                                Phone
                            </label>

                            @if($errors->has('description'))
                                <div class="form-error">{{$errors->first('description')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <select class="floatLabel"  id="category" name="category" >
                            <option value="None">Select</option>
                            <option value="Furniture">Furniture</option>
                            <option value="HomeCare">HomeCare</option>
                            <option value="PersonalCare">PersonalCare</option>
                            <option value="Vehicle">Vehicle</option>
                            <option value="Sports">Sports</option>
                            <option value="Stationary">Stationary</option>
                            <option value="Electronics">Electronics</option>
                            </select>
                            <label for="category">
                                Category
                            </label>
                            @if($errors->has('category'))
                                <div class="form-error">{{$errors->first('category')}}</div>
                            @endif
                        </div>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <!--  Details -->
                        <div class="form-group">

                            <div class="controls">
                                <button class="col-1-4" type="submit" value="Submit">
                                    <strong>
                                        Update
                                    </strong>
                                </button>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
            </div>
        </div>
        </form>
    </div>

@endsection