<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="#">
      <span>Grosirku</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div style="width:100%; background-color:transparent;" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav tombol">
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="{{ url('shop') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="{{url('testimonial')}}">Testimoni</a>
        </li>
        <li class="nav-item">
          <a id="contact-link" class="nav-link animated-link white-link" href="#contact">Hubungi Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="{{ url('why') }}">Pengembang Web</a>
        </li>
      </ul>
      <div class="user_option margin-tombol">
        @if (Route::has('login'))
          @auth
            <a class="nav-link animated-link white-link pesananku" href="{{ url('myorders') }}">Pesananku</a>
            <a href="{{ url('mycart') }}" style="color: whitesmoke;">
              <i class="fa fa-cart-plus nav-link animated-link white-link cart" style="color: black; font-size:bold; height:auto; margin-left:-30px" aria-hidden="true"><span></span>{{ $count }}</i>
            </a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="animated-link logout-button keluar">Keluar</button>
            </form>
          @else
            <a class="nav-link animated-link white-link" style="margin-top: -1px;" href="{{ url('/login') }}">
              <i class="fa fa-user tombol-logo" aria-hidden="true"></i>
              <span>Masuk</span>
            </a>
            <a class="nav-link animated-link white-link" href="{{ url('/register') }}">
              <i class="fa fa-vcard tombol-logo" aria-hidden="true"></i>
              <span>Daftar</span>
            </a>
          @endauth
        @endif
      </div>
    </div>
  </nav>
</header>

<style>
  body {
    margin: 0;
    padding: 0;
  }

  .header_section {
    background-color: black;
    padding: 0;
    margin: 0;
  }

  .navbar {
    background-color: white;
    width: 100%;
    padding: 0;
  }

  .navbar-brand span {
    font-size: 24px;
    color: black;
  }

  .navbar-nav {
    margin-left: 0;
  }

  .navbar-nav .nav-item {
    margin-right: 10px;
  }

  .navbar-nav .nav-link {
    color: black;
    padding: 10px 15px;
    transition: color 0.3s ease, background-color 0.3s ease, transform 0.3s ease;
  }

  .animated-link {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    text-decoration: none;
    background-color: black;
    transition: transform 0.5s ease, background-color 0.5s ease, color 0.3s ease;
  }

  .animated-link:hover {
    color: white !important;
    transform: translateY(-3px);
    background-color: white;
  }

  .home-link {
    background-color: white;
    padding-left: 5px;
  }

  .home-link:hover {
    color: white !important;
    background-color: black;
  }

  .white-link {
    background-color: white;
  }

  .white-link:hover {
    color: white !important;
    background-color: black;
  }

  .logout-button {
    background-color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .logout-button:hover {
    color: black;
    transform: translateY(-3px);
    background-color: black;
  }

  .user_option {
    margin-left: auto;
  }

  .user_option a {
    color: black;
    margin-left: 20px;
    transition: color 0.3s ease;
  }

  .user_option a:hover {
    color: gray;
    transition: color 0.3s ease;
  }
  
  .margin-tombol {
    margin-left: -30px;
  }

  /* Media Queries */
  @media screen and (max-width: 1200px) {
    .tombol {
      margin-right: 30px;
    }
  }

  @media screen and (min-width: 993px) and (max-width: 1119px) {
    .navbar-nav .nav-item {
      margin-right: 5px;
    }
    .navbar-brand span {
      font-size: 20px;
    }
    .animated-link {
      font-size: 12px;
      padding: 8px 10px;
    }

    .tombol{
      margin-right: 15px;
      
    }

    .tombol-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      margin-top: 2px;
    }
  }

  @media screen and (min-width: 768px) and (max-width: 992px) {
    .navbar-nav {
      flex-direction: column;
      text-align: center;
    }
    .navbar-nav .nav-item {
      margin: 5px;
      margin-left: 50px;
    }
    .animated-link {
      padding: 8px;
      font-size: 14px;
    }

    .tombol{
      display:flex;
      margin-top: -30px;
    }

    .tombol-logo {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pesananku{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cart{
      display: flex;
      justify-content: center;
      align-items: center;
    }

  }

  @media screen and (min-width: 576px) and (max-width: 767px) {
    .navbar-nav {
      flex-direction: column;
      text-align: center;
    }
    .navbar-nav .nav-item {
      margin-bottom: 150px;
      margin-right: 500px;
      margin: 5px;
    }
    .navbar-brand span {
      font-size: 18px;
    }
    .animated-link {
      padding: 6px;
      font-size: 12px;
    }

        .tombol{
      display:flex;
      margin-top: -30px;
    }

    .tombol-logo {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pesananku{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cart{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
  }

  @media screen and (min-width: 400px) and (max-width: 575px) {
    .navbar-nav {
      flex-direction: column;
      text-align: center;
    }
    .navbar-nav .nav-item {
      margin: 3px 0;
    }
    .navbar-brand span {
      font-size: 16px;
    }
    .animated-link {
      padding: 4px;
      font-size: 10px;
    }
  }

  @media screen and (min-width: 360px) and (max-width: 399px){
    .navbar-nav {
      flex-direction: column;
      text-align: center;
    }
    .navbar-nav .nav-item {
      margin: 3px 0;
    }
    .navbar-brand span {
      font-size: 14px;
    }
    .animated-link {
      padding: 3px;
      font-size: 9px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var contactLink = document.getElementById('contact-link');
    contactLink.addEventListener('click', function(event) {
      var currentPath = window.location.pathname;
      var homePath = '/';
      if (currentPath !== homePath) {
        event.preventDefault();
        window.location.href = homePath + '#contact';
      }
    });
  });
</script>
