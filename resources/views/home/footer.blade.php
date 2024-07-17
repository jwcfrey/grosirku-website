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

  /* Media Queries */
  @media screen and (min-width: 375px) and (max-width: 425px) {
    .footer-quote {
      font-size: 0.6rem;
    }
  }

  @media screen and (min-width: 426px) and (max-width: 768px) {
    .footer-quote {
      font-size: 0.7rem;
    }
  }

  @media screen and (min-width: 769px) and (max-width: 1024px) {
    .footer-quote {
      font-size: 0.8rem;
    }
  }

  @media screen and (min-width: 1024px) and (max-width: 1044px) {
    .footer-quote {
      font-size: 0.9rem;
    }
  }

  @media screen and (min-width: 1045px) {
    .footer-quote {
      font-size: 1rem;
    }
  }
</style>
