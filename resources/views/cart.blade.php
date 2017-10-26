@extends('master')
@section('content')


<style>

    th {
        background-color: #78909c;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #cfd8dc;
    }

    h1 {
        font-family: "bradley hand itc";
        font-weight: bolder;
    }

    p{
        font-family: "bradley hand itc";
        font-weight: bolder;
        font-size: 1.5em;
    }



</style>

    <div class="container">
        <p><a href="{{ url('shop') }}">Home</a> / Cart</p>
        <h1>My Cart</h1>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (sizeof($items) > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image">Image</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
               
                </thead>

                <tbody>
                @foreach ( $items as $item )
                    <tr>
                        <td class="table-image">
                            <a href="{{ url('shop', [$item->id]) }}">
                            <img src="{{ asset('img/' . $item->product->image) }}" alt="product" class="img-responsive cart-image"></a>
                        </td>
                        <td><a href="{{ url('shop', [$item->id]) }}">{{ $item->product->name }}</a></td>
                        <td>
                            <select class="quantity" id="quantity" data-id="{{ $item->id }}">
                                <option {{ $item->pivot->quantity == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->pivot->quantity == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->pivot->quantity == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->pivot->quantity == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->pivot->quantity == 5 ? 'selected' : '' }}>5</option>
                            </select>
                        </td>
                        <td>P{{ ($item->pivot->quantity * $item->price) }}</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('cart', $item->id) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" id="btn" class="btn btn-danger btn-sm" value="Remove">
                            </form>


                            <form action="#" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                            </form>
                        </td>
                    </tr>
                @endforeach
                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right"><strong>Your Total</strong></td>
                        <td class="table-bg">P{{ $total_amount }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <br><br><br>
                <a href="{{ url('/shop') }}" id="btn" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
                <br><br>

            <form>
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="upload" value="1">
            <input type="hidden" name="business" value="musicart@gmail.com">

            <?php $count = 0; ?>
            @foreach($items as $item)
            <?php $count++; ?>
            <input type="hidden" name="item_name_{{ $count }}" value="{{ $item->product->name }}">
            <input type="hidden" name="amount_{{ $count }}" value="{{ $item->price }}">
            <input type="hidden" name="quantity_{{ $count }}" value="{{ $item->quantity }}">
            <input type="hidden" name="shipping_{{ $count }}" value="150">
            @endforeach
            <h3>Checkout:</h3><input type="image" name="submit" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" formaction="https://www.sandbox.paypal.com/cgi-bin/webscr" value="PayPal">
            </form>


            <div style="float:right">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" id="btn" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
            </div>
            @else 
                <h3>You have no items in your shopping cart</h3>
                <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
            @endif

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection

@section('extra-js')

    <script>
        console.log(document.getElementById('quantity').value);

        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                    type: "PUT",
                    url: '{{ url("/cart") }}' + '/' + id,
                    data: {
                        'quantity': this.value,
                        'product_price_id': id
                    },
                    success: function(data) {
                        window.location.href = '{{ url('/cart') }}';
                    }
                });
            });
        })();
    </script>
@endsection
