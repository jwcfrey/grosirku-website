<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="admincss/img/logogrosirku.png" type="image/x-icon">
    <title>Grosirku</title>
    
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
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
</head>
<body>
  <div class="hero_area">
      <!-- header section starts -->
  @include('home.header')
    <!-- end header section -->
    <!-- client section -->
    <section class="client_section py-5">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h1 style="color:tomato" class="mb-4 animate__animated animate__fadeInDown">Review Jujur</h1>
          <br><br><br>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center mb-4">
              <img src="admincss/img/rusdi.png"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Rusdi From Ngawi</h5>
            <h6 class="text-primary mb-3">Tukang Cukur Barbershop</h6>
            <p class="px-xl-3">
              Grosirku iki loh, rek! Website-nya macem jalan tol, lurr, lancar jaya nggak pake macet! Mantul abis buat belanja grosir, murmer!
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center mb-4">
              <img src="admincss/img/sobatkecepatan.png"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb3">Sobat Kecepatan</h5>
            <h6 class="text-primary mb-3">Youtuber Gaming</h6>
            <p class="px-xl-3">
            Yo, this wholesale website is bussin' fr fr. They got everything you need and more, and the prices are so low it's like they're stealing money. 
            I bought a whole pallet of Kokocrunch for the low price of $5. 
            I'm about to be the coolest kid in school. 5/5 stars, would recommend to all my homies.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center mb-4">
              <img src="admincss/img/windahbatubara.png"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Windah Batubara</h5>
            <h6 class="text-primary mb-3">Bocil Kematian</h6>
            <p class="px-xl-3">
              Siapa Cita-Citanya Disini Yang Mau Belanja Ngabisin Duit Orang Tua? Belanja Aja Di Grosirku, Yang Pastinya Responnya Cepat Barang Diantar Kilat Cepat Guys
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
     
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  @include('home.footer')
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- AOS library -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
</body>
</html>

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Custom CSS -->
<style>
.section {
  padding: 50px 0;
  background-color: black;
}

.slider_container {
  max-width: 1200px;
  margin: auto;
}

.detail-box h1 {
  font-size: 3rem;
  font-weight: bold;
  color: white;
}

.detail-box p {
  color: white;
  margin: 20px 0;
}

.animated-link {
  transition: background-color 0.3s, color 0.3s;
}

.animated-link:hover {
  background-color: black;
  color: black;
}

.img-box {
  text-align: center;
}

.img-box img {
  border-radius: 10px;
  box-shadow: 0 4px 8px black;
  transition: transform 0.3s;
}

.img-box img:hover {
  transform: scale(1.05);
}

/* Media Queries */
@media screen and (min-width: 375px) and (max-width: 425px) {
  .detail-box h1 {
    font-size: 1.5rem;
  }

  .detail-box p {
    font-size: 14px;
  }

  .img-box img {
    width: 100%;
    height: auto;
  }
}

@media screen and (min-width: 426px) and (max-width: 768px) {
  .detail-box h1 {
    font-size: 2rem;
  }

  .detail-box p {
    font-size: 16px;
  }

  .img-box img {
    width: 100%;
    height: auto;
  }
}

@media screen and (min-width: 769px) and (max-width: 1024px) {
  .detail-box h1 {
    font-size: 2.5rem;
  }

  .detail-box p {
    font-size: 17px;
  }

  .img-box img {
    width: 100%;
    height: auto;
  }
}

@media screen and (min-width: 1024px) and (max-width: 1044px) {
  .detail-box h1 {
    font-size: 2.8rem;
  }

  .detail-box p {
    font-size: 18px;
  }

  .img-box img {
    width: 90%;
    height: auto;
  }
}

@media screen and (min-width: 1044px) {
  .detail-box h1 {
    font-size: 3rem;
  }

  .detail-box p {
    font-size: 18px;
  }

  .img-box img {
    width: 80%;
    height: auto;
  }
}
</style>
