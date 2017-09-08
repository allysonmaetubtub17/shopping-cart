@extends('master')

@section('content')

    <style>

    .container{
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
    .container table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .container table td{
        padding:5px;
        vertical-align:top;
    }
    
    .container table tr td:nth-child(2){
        text-align:right;
    }
    
    .container table tr.top table td{
        padding-bottom:20px;
    }
    
    .container table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .container table tr.information table td{
        padding-bottom:40px;
    }
    
    .container table tr.heading td{
        background:#ff4081;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .container table tr.details td{
        padding-bottom:20px;
    }
    
    .container table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .container table tr.item.last td{
        border-bottom:none;
    }
    
    .container table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .container table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .container table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }

    .heading{
        background-color: pink;
        color: white;
    }
    </style>
</head>


    <div class="container">
        <div class="info">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 123<br>
                                Created: January 1, 2015<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Next Step Webs, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                            </td>
                            
                            <td>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            </div>
            
            <table class="items">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>

                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="table-image">
                            <img src="{{ asset('img/acoustic4.jpg') }}" alt="product" class="img-responsive cart-image">
                        </td>

                        <td>Acoustic Guitar</a></td>
                        <td class="quantity" data-id="">1</td>
                        <td>P1000</td>
                        <td class=""></td>

                    </tr>


        </table>

        <div class="spacer"></div>

    </div>

@endsection

@section('extra-js')

@endsection