<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        input[type='search'] {
            width: 500px;
            height: 40px;
            margin-left: 50px;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 8px;
            font-size: 14px;
        }

        .search-button {
            border: none;
            background-color: #6c5ce7;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.25s, transform 0.1s;
        }

        .search-button:hover {
            background-color: #4834d5;
            transform: translateY(-3px);
        }

        .feather {
            vertical-align: middle;
            margin-top: -1px;
        }

        /* Style for Edit and Delete buttons */
        .btn {
            display: inline-block;
            font-size: 13px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background: linear-gradient(45deg, #28a745, #218838);
            color: white;
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            transform: scale(1.05);
        }

        .btn-danger {
            background: linear-gradient(45deg, #dc3545, #c82333);
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #c82333, #bd2130);
            transform: scale(1.05);
        }

        .btn:active {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transform: translateY(2px);
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <form action="{{ url('product_search') }}" method="get" class="search-form">
                    @csrf
                    <input type="search" name="search" class="search-input" placeholder="Search">
                    <button type="submit" class="search-button" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>
                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Jumlah Stok</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $products->title }}</td>
                                <td>{!! Str::limit($products->description, 60) !!}</td>
                                <td>{{ $products->category }}</td>
                                <td>{{ $products->price }}</td>
                                <td>{{ $products->quantity }}</td>
                                <td><img height="120" width="120" src="products/{{ $products->image }}"></td>
                                <td><a class="btn btn-success" href="{{ url('update_product', $products->id) }}">Edit</a></td>
                                <td>
    <form action="{{ url('delete_product', $products->id) }}" method="POST" onsubmit="return confirmation(event)">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="div_deg">
                    {{ $product->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>
@include('admin.js')
</html>
