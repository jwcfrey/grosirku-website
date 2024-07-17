<!DOCTYPE html>
@include('home.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="shortcut icon" href="admincss/img/logogrosirku.png" type="image/x-icon">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<title>Grosirku</title>

<!-- Owl Carousel stylesheet -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- Bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- Responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- AOS (Animate On Scroll) library -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

<head>
    <style type="text/css">
        body {
            background-color: transparent;
            color: transparent;
        }

        .hero_area {
            background-color: transparent;
            padding: 20px 0;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border-collapse: collapse;
            width: 800px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: black;
            padding: 10px;
        }

        td {
            border: 2px solid skyblue;
            padding: 15px;
            transition: background-color 0.3s;
        }

        td:hover {
            background-color: #f1f1f1;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .order_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -60px;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 300px;
            padding: 10px;
            border: 2px solid black;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: black;
            outline: none;
        }

        .div_gap {
            padding: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-primary {
            background-color: #007BFF;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            margin-left: 10px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        /* Media queries for different screen sizes */
        @media screen (max-width: 1200px) {
            .hero_area {
                padding: 15px;
            }

            .div_deg {
                margin: 30px;
            }

            table {
                width: 700px;
            }

            .formulir {
                margin-left: -120px;
            }
        }

        @media screen and (min-width: 993px) and (max-width: 1119px) {
            .hero_area {
                padding: 10px;
            }

            .div_deg {
                margin: 20px;
            }

            table {
                width: 600px;
            }

            th,
            td {
                font-size: 18px;
            }

            .formulir {
                margin-left: -128px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 992px) {
            .hero_area {
                padding: 5px;
            }

            .div_deg {
                margin: 10px;
            }

            table {
                width: 500px;
            }

            th,
            td {
                font-size: 16px;
            }

            .formulir {
                margin-left: -120px;

            }
        }

        @media screen and (min-width: 576px) and (max-width: 767px) {
            .tomboll {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .div_deg {
                margin: 5px;
            }

            table {
                width: 400px;
            }

            th,
            td {
                font-size: 14px;
            }

            .btn {
                padding: 5px 10px;
                font-style: bold;
            }

            .formulir {
                margin-left: -138px;
                padding: 10px;
            }
        }

        @media screen and (min-width: 400px) and (max-width: 575px) {
            table {
                width: 300px;
            }

            th,
            td {
                font-size: 12px;
            }

            input[type="text"],
            textarea {
                width: 200px;
            }

            .btn {
                padding: 3px 7px;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
        <div class="div_deg">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Hapus</th>
                </tr>

                <?php $value = 0; ?>
                @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ number_format((float) $item->product->price, 0, ',', '.') }}</td>
                        <td>
                            <img width="150" src="/products/{{ $item->product->image }}" alt="{{ $item->product->title }}">
                        </td>
                        <td>
                            <form action="{{ url('delete_cart', $item->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php    $value += (float) $item->product->price; ?>
                @endforeach
            </table>
        </div>

        <div class="cart_value">
            <h3>Jumlah total keranjang kamu sekarang adalah : Rp. {{ number_format($value, 0, ',', '.') }}</h3>
        </div>

        <div class="order_deg">
            <form action="{{ url('confirm_order') }}" method="POST">
                @csrf
                <div class="div_gap formulir">
                    <label for="name">Nama Penerima</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="div_gap formulir">
                    <label for="address">Alamat</label>
                    <textarea name="address" id="address">{{ Auth::user()->address }}</textarea>
                </div>
                <div class="div_gap formulir">
                    <label for="phone">Nomor HP</label>
                    <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}">
                </div>
                <div class="div_gap tomboll" style="padding:15px;">
                    <input class="btn btn-primary" type="submit" value="Bayar Cash On Delivery">
                    <a class="btn btn-success" href="{{ url('stripe', $value) }}" style="margin-left:10px;">Gunakan
                        Kartu Kredit</a>
                </div>
            </form>
        </div>
    </div>

    @include('home.footer')
</body>

</html>