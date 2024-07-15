<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 1000px;
            margin: 20px 0;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.1);
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: #fff;
            font-size: 18px;
        }

        td img {
            width: 100px;
            border-radius: 8px;
        }

        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .cart_value, .order_deg {
            text-align: center;
            margin-bottom: 40px;
        }

        .order_deg {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.1);
        }

        .div_gap {
            margin: 10px 0;
            width: 100%;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: calc(100% - 160px);
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        textarea {
            resize: vertical;
        }

        .hero_area {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
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
                <td>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</td>
                <td>
                    <img src="/products/{{ $item->product->image }}" alt="Gambar Produk">
                </td>
                <td>
                    <form action="{{ url('delete_cart', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php $value += $item->product->price; ?>
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
                <input type="text" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="div_gap">
                <label for="address">Alamat</label>
                <textarea name="address" id="address">{{ Auth::user()->address }}</textarea>
            </div>
            <div class="div_gap">
                <label for="phone">Nomor HP</label>
                <input style="margin-bottom:15px" type="text" name="phone" value="{{ Auth::user()->phone }}">
            </div>
            <div class="div_gap">
                <input class="btn btn-primary" type="submit" value="Bayar COD">
                <a class="btn btn-success" href="{{ url('stripe', $value) }}">Bayar Pakai Kartu</a>
            </div>
        </form>
    </div>

    <!-- info section -->
    @include('home.footer')
</body>

</html>
