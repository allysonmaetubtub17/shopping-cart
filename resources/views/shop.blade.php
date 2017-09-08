
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
        font-family: "bradley hand itc";
    }

    .jumbotron>p{
        font-size: 2em;
        font-weight: bolder;
    }

    h1{
        font-family: "bradley hand itc";
        font-weight: bolder;
    }

    .row.a{
        size: 
    }

    .product-img {
        width: 150px;
        height: 300px;
    }

    .thumbnail{
        height: 350px;
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
            </p>
            -->
        </div> <!-- end jumbotron -->


            <div class="row">
                @if (!empty($products))
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <div class="caption text-center">
                                <a href="{{ url('shop', [$product->price_id])}}">
                                    <img class="product-img" src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive">
                                    <!--<a href="{{ url('shop/product')}}">-->
                                    <h4>{{ $product->name }}</h4>                    
                                        <!--<p>{{ $product->description }}</p>-->
                                        <p><i>{{ $product->price_description }}</i></p>
                                        <p>{{ $product->price }}</p>
                                    </a>
                                </div> <!-- end caption -->
                            </div> <!-- end thumbnail -->
                        </div> <!-- end col-md-3 -->
                    @endforeach
                @else
                    Empty!
                @endif
            </div> <!-- end row -->


    </div> <!-- end container -->

@endsection