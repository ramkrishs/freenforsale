<nav class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-xs-5">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <a href="{{route('home')}}" ><img src="{{URL::asset('_img/logo.png')}}" class="main-logo" alt="free and for sale "></a>
            </a>
        </div>
        </div>
        <div class="col-xs-3">
            <ul class="nav navbar-nav center-block">
                <li><a class="btn" href="{{route('product.view')}}">Buy</a></li>
                <li><a class="btn" href="{{route('home')}}">Home</a></li>
                <li><a class="btn " href="{{route('product.add')}}">Sell</a></li>
            </ul>
        </div>
        <div class="col-xs-4">
        <ul class="nav navbar-nav navbar-right">

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
                                    <form class="form" role="form" method="POST" class="form" action="{{ route('auth.signin') }}">
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
                                            <button type="submit" class=" form-control btn btn-primary btn-block">Sign in</button>
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
                            <br>
                            <br>
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
        </div>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>