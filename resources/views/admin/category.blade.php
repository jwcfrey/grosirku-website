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
        input[type='text'] {
            width: 400px;
            height: 50px;
            border: 2px solid #4a5568;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            background-color: #2d3748;
            color: #cbd5e0;
        }
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        .table_deg {
            text-align: center;
            margin: auto;
            border: 2px solid #2d3748;
            margin-top: 50px;
            width: 600px;
            background-color: #4a5568;
            color: #cbd5e0;
        }
        th {
            background-color: #2b6cb0;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        td {
            padding: 10px;
            border: 1px solid #2d3748;
        }
        .btn {
            display: inline-block;
            font-size: 16px;
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
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white;">Tambah Kategori Produk</h1>
                <div class="div_deg" data-aos="fade-up">
                    <form action="{{url('add_category')}}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="category" placeholder="Nama Kategori" required>
                            <input class="btn btn-primary" type="submit" value="Tambah">
                        </div>
                    </form>
                </div>
                <div>
                    <table class="table_deg" data-aos="fade-up" data-aos-delay="100">
                        <tr>
                            <th>Kategori</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->category_name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('delete_category', $data->id) }}" method="POST" onsubmit="return confirmation(event);">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.js')
    <script type="text/javascript">
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
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
