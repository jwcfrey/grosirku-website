<!DOCTYPE html>
<html lang="en">

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

        input[type='text'] {
            width: 400px;
            height: 50px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #4299e1;
            background-color: #2d3748;
            color: #cbd5e0;
            transition: all 0.3s ease-in-out;
        }

        input[type='text']:focus {
            outline: none;
            border-color: #4299e1;
            box-shadow: 0 0 5px rgba(66, 153, 225, 0.5);
        }

        .btn {
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            margin-left: 10px;
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
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white;">
                    Update Kategori
                </h1>
                <div class="div_deg" data-aos="fade-up">
                    <form action="{{url('update_category',$data->id)}}" method="post">
                        @csrf
                        <input type="text" name="category" value="{{$data->category_name}}">
                        <input class="btn btn-primary" type="submit" value="Update Kategori">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
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
