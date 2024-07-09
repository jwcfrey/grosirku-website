<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="#">
      <span>GrosirKu</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link animated-link home-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="#">Why Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="#">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animated-link white-link" href="#">Hubungi Kami</a>
        </li>
      </ul>
      <div class="user_option ml-auto">
        @if (Route::has('login'))
        @auth
        <a class="nav-link animated-link white-link" href="{{url('myorders')}}">Pesananku</a>
        <a href="{{url('mycart')}}">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          [{{$count}}]
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="animated-link logout-button">Keluar</button>
        </form>
        @else
        <a class="animated-link white-link" href="{{url('/login')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Masuk</span>
        </a>
        <a class="animated-link white-link" href="{{url('/register')}}">
          <i class="fa fa-vcard" aria-hidden="true"></i>
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
    transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
  }

  .animated-link:hover {
    color: white !important;
    transform: translateY(-3px);
    background-color: black;
  }

  .home-link {
    background-color: skyblue;
    padding-left: 5px; /* Adjust padding to move it slightly to the left */
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
    background-color: skyblue;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .logout-button:hover {
    color: white;
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
</style>
