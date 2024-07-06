<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Produk Terbaru</h2>
    </div>
    <div class="row">
      @foreach ($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="products/{{$products->image}}" alt="">
          </div>
          <div class="detail-box">
            <h6>{{$products->title}}</h6>
            <h6>Harga
              <span>Rp{{$products->price}}</span>
            </h6>
          </div>
          <div class="button-container">
            <a class="btn btn-danger" href="{{ url('product_details', $products->id) }}">Detail Produk</a>
            <a class="btn btn-primary" href="{{url('add_cart', $products->id)}}">Tambah Keranjang</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<style>
  .shop_section {
    padding: 60px 0;
  }

  .heading_container {
    margin-bottom: 40px;
  }

  .box {
    background: #f9f9f9;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 10px;
    text-align: center;
  }

  .img-box img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .detail-box h6 {
    margin: 10px 0;
    font-size: 14px;
  }

  .detail-box span {
    color: #ff0000;
    font-weight: bold;
  }

  .button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
  }

  .btn {
    margin: 5px;
    padding: 10px 0;
    border-radius: 5px;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .btn-danger {
    background-color: #dc3545;
    color: #fff;
  }

  .btn-danger:hover {
    background-color: #c82333;
    color: #fff;
  }

  .btn-primary {
    background-color: #007bff;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    color: #fff;
  }
</style>
