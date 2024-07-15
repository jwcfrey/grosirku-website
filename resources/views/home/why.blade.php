<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: box-shadow 0.3s;
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.5s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .user-image img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-content h5 {
            margin: 10px 0 5px;
            font-size: 1.25em;
            color: #333;
        }

        .user-content span {
            display: block;
            margin-bottom: 15px;
            color: tomato;
        }

        .user-content p {
            font-size: 1.1em;
            color: #555;
        }

        .ratings {
            margin-top: 10px;
        }

        .ratings i {
            color: #ff9800;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                width: 100%;
            }
        }

        /* Add animations */
        .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1), rgba(255,255,255,0));
            transform: rotate(300deg);
            transition: transform 1s;
        }

        .card:hover::before {
            transform: rotate(0deg);
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
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
                            <h5 class="mb-0">Kepaa</h5>
                            <span>El gasing</span>
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
                            <span>Admin Burger Bangor</span>
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
                            <h5 class="mb-0">Mas Fatur</h5>
                            <span>Atmin JMK48</span>
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
</body>

</html>
