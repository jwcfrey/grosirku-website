<!-- footer section -->
<footer class="footer_section layout_padding2-top">
    <div class="container text-center">
        <p class="mb-2 footer-quote">"Grosirku, Solusi Belanja Grosir Hemat dan Praktis dengan Pelayanan Ramah dan Profesional!"</p>
        <p>&copy; <span id="displayYear"></span> Hak cipta oleh <a href="{{ url('/') }}" class="footer-link">Grosirku</a></p>
    </div>
</footer>
<!-- footer section -->

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script>
    document.getElementById('displayYear').textContent = new Date().getFullYear();
</script>

<style>
  .footer_section {
    background-color: #000;
    color: #fff;
    padding: 10px 0;
  }

  .footer-quote {
    font-style: italic;
  }

  .footer-link {
    color: #fff;
  }

  @media screen and (max-width: 1200px) {
    .footer-quote {
      font-size: 1rem;
    }
  }

  @media screen and (min-width: 993px) and (max-width: 1119px) {
    .footer-quote {
      font-size: 0.9rem;
    }
  }

  @media screen and (min-width: 768px) and (max-width: 992px) {
    .footer-quote {
      font-size: 0.8rem;
    }
  }

  @media screen and (min-width: 576px) and (max-width: 767px) {
    .footer-quote {
      font-size: 0.7rem;
    }
  }

  @media screen and (min-width: 400px) and (max-width: 575px) {
    .footer-quote {
      font-size: 0.6rem;
    }
  }
</style>
