
<?php
ini_set ('display_errors',1);
?>
        <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>IVA</title>
    <link rel="shortcut icon" href="{{asset (url ('images/logo.ico'))}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="{{url ('js/script.js')}}"></script>--}}
    <script src="{{url ('js/ajax.js')}}"></script>
    {{--<link rel="stylesheet" type="text/css" href="{{url ('css/style_1.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{url ('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <header class="col-lg-12">
        <div class="logo col-lg-4 col-md-4 col-sm-4">
            <a href="homePage">
                <img src="{{asset (url('images/logo.png'))}}">
            </a>
        </div>
        <div class="shop_name col-lg-4 col-md-4 col-sm-4">
            <h1>IVA</h1>
        </div>
        <div class="social col-lg-4 col-md-4 col-sm-4">
            <ul class="row">
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="http://www.facebook.com" class="soc_1"></a>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="http://www.google.com" class="soc_2"></a></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="http://www.twitter.com" class="soc_3"></a>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-default navbar-expand-sm navbar-expand-xs col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="sr-only">Меню</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="ringCatalog">КАТАЛОГ</a>
                    <ul class="dropdown-menu" style="z-index: 1;">
                        <li><a href="ringCatalog">КОЛЬЦА</a></li>
                        <li><a href="braceletCatalog">БРАСЛЕТЫ</a></li>
                        <li><a href="necklacesCatalog">ОЖЕРЕЛЬЕ</a></li>
                        <li><a href="earringCatalog">СЕРЬГИ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="gallery">ГАЛЕРЕЯ</a>

                </li>
                <li>
                    <a href="aboutUs">О НАС</a>
                </li>
                <li>
                    <a href="contacts">КОНТАКТЫ</a>
                </li>


                @if (Auth::guest())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"  ><i class="far fa-user-circle"></i></a>
                        <ul class="dropdown-menu" style="z-index: 1;">
                            <li><a href="{{ route('login') }}">ВОЙТИ</a></li>
                            <li><a href="{{ route('register') }}">РЕГИСТРАЦИЯ</a></li>
                        </ul>
                    </li>

                @else
                    <li class="login dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}<i class="far fa-user-circle"></i>
                        </a>
                        <ul class="login_sub_menu dropdown-menu" style="z-index: 1;">
                            <li class="sub_login">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    ВЫЙТИ
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @endif

                        </ul>
                    </li>

            </ul>
            </div>
        </nav>

    </header>

{{--<div class="phone_menu">--}}
@yield('content')