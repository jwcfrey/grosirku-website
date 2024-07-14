<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        body {
            background-color: #1a202c;
            color: #cbd5e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .page-content {
            opacity: 0;
            animation: slideIn 0.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #4299e1;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #2b6cb0;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px;
            text-align: center;
            border: 1px solid #4299e1;
        }

        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #4299e1;
        }

        img {
            max-width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            margin: 4px;
            cursor: pointer;
            text-decoration: none;
            background-color: #2b6cb0;
            color: white;
            border: 1px solid #2b6cb0;
        }

        .btn:hover {
            background-color: #4299e1;
            border-color: #4299e1;
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #718096;
            border-color: #718096;
        }

        .btn-secondary:hover {
            background-color: #a0aec0;
            border-color: #a0aec0;
        }

        .btn-primary {
            background-color: #38a169;
            border-color: #38a169;
        }

        .btn-primary:hover {
            background-color: #48bb78;
            border-color: #48bb78;
        }

        .btn-success {
            background-color: #48bb78;
            border-color: #48bb78;
        }

        .btn-success:hover {
            background-color: #68d391;
            border-color: #68d391;
        }

        .status-delivery {
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            display: inline-block;
        }

        .status-delivery.dalam-perjalanan {
            color: #e53e3e;
            background-color: rgba(229, 62, 62, 0.1);
        }

        .status-delivery.terkirim {
            color: #38a169;
            background-color: rgba(56, 161, 105, 0.1);
        }

        .status-delivery.belum-dikirim {
            color: #f6e05e;
            background-color: rgba(246, 224, 94, 0.1);
        }

        .table_center {
            overflow-x: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>

@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h3 style="color: white;">Keranjang</h3>

            <div class="table_center" data-aos="fade-up">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Status Pembayaran</th>
                            <th>Status</th>
                            <th>Ubah Status</th>
                            <th>Cetak PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->rec_address}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product->title}}</td>
                            <td>{{$order->product->price}}</td>
                            <td><img src="products/{{$order->product->image}}" alt="{{$order->product->title}}"></td>
                            <td>{{$order->Status_pembayaran}}</td>
                            <td>
                                <span class="status-delivery {{$order->status == 'Dalam Perjalanan' ? 'dalam-perjalanan' : ($order->status == 'Terkirim' ? 'terkirim' : 'belum-dikirim')}}">
                                    {{$order->status}}
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('on_the_way', $order->id)}}">Dalam Perjalanan</a>
                                <a class="btn btn-success" href="{{url('delivered', $order->id)}}">Terkirim</a>
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{url('print_pdf', $order->id)}}">Print PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.js')

<script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admincss/js/charts-home.js')}}"></script>
<script src="{{asset('admincss/js/front.js')}}"></script>

</body>
</html>
