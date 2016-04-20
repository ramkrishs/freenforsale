@extends('layouts.subapp')
@section('title','Free and For Sale - Profile')
@section('main-content')

    <div class="Box row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="https://avatars3.githubusercontent.com/u/2312369?v=3&s=140"
                     class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block well well-sm">
            </div>
        </div>

        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            {{--<div class="alert alert-info alert-dismissable">--}}
            {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
            {{--<i class="fa fa-coffee"></i>--}}
            {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
            {{--</div>--}}



            <div class="update-profile">
                <form role="form" method="POST" action="{{ route('user.profile') }}">
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
                </form>
            </div>
        </div>
    </div>

@endsection