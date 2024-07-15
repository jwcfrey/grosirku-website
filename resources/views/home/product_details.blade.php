<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail-box {
            padding: 7px;
        }

        .btn-primary {
            background-color: tomato;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: whitesmoke;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->

    </div>
    <!-- Product Detail -->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Detail Produk</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="div_center">
                            <img width="400" src="/products/{{$data->image}}" alt="">
                        </div>

                        <div class="detail-box">
                            <h6>{{$data->title}}</h6>
                            <h6>Harga
                                <span>Rp{{$data->price}}</span>
                            </h6>
                        </div>
                        <div class="detail-box">
                            <h6>Kategori produk : {{$data->category}}</h6>
                            <h6>Stok tersedia:
                                <span>{{$data->quantity}}</span>
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>{{$data->description}}</p>
                        </div>


                        <div class="detail-box">
                        <img style="width:20px; height:auto;" src="admincss/img/bagrosir.png" alt="" />
                            <a class="btn btn-primary" href="{{url('add_cart', $data->id)}}">Tambah Keranjang</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- info section -->
    @include('home.footer')
</body>

</html>