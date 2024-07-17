<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
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
</head>

<body>
    <div class="hero_area">
        @include('home.header')
        <section class="client_section py-5">
        <div class="container mt-5 mb-5">
            <div class="heading_container heading_center">
                <h2>Website Ini Dibuat Oleh</h2>
            </div>
            <div class="row equal-height g-2">
                <div class="col-md-6">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="images/imagenary.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0">Kheva</h5>
                            <span>Teknisi Front End</span>
                            <p>"Mana sprei gratisnya?"</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="images/dpd.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0">Bondan</h5>
                            <span>Teknisi Front End</span>
                            <p>"Dingin tapi tidak kejam &#129398"</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="images/dprd.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0">Heru</h5>
                            <span>Teknisi Backend</span>
                            <p>"Penghabisan Titik Darah Terakhir"</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="images/dprri.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0">Faturrahman</h5>
                            <span>Teknisi Backend</span>
                            <p>"Yaudah Sih Wir"</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: transparent;
    }

    .hero_area {
        margin-bottom: 50px;
    }

    .container {
        max-width: auto;
        margin: auto;
        padding: 0 20px;
    }

    .heading_container {
        margin-bottom: 30px;
        text-align: center;
    }

    .heading_center h2 {
        font-size: 2.5em;
        font-weight: bold;
        margin: 0;
        color: tomato;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .col-md-6 {
        width: 48%;
        margin-bottom: 20px;
        transition: transform 0.3s;
    }

    .col-md-6:hover {
        transform: translateY(-10px);
    }

    .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: box-shadow 0.3s;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.5s;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .user-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .user-content h5
