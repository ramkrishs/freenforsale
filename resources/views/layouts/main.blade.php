<html>
<head>
    <title>@yield('title')</title>
    @section('head')
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('_css/bootstrap.min.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('_css/index.css') }}" rel="stylesheet" type="text/css" />
    @show
</head>
<body>

<div class="container">
    <div class="content">
        <div><img class="home-logo" src="{{ URL::asset('_img/utd-logo.png') }}"> </div>
        <div class="title"><img class="home-logo" src="{{ URL::asset('_img/comet.png') }}"> Free and For Sale</div>
        @yield('content')
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
<script src="{{ URL::asset('_js/bootstrap.min.js')}}" ></script>
<script src="{{ URL::asset('_js/main.js') }}"></script>
</body>
</html>