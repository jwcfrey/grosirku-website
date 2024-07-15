<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box animate__animated animate__fadeInLeft">
                  <h1>
                    Selamat Datang <br>
                    Di Toko Grosirku
                  </h1>
                  <p style="font-size:18px;">
                  Toko Grosirku, tempat lengkap dan murah meriah! Di sini, semua ada, dari kebutuhan pokok sampai barang kekinian.
                  Harga terjangkau bikin belanja lebih hemat, tanpa bikin kantong bolong.
                  Pelayanan juga oke, siap bantu kapan aja. Jadi, ngapain masih mikir? Yuk, eksplorasi serunya belanja di Toko Grosir sekarang!
                  </p>
                  <a id="contact-link" style="background-color:tomato" class="nav-link animated-link white-link animate__animated" href="#contact">Hubungi Kami</a>
                </div>
              </div>
              <div class="col-md-5">
                <div class="img-box animate__animated animate__fadeInRight">
                  <img style="width:400px; height:auto;" src="admincss/img/bagrosir.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Custom CSS -->
<style>
  .slider_section {
    background-color: black;
    padding: 50px 0;
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
</style>
