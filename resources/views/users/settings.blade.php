@extends('layouts.subapp')
@section('title','Free and For Sale - Settings')
@section('main-content')
    <div class="Box row">
        <div class="row">

            <div class="col-md-12 ">

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="new">
                        <br>
                        <fieldset>
                            <div class="form-group">
                                <div class="right-inner-addon">

                                    <input class="form-control input-lg" placeholder="Current Password" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="right-inner-addon">

                                    <input class="form-control input-lg" placeholder="New Password" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="right-inner-addon">

                                    <input class="form-control input-lg" placeholder="Confirm Password" id=""
                                           type="password">
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <button class="btn btn-primary btn-lg btn-block">Change Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection