@extends('master')

@section('content')

<style> 

    .jumbotron{
        background-image: url("img/colorful.jpg");
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        color: #f8bbd0;
        text-shadow: 2px 2px black;
        padding: 5px;
    }

    h1{
        font-family: "bradley hand itc";
        font-weight: bolder;

    }

</style>

<div class="container">


        <div class="jumbotron text-center clearfix">
            <h1>MusiCart Online Store</h1>
            <p>Music, the mosaic of air</p>
            <!-- Removed buttons
            <p>
                <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Shop Now</a>
                <a href="{{ url('/cart') }}" class="btn btn-success btn-lg">View Cart</a>
            </p>-->
        </div> <!-- end jumbotron -->

        <div class="row">

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-left">
                                <a href=""><img src="{{ asset('img/musicart1.png') }}" alt="product" class="img-responsive"></a>
                                <p align="center"><a href="{{ url('/shop') }}" class="btn btn-info btn-lg">SHOP NOW</a><p>
                                <!--<h3 align="center">SHOP NOW</h3>-->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>  
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-left">
                                <a href=""><img src="{{ asset('img/musicart.png') }}" alt="product" class="img-responsive"></a>
                                <p align="center"><a href="{{ url('/cart') }}" class="btn btn-info btn-lg">VIEW MY CART</a><p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>  
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-left">
                            <br>
                                <a href=""><img src="{{ asset('img/profile.jpg') }}" alt="product" class="img-responsive"></a>
                                <br><br>
                                <p align="center"><a href="#" class="btn btn-info btn-lg">MY PROFILE</a><p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>  
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->


</div>
@endsection
