<!DOCTYPE html>
<html lang="id">

<head>
    @include('home.css')
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .hero_area {
            background-color: #eee;
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
            margin-top: -50px;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 300px;
            padding: 10px;
            border: 2px solid black;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, textarea:focus {
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
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>
    
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
                <td>{{ number_format((float)$item->product->price, 0, ',', '.') }}</td>
                <td>
                    <img width="150" src="/products/{{ $item->product->image }}" alt="{{ $item->product->title }}">
                </td>
                <td>
                    <form action="{{ url('delete_cart', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php $value += (float)$item->product->price; ?>
            @endforeach
        </table>
    </div>
    
    <div class="cart_value">
        <h3>Jumlah total keranjang kamu sekarang adalah : Rp. {{ number_format($value, 0, ',', '.') }}</h3>
    </div>
    
    <div class="order_deg">
        <form action="{{ url('confirm_order') }}" method="POST">
            @csrf
            <div class="div_gap">
                <label for="name">Nama Penerima</label>
                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="div_gap">
                <label for="address">Alamat</label>
                <textarea name="address" id="address">{{ Auth::user()->address }}</textarea>
            </div>
            <div class="div_gap">
                <label for="phone">Nomor HP</label>
                <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}">
            </div>
            <div class="div_gap" style="padding:15px;">
                <input class="btn btn-primary" type="submit" value="Bayar Cash On Delivery">
                <a class="btn btn-success" href="{{ url('stripe', $value) }}" style="margin-left:10px;">Gunakan Kartu Kredit</a>
            </div>
        </form>
    </div>
    
    @include('home.footer')
</body>

</html>
