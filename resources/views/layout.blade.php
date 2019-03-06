<!doctype html>
<html>
<head>
    <title> @yield('title','Laracast') </title>
    <style>
        head{
            background: #999;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php $names = ['a','c','d']?>
    @yield('content')

    <h1> Layout Header </h1>
    <li> <a href="/"> Home </a></li>
    <li> <a href="contact"> Contact </a></li>
    <li> <a href="about"> About </a></li>



</body>
</html>