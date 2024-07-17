<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    @include('home.css')
    <style type="text/css">
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid #3333;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid #3333;
            background-color: #666;
            color: white;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }

        td {
            border: 1px solid #3333;
            padding: 10px;
        }

        /* Media queries for different screen sizes */
        @media screen and (min-width: 375px) and (max-width: 425px) {
            .div_center {
                margin: 20px;
            }

            table {
                width: 300px;
                font-size: 12px;
            }

            th, td {
                padding: 5px;
            }

            img {
                height: 50px;
                width: 40px;
            }
        }

        @media screen and (min-width: 426px) and (max-width: 768px) {
            .div_center {
                margin: 30px;
            }

            table {
                width: 500px;
                font-size: 14px;
            }

            th, td {
                padding: 7px;
            }

            img {
                height: 60px;
                width: 45px;
            }
        }

        @media screen and (min-width: 769px) and (max-width: 1024px) {
            .div_center {
                margin: 40px;
            }

            table {
                width: 700px;
                font-size: 16px;
            }

            th, td {
                padding: 8px;
            }

            img {
                height: 65px;
                width: 50px;
            }
        }

        @media screen and (min-width: 1024px) and (max-width: 1044px) {
            .div_center {
                margin: 50px;
            }

            table {
                width: 750px;
                font-size: 18px;
            }

            th, td {
                padding: 9px;
            }

            img {
                height: 70px;
                width: 55px;
            }
        }

        @media screen and (min-width: 1045px) {
            .div_center {
                margin: 60px;
            }

            table {
                width: 800px;
                font-size: 19px;
            }

            th, td {
                padding: 10px;
            }

            img {
                height: 70px;
                width: 50px;
            }
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

    <br><br><br>
    @include('home.footer')
</body>

</html>
