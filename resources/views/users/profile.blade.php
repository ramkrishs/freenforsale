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

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Full name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Address:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Phone:</label>
                    <div class="col-md-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input class="btn btn-primary" value="Save Changes" type="button">
                        <span></span>
                        <input class="btn btn-default" value="Cancel" type="reset">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection