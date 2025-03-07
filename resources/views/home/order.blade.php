<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('home.css')
    <style type="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table{
            border: 2px solid #3333;
            text-align: center;
            width: 800px;
        }

        th{
            border: 2px solid #3333;
            background-color: #666;
            color: white;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }

        td{
            border: 1px solid #3333;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')

        <div class="div_center">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Status Pengiriman</th>
                    <th>Gambar</th>
                </tr>

                @foreach($order as $order)
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img height="70" width="50" src="products/{{$order->product->image}}" alt="Gambar Produk">
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>



    @include('home.footer')
</body>

</html>