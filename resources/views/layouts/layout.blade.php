<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> @yield('title','Laracast') </title>
    <style>
        head{
            background: #999;
            padding: 10px;
        }
        body{
            background: #2a9055;
        }
    </style>
</head>
<body>

    @yield('content')
    @include('inc.sidebar')

    <li> <a href="/"> Home </a></li>
    <li> <a href="contact"> Contact </a></li>
    <li> <a href="about"> About </a></li>



</body>
</html>