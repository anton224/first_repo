<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> @yield('title','Laracast') </title>
    <link rel="stylesheet" href="/css/app.css">
    {{--<style>--}}
        {{--head{--}}
            {{--background: #999;--}}
            {{--padding: 10px;--}}
        {{--}--}}
        {{--body{--}}
            {{--background: #395a90;--}}
        {{--}--}}
    {{--</style>--}}
</head>
<body>

    @include('inc.navbar')
    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row" id = "row_bar">
            <div class="col-md-8 col-lg-8">
                @if(count($errors > 0))
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p> Copyright 2019 &copy; Anton</p>
    </footer>
    {{--<li> <a href="/"> Home </a></li>--}}
    {{--<li> <a href="contact"> Contact </a></li>--}}
    {{--<li> <a href="about"> About </a></li>--}}



</body>
</html>