{{--<nav class="navbar navbar-inverse">--}}
{{--<nav class="navbar navbar-expand-md navbar-dark bg-dark">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#"> Scrapping Site </a>--}}
            {{--<div id="navbar" class="collapse navbar-collapse">--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class="{{Request::is('/')?'activate':''}}">--}}
                        {{--<a href="/">Home</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{Request::is('/about')?'activate':''}}">--}}
                        {{--<a href="/about"> About </a>--}}
                    {{--</li>--}}
                    {{--<li class="{{Request::is('/contact')?'activate':''}}">--}}
                        {{--<a href="/contact"> Contact </a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
                {{--<form class="form-inline my-2 my-lg-0">--}}
                    {{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
                    {{--<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> Scrapping Site </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>