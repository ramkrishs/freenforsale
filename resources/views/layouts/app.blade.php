<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Lato:100,300,400,700" rel='stylesheet'
          type='text/css'>

    <!-- Styles -->
    <link href="{{ URL::asset('_css/home.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('_css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('_css/main.css') }}">


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>


        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text">Hello</p></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <b>
                        @if (Auth::guest())
                            Guest
                        @else
                            {{ ucfirst(Auth::user()->getNameOrUserName()) }}
                        @endif
                    </b>
                    <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                @if (Auth::guest())
                                    <form class="form" role="form" method="POST" action="{{ route('auth.signin') }}">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                   placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="form">


                                        <div class="form-group">
                                            <a class="form-control btn btn-success"
                                               href="{{ route('profile.index',['username'=>Auth::user()->username])}}">View Profile</a>
                                        </div>
                                        <div class="form-group">

                                            <a class="form-control btn btn-success"
                                               href="{{ route('user.profile')}}">Edit Profile</a>
                                        </div>
                                        <div class="form-group">
                                            <a class="form-control btn btn-success"
                                               href="{{ URL::to('/user/preference')}}">Preference</a>

                                        </div>


                                    </div>
                                @endif
                            </div>
                            <div class="bottom text-center">
                                @if (Auth::guest())
                                    New here ? <a href="{{ route('auth.signup')}}"><b>Sign Up</b></a>
                                @else
                                    Want to logout ? <a href="{{ route('auth.signout')}}"><b>Logout</b></a>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('content')

        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('_js/main.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
