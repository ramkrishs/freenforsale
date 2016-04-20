@extends('layouts.subapp')
@section('title','Free and For Sale - Settings')
@section('main-content')
    <div class="Box row">
        <div class="row">

            <div class="col-md-12 ">
                <div class="update-profile">
                    <form action="">
                        <!--  General -->
                        <div class="form-group">
                            <h2 class="heading">
                                Change your password:
                            </h2>

                            <div class="controls">
                                <input class="floatLabel" id="password" name="password" type="text">
                                <label for="password">
                                    Password
                                </label>
                                </input>
                            </div>
                            <div class="controls">
                                <input class="floatLabel" id="confirmpass" name="confirmpass" type="tel">
                                <label for="confirmpass">
                                    Confirm password
                                </label>
                                </input>
                            </div>

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