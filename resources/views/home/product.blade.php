<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center animate__animated animate__fadeInDown">
      <h2>Produk Terbaru</h2>
    </div>
    <div class="row">
      @foreach ($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box animate__animated animate__fadeInUp">
          <div class="img-box">
            <img src="products/{{$products->image}}" alt="">
          </div>
          <div class="detail-box">
            <h6 style="justify-content:left; display:flex; text-align:left; margin-left: 5px;">{{$products->title}}</h6>
            <h6>Harga
              <span style="color:black;"><p>Rp{{$products->price}}</p></span>
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

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
  .shop_section {
    padding: 60px 0;
    background-color: #fff;
  }

  .heading_container h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: tomato;
  }

  .box {
    background: #f9f9f9;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .box:hover {
    transform: translateY(-10px);
  }

  .img-box img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
  }

  .img-box img:hover {
    transform: scale(1.05);
  }

  .detail-box h6 {
    margin: 10px 0;
    font-size: 1rem;
    color: #333;
  }

  .detail-box span p {
    color: tomato;
    font-weight: bold;
    margin: 0;
  }

  .button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
  }

  .btn {
    margin: 5px;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .btn-danger {
    background-color: tomato;
    color: #fff;
  }

  .btn-danger:hover {
    background-color: white;
    color: #fff;
  }

  .btn-primary {
    background-color: #fff;
    color: tomato;
    border: 2px solid tomato;
  }

  .btn-primary:hover {
    background-color: tomato;
    color: #fff;
  }
</style>
