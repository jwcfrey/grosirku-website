<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
    <style type="text/css">
        body {
            background-color: #1a202c;
            color: #cbd5e0;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #2d3748;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4a5568;
            color: #f7fafc;
            font-size: 19px;
            font-weight: bold;
        }

        td {
            border-bottom: 1px solid #4a5568;
            color: #e2e8f0;
        }

        input[type='search'] {
            width: 500px;
            height: 40px;
            margin-left: 50px;
            padding: 10px;
            border-radius: 20px;
            border: 2px solid #4a5568;
            background-color: #2d3748;
            color: #e2e8f0;
            transition: border-color 0.3s;
        }

        input[type='search']:focus {
            border-color: #63b3ed;
        }

        .search-form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .search-button {
            border: none;
            background-color: #4a5568;
            color: #f7fafc;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: background-color 0.25s, transform 0.1s;
        }

        .search-button:hover {
            background-color: #2b6cb0;
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .btn-success {
            background: linear-gradient(45deg, #38a169, #2f855a);
            color: white;
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #2f855a, #276749);
            transform: scale(1.05);
        }

        .btn-danger {
            background: linear-gradient(45deg, #e53e3e, #c53030);
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #c53030, #9b2c2c);
            transform: scale(1.05);
        }

        .btn:active {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transform: translateY(2px);
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            color: #63b3ed;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #2d3748;
            border-radius: 5px;
        }

        .pagination .active a {
            background-color: #63b3ed;
            color: #1a202c;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <form action="{{ url('product_search') }}" method="get" class="search-form" data-aos="fade-down">
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
                <div class="div_deg" data-aos="fade-up">
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
                                <td><img height="120" width="120" src="products/{{ $products->image }}" alt="{{ $products->title }}"></td>
                                <td><a class="btn btn-success" href="{{ url('update_product', $products->slug) }}">Edit</a></td>
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
                <div class="pagination" data-aos="fade-up" data-aos-delay="100">
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

<script>
    function confirmation(ev) {
        ev.preventDefault();
        var form = ev.currentTarget;
        swal({
            title: "Yakin Ingin Menghapus Ini?",
            text: "Ini Akan Menghapus Secara Permanen",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
