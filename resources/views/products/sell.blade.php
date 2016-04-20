@extends('layouts.app')
@section('title','Free and For Sale - Sell')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="update-profile">
                    <!--  General -->
                    <form role="form" method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
                    <div class="form-group">
                        <h2 class="heading">
                            Enter the Product Details:
                        </h2>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('name') ? 'has-error' :'' }}"  id="name" name="name" type="text" value="{{Request::old('name') ?: ''}}">
                            <label for="name">
                                Name
                            </label>
                            </input>
                            @if($errors->has('name'))
                                <div class="form-error">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('price') ? 'has-error' :'' }}"  id="price" name="price" type="text" value="{{Request::old('price') ?: ''}}">
                            <label for="price">
                                Price
                            </label>
                            </input>
                            @if($errors->has('price'))
                                <div class="form-error">{{$errors->first('price')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <textarea class="floatLabel {{ $errors->has('description') ? 'has-error' :'' }}"  id="description" name="description"  >{{Request::old('description') ?: ''}}</textarea>
                            <label for="description">
                                Description
                            </label>
                            @if($errors->has('description'))
                                <div class="form-error">{{$errors->first('description')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input type="file" class="floatLabel {{ $errors->has('productImg') ? 'has-error' :'' }}" name="image" >
                            <h5>Upload a product picture...</h5>
                            <br>
                            @if($errors->has('productImg'))
                                <div class="form-error">{{$errors->first('productImg')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel {{ $errors->has('category') ? 'has-error' :'' }}" id="category" name="category" type="text" value="{{Request::old('category') ?: ''}}">
                            <label for="category">
                                Category
                            </label>
                            </input>
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
                                        Submit
                                    </strong>
                                </button>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                        </form>
                </div>

            </div>
        </div>
    </div>
@endsection