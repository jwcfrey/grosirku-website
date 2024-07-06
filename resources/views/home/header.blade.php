<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href=">
      <span>
        Isekai Store
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a style="color: black; margin-top: -35.5px;" class="nav-link animated-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a style="color: black;" class="nav-link animated-link" href="">
            Shop
          </a>
        </li>
        <li class="nav-item">
          <a style="color: black" class="nav-link animated-link" href="">
            Why Us
          </a>
        </li>
        <li class="nav-item">
          <a style="color: black" class="nav-link animated-link" href="">
            Testimoni
          </a>
        </li>
        <li class="nav-item">
          <a style="color: black" class="nav-link animated-link" href="">Hubungi Kami</a>
        </li>
      </ul>
      <div class="user_option">
        @if (Route::has('login'))
        @auth
        <a href="{{url('mycart')}}">
          <i style="margin-right: 1px; font-size: 18px;" class="fa fa-shopping-bag" aria-hidden="true"></i>
          [{{$count}}]
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="animated-link logout-button">
            Keluar
          </button>
        </form>
        @else
        <a class="animated-link" href="{{url('/login')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>
            Masuk
          </span>
        </a>
        <a class="animated-link" href="{{url('/register')}}">
          <i class="fa fa-vcard" aria-hidden="true"></i>
          <span>
            Daftar
          </span>
        </a>
        @endauth
        @endif
      </div>
    </div>
  </nav>
</header>

<style>
  .animated-link {
    background-color: skyblue;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    color: black;
    text-decoration: none;
    transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
  }

  .animated-link:hover {
    color: #ffffff !important;
    transform: translateY(-3px);
    background-color: #000000;
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
    color: #ffffff;
    transform: translateY(-3px);
    background-color: #000000;
  }
</style>
