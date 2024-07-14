<section id="contact" class="contact_section">
  <div class="container px-0">
    <div class="heading_container">
      <h2 class="">
        Komplain & Pengaduan barang
      </h2>
    </div>
  </div>
  <div class="container container-bg">
    <div class="row">
      <div class="col-lg-7 col-md-6 px-0">
        <div class="map_container">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.101078053493!2d107.4537911762506!3d-6.508888363636539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e5b4d76c349%3A0x8c171e80ac57eb8e!2sSekolah%20Tinggi%20Teknologi%20Wastukancana%20Purwakarta!5e0!3m2!1sid!2sid!4v1719985071785!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 px-0">
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="76cf5c81-9de0-4620-8b1a-3b82b9ebd8d7">
          <div>
            <input type="text" name="name" placeholder="Nama" required />
          </div>
          <div>
            <input type="text" name="phone_number" placeholder="Nomor Hp" required />
          </div>
          <div>
            <input type="text" name="order_number" placeholder="Nomor Pesanan" required />
          </div>
          <div>
            <input type="text" class="message-box" name="message" placeholder="Pesan" />
          </div>
          <div class="d-flex">
          <button type="button" class="btn btn-primary" id="whatsappButton">
  Kirim
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<br><br><br>

<!-- CSS -->
<style>
.contact_section {
  position: relative;
}

.contact_section .container-bg {
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.1);
}

.contact_section .heading_container {
  margin-bottom: 30px;
}

.contact_section .row {
  align-items: stretch;
}

.contact_section form {
  padding-right: 35px;
  padding: 45px 20px;
}

.contact_section input {
  width: 100%;
  border: 1px solid #919191;
  height: 50px;
  margin-bottom: 25px;
  padding-left: 25px;
  background-color: transparent;
  outline: none;
  color: #101010;
}

.contact_section input::-webkit-input-placeholder {
  color: #131313;
}

.contact_section input:-ms-input-placeholder {
  color: #131313;
}

.contact_section input::-ms-input-placeholder {
  color: #131313;
}

.contact_section input::placeholder {
  color: #131313;
}

.contact_section input.message-box {
  height: 120px;
}

.contact_section button {
  display: inline-block;
  padding: 12px 45px;
  background-color: #db4f66;
  color: #ffffff;
  border: 1px solid #db4f66;
  border-radius: 0;
  transition: all .3s;
  display: block;
  color: #fff;
  margin: 35px auto 0 auto;
}

.contact_section button:hover {
  background-color: transparent;
  color: #db4f66;
}

.contact_section .map_container {
  height: 100%;
  min-height: 375px;
}

.contact_section .map_container .map-responsive {
  height: 100%;
}
</style>

<script>
  document.getElementById('whatsappButton').addEventListener('click', function() {
    window.location.href = 'https://wa.me/6282299865504';
  });
</script>