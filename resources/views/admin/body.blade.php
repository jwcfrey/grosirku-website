<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
    });
  </script>
  <style>
    .icon-user-1::before {
      content: '\f007'; /* Contoh ikon FontAwesome */
    }
    .icon-contract::before {
      content: '\f1c9'; /* Contoh ikon FontAwesome */
    }
    .icon-paper-and-pencil::before {
      content: '\f040'; /* Contoh ikon FontAwesome */
    }
    .icon-writing-whiteboard::before {
      content: '\f044'; /* Contoh ikon FontAwesome */
    }
  </style>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto mt-10">
    <h2 class="text-xl font-semibold mb-4">Dashboard Admin</h2>
    <section class="py-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Card 1 -->
        <div class="bg-white p-4 rounded shadow" data-aos="fade-up">
          <div class="flex items-center justify-between">
            <div class="text-blue-500">
              <i class="icon-user-1 text-4xl"></i>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Jumlah Pengguna</h4>
              <p class="text-2xl text-gray-800">{{$user}}</p>
            </div>
          </div>
          <div class="mt-2">
            <div class="bg-gray-200 rounded-full h-2">
              <div class="bg-blue-500 h-2 rounded-full" style="width: 30%;"></div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white p-4 rounded shadow" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center justify-between">
            <div class="text-green-500">
              <i class="icon-contract text-4xl"></i>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Jumlah Produk</h4>
              <p class="text-2xl text-gray-800">{{$product}}</p>
            </div>
          </div>
          <div class="mt-2">
            <div class="bg-gray-200 rounded-full h-2">
              <div class="bg-green-500 h-2 rounded-full" style="width: 70%;"></div>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white p-4 rounded shadow" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center justify-between">
            <div class="text-yellow-500">
              <i class="icon-paper-and-pencil text-4xl"></i>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Jumlah Pesanan</h4>
              <p class="text-2xl text-gray-800">{{$order}}</p>
            </div>
          </div>
          <div class="mt-2">
            <div class="bg-gray-200 rounded-full h-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 55%;"></div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="bg-white p-4 rounded shadow" data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center justify-between">
            <div class="text-red-500">
              <i class="icon-writing-whiteboard text-4xl"></i>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Jumlah Terkirim</h4>
              <p class="text-2xl text-gray-800">{{$delivered}}</p>
            </div>
          </div>
          <div class="mt-2">
            <div class="bg-gray-200 rounded-full h-2">
              <div class="bg-red-500 h-2 rounded-full" style="width: 35%;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="bg-gray-800 text-white py-4 mt-10" style="margin-bottom:100%;">
    <div class="container mx-auto text-center">
      <p class="mb-0">2024 &copy; Grosirku Website <a target="_blank" href="#" class="text-blue-400">Grosirku.com</a></p>
    </div>
  </footer>
</body>
</html>
