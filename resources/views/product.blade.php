@extends('master')

@section('content')

<style>
        img{
            width: 100%;
            height: 50%;
        }
</style>

    <div class="container">
        <p><a href="{{ url('/shop') }}">Shop</a> / View Product</p>
        <h1>{{ $product->name  }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img class="product-img" src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>{{ $product->price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->price_id }}">
                    <input type="hidden" name="amount" value="{{ $product->price }}">
                    <input type="hidden" name="barcode" value="{{ $product->barcode }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>
                <br><br>
                <pre>
                <p>{{ $product->description }}</p>
                </pre>
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <br><br>

    </div> <!-- end container -->

@endsection
