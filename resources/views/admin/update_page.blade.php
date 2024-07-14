<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        body {
            background-color: #1a202c;
            color: #cbd5e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        label {
            display: inline-block;
            width: 200px;
            padding: 20px;
            color: #cbd5e0;
        }

        input[type='text'],
        input[type='number'],
        textarea,
        select {
            width: 300px;
            height: 50px;
            padding: 8px;
            border: 1px solid #cbd5e0;
            background-color: #2d3748;
            color: #cbd5e0;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        select {
            width: 320px;
        }

        img {
            max-width: 150px;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-success {
            background-color: #48bb78;
            border: 1px solid #48bb78;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #68d391;
            border-color: #68d391;
        }
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 style="color: white;">Update Produk</h2>
                <div class="div_deg" data-aos="fade-up">
                    <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Nama Produk</label>
                            <input type="text" name="title" value="{{$data->title}}">
                        </div>
                        <div>
                            <label>Deskripsi</label>
                            <textarea name="description">{{$data->description}}</textarea>
                        </div>
                        <div>
                            <label>Harga</label>
                            <input type="text" name="price" value="{{$data->price}}">
                        </div>
                        <div>
                            <label>Jumlah Stok</label>
                            <input type="number" name="quantity" value="{{$data->quantity}}">
                        </div>
                        <div>
                            <label>Kategori</label>
                            <select name="category">
                                <option value="{{$data->category}}">{{$data->category}}</option>
                                @foreach ($category as $cat)
                                <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Gambar</label>
                            <img src="/products/{{$data->image}}">
                        </div>
                        <div>
                            <label>Update Gambar</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Update Produk">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
    <!-- AOS Library -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
