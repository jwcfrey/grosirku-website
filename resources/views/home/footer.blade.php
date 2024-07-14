<!-- footer section -->
<footer class="footer_section layout_padding2-top" style="background-color: #000; color: #fff; padding: 10px 0;">
    <div class="container text-center">
        <p class="mb-2" style="font-style: italic;">"Grosirku, Solusi Belanja Grosir Hemat dan Praktis dengan Pelayanan Ramah dan Profesional!"</p>
        <p>&copy; <span id="displayYear"></span> Hak cipta oleh <a href="{{ url('/') }}" style="color: #fff;">Grosirku</a></p>
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
