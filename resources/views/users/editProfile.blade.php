@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="Box row">
        <!-- left column -->
        <form role="form" method="POST" action="{{ route('user.profile') }}" enctype="multipart/form-data">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">

                @if(Auth::user()->profilepic)
                    <img src="{{URL::asset('images/'.Auth::user()->profilepic)}}"
                         class="avatar img-circle img-thumbnail" alt="avatar">
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
                            Enter the Personal Details:
                        </h2>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('username') ? 'has-error' :'' }}"  id="username" name="username" type="text" @if(!empty($users['username'])) value="{{$users['username']}}" @endif() disabled>
                            <label for="username">
                                Username
                            </label>
                            </input>
                            @if($errors->has('username'))
                                <div class="form-error">{{$errors->first('username')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('name') ? 'has-error' :'' }}" id="name" name="name" type="text" @if(!empty($users['name'])) value="{{$users['name']}}" @endif()>

                            <label for="name">
                                Full Name
                            </label>
                            </input>
                            @if($errors->has('name'))
                                <div class="form-error">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel  {{ $errors->has('address') ? 'has-error' :'' }}"  id="address" name="address" type="text" @if(!empty($users['address'])) value="{{$users['address']}}" @endif()>
                            <label for="address">
                                Address
                            </label>
                            </input>
                            @if($errors->has('address'))
                                <div class="form-error">{{$errors->first('address')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel {{ $errors->has('phone') ? 'has-error' :'' }}"  id="phone" @if(!empty($users['phone'])) value="{{$users['phone']}}" @endif() name="phone" type="text">
                            <label for="phone">
                                Phone
                            </label>
                            </input>
                            @if($errors->has('phone'))
                                <div class="form-error">{{$errors->first('phone')}}</div>
                            @endif
                        </div>
                        <div class="controls">
                            <input class="floatLabel {{ $errors->has('email') ? 'has-error' :'' }}" id="email" name="email" type="tel" @if(!empty($users['email'])) value="{{$users['email']}}" @endif() dis>
                            <label for="email">
                                Email
                            </label>
                            </input>
                            @if($errors->has('email'))
                                <div class="form-error">{{$errors->first('email')}}</div>
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
            </div>
        </div>
        </form>
    </div>

@endsection