<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'MusiCart')</title>

    <meta name="description" content="Laravel Shopping Cart Example">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--     <link href="{{ asset('css/master.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
    <!-- Stylesheets -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

    @yield('extra-css')

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('img/musicart1.png') }}">

    <style>
        body{
            background-color: #eceff1;
        }
        .spacer {
            margin-bottom: 100px;
        }

        .cart-image {
            width: 100px;
        }

        footer {
            background-color: #cfd8dc;
            padding: 20px 0;
        }

        .table>tbody>tr>td {
            vertical-align: middle;
        }

        .side-by-side {
            display: inline-block;
        }

        header{
            font-family: "bradley hand itc";
            font-weight: bolder;
            font-size: 1.5em;
            background-color: #cfd8dc; 

        }

        pre{
            overflow: scroll;
        }

        .nav:hover{
            color: black;
        }

        .dropdown-menu{
            font-family: "bradley hand itc";
            font-weight: bolder;
        }

    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/shop') }}">MusiCart</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/cart') }}">Cart</a></li>
                @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->customer->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><strong>
                                            Logout</strong>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

    </header>
    @yield('content')

    <footer>
      <div class="container">
        <p class="text-muted">By Allyson Mae Tubtub</a></p>
      </div>
    </footer>

<!-- JavaScript -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script src="{{ asset('js/app.js') }}"></script>

@yield('extra-js')

</body>
</html>
