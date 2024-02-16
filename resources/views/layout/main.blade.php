<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('layout.navbar')
  <main class="w-full">
    @yield('content')
  </main>
  <footer class="flex justify-center my-8">
    <div class="flex justify-between w-10/12">
        <div class="w-5/12">
            <h5 class="font-bold text-xl mb-2">Temukan Kami</h5>
            <ul class="space-y-4">
                <li><a href=""><i class="bi bi-linkedin"></i> Bangkalan Developer</a></li>
                <li><a href=""><i class="bi bi-instagram"></i> bangkalan.dev</a></li>
                <li><a href=""><i class="bi bi-telegram"></i> t.me/bangkalandeveloper</a></li>
            </ul>
        </div>
        <div class="w-5/12 my-2">
            <div>
                <img src="assets/img/logo.png" width="40%" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur distinctio, id dolores corrupti, ea minus dolorem suscipit cum a et voluptatum libero veritatis vero!</p>
            </div>
        </div>
    </div>
  </footer>
</body>
</html>
