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
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1 {
            color: white;
            font-size: 25px;
            text-align: center;
        }

        label {
            display: inline-block;
            width: 200px;
            font-size: 18px;
            color: white;
        }

        input[type='text'], input[type='number'], input[type='file'], select, textarea {
            width: 350px;
            height: 50px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            border: 2px solid #d1d5db;
            transition: border-color 0.3s;
        }

        input[type='text']:focus, input[type='number']:focus, input[type='file']:focus, select:focus, textarea:focus {
            border-color: #6366f1;
        }

        textarea {
            height: 150px;
        }

        .input_deg {
            padding: 15px;
        }

        .btn {
            display: inline-block;
            font-size: 16px;
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
                <h1 data-aos="fade-down">Tambah Produk</h1>
                <div class="div_deg" data-aos="fade-up" data-aos-delay="100">
                    <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label>Nama Produk</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="input_deg">
                            <label>Deskripsi Produk</label>
                            <textarea name="description" required></textarea>
                        </div>
                        <div class="input_deg">
                            <label>Harga</label>
                            <input type="text" name="price">
                        </div>
                        <div class="input_deg">
                            <label>Jumlah Stok</label>
                            <input type="number" name="quantity">
                        </div>
                        <div class="input_deg">
                            <label>Kategori Produk</label>
                            <select name="category" required>
                                <option>Pilih Kategori</option>
                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input_deg">
                            <label>Gambar</label>
                            <input type="file" name="image">
                        </div>
                        <div class="input_deg">    
                            <input class="btn btn-success" type="submit" value="Tambah Produk">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.js')
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
