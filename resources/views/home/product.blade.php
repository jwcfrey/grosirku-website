<section class="shop_section layout_padding">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="shortcut icon" href="admincss/img/logogrosirku.png" type="image/x-icon">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<title>Grosirku</title>

<!-- Owl Carousel stylesheet -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- Bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- Responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- AOS (Animate On Scroll) library -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
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
          <h6>{{ Str::limit($products->title, 20, '...') }}</h6>
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
    background-color: transparent;
  }

  .heading_container h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: tomato;
  }

  .box {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
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
    color: tomato;
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

  /* Media Queries */
  @media screen and (min-width: 375px) and (max-width: 425px) {
    .heading_container h2 {
      font-size: 1.2rem;
    }
    .btn {
      font-size: 0.6rem;
      padding: 2px 4px;
    }
  }

  @media screen and (min-width: 426px) and (max-width: 768px) {
    .heading_container h2 {
      font-size: 1.4rem;
    }
    .btn {
      font-size: 0.7rem;
      padding: 4px 8px;
    }
  }

  @media screen and (min-width: 769px) and (max-width: 1024px) {
    .heading_container h2 {
      font-size: 1.6rem;
    }
    .btn {
      font-size: 0.8rem;
      padding: 6px 12px;
    }
  }

  @media screen and (min-width: 1024px) and (max-width: 1044px) {
    .heading_container h2 {
      font-size: 1.8rem;
    }
    .btn {
      font-size: 0.9rem;
      padding: 8px 16px;
    }
  }

  @media screen and (min-width: 1044px) {
    .heading_container h2 {
      font-size: 2rem;
    }
    .btn {
      font-size: 1rem;
      padding: 10px 20px;
    }
  }
</style>

