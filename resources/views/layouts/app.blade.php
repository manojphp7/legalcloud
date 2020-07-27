<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body, button, input, select, textarea {
            font-family: 'Open Sans', sans-serif;
            color: #222;
            font-size: 16px;
            line-height: 1.6;
            font-weight: normal;
            letter-spacing: .15px;
            background: #fff;
        }
        .custom-nav
            {
                background-color: #222;
                font-weight: 600;
            }
            .custom-nav ul li:hover
            {
                background-color: #ff9f1a;
                color:#fff;
            }
            .custom-nav ul li a
            {
                color:#fff!important;
            }
            @media (min-width: 768px){

            .navbar-nav{
                text-align:center;
                float:none;
            }
            .navbar-nav li{
                float:none;
                display:inline-block;
                
            }
            .navbar-nav > li > a
            {
                padding-top: 22px;
                padding-bottom: 22px;
            }
            .dropdown-toggle:visited,.dropdown-toggle:focus
            {
                background: #333333!important;
            }
            .dropdown-menu li 
            {
                width:100%;
            }
            .dropdown-menu
            {
                padding:0px;
            }
            li.dropdown.open a
            {
                background: #333333;
            }
            li.dropdown.open a:hover
            {
                background: #333333;
                color:#ff9f1a!important;
            }
            }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <img src="{{ asset('assets/images/logo.jpg')}}">
        <nav class="navbar navbar-default navbar-center navbar-static-top custom-nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                  

                    @if(Auth::user())
                        @includeWhen(Auth::user(), 'layouts._admin_menu')
                    @else
                        <ul class="nav navbar-nav">
                        <li><a href="{{ url('admin/posts') }}">Articles</a></li>
                        <li><a href="{{ url('admin/categories') }}">Categories</a></li>
                        <li><a href="{{ url('admin/comments') }}">Comments</a></li>
                        <li><a href="{{ url('admin/tags') }}">Tags</a></li>
                        </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                       
                
                    
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @include('flash::message')
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
