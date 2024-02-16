<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center lg:justify-around justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="assets/img/logo.png" class="h-16" alt="Flowbite Logo" />
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col lg:gap-10 p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-2" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About Us</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Career</a>
          </li>
          <li>
            <a href="#" class="block py-2 md:px-5 px-2 text-white bg-main rounded-[200px]">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="w-full">
    <section class="flex justify-center mt-20" id="hero">
        <div class="flex flex-col justify-center pl-10 w-5/12">
          <div>
            <p class="text-main text-3xl font-bold">
                Komunitas IT Kabupaten Bangkalan
              </p>
              <p class="text-2xl mb-4 font-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa.
              </p>
              <a href="" class="text-white bg-main py-2 px-3 rounded-[10px] text-small">Gabung Grup Telegram</a>
          </div>
        </div>
        <div class="flex justify-end     w-5/12">
            <img src="assets/img/hero.png" alt="">
        </div>
      </section>
      <section class="mt-20" id="event">
        <p class="text-center text-2xl font-semibold">
            Kegiatan di <span class="text-main">BangkalanDev</span>
        </p>
        <div class="bg-main mt-28 rounded-[10px]">
            <div class="flex justify-center gap-5 relative top-[-60px]">
                <div class="w-3/12">
                    <div class="max-w-sm bg-white border-none rounded-lg drop-shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/real_event.jpeg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mini Bootcamp</h5>
                            </a>
                            <small><i class="bi bi-calendar2-week"></i> 9 Juli 2023</small>
                            <p class=" mt-3 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-lg">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div class="max-w-sm bg-white border-none rounded-lg drop-shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/real_event.jpeg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mini Bootcamp</h5>
                            </a>
                            <small><i class="bi bi-calendar2-week"></i> 9 Juli 2023</small>
                            <p class=" mt-3 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-lg">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div class="max-w-sm bg-white border-none rounded-lg drop-shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/real_event.jpeg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mini Bootcamp</h5>
                            </a>
                            <small><i class="bi bi-calendar2-week"></i> 9 Juli 2023</small>
                            <p class=" mt-3 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-lg">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="mt-16" id="service">
        <p class="text-center text-2xl font-semibold">
            Layanan Kami
        </p>
        <div class="flex justify-center">
            <div class="flex flex-wrap gap-y-14 gap-x-10 justify-center w-10/12 mt-20">
                <div class="w-3/12 rounded-[25px] bg-white border-none drop-shadow-md relative py-4 px-3">
                    <div class="flex justify-center relative top-[-50px]">
                        <img src="assets/img/computer_logo.png" class="bg-white rounded-full border-none drop-shadow-md" width="25%" alt="">
                    </div>
                    <div class="text-xl text-center font-bold mt-[-30px]">
                        Web Development
                    </div>
                    <div class="mt-3 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="w-3/12 rounded-[25px] bg-white border-none drop-shadow-md relative py-4 px-3">
                    <div class="flex justify-center relative top-[-50px]">
                        <img src="assets/img/mobile_logo.png" class="bg-white rounded-full border-none drop-shadow-md" width="25%" alt="">
                    </div>
                    <div class="text-xl text-center font-bold mt-[-30px]">
                        Mobile Development
                    </div>
                    <div class="mt-3 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="w-3/12 rounded-[25px] bg-white border-none drop-shadow-md relative py-4 px-3">
                    <div class="flex justify-center relative top-[-50px]">
                        <img src="assets/img/design_logo.png" class="bg-white rounded-full border-none drop-shadow-md" width="25%" alt="">
                    </div>
                    <div class="text-xl text-center font-bold mt-[-30px]">
                        Design
                    </div>
                    <div class="mt-3 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="w-3/12 rounded-[25px] bg-white border-none drop-shadow-md relative py-4 px-3">
                    <div class="flex justify-center relative top-[-50px]">
                        <img src="assets/img/joki_logo.png" class="bg-white rounded-full border-none drop-shadow-md" width="25%" alt="">
                    </div>
                    <div class="text-xl text-center font-bold mt-[-30px]">
                        Joki Tugas
                    </div>
                    <div class="mt-3 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="w-3/12 rounded-[25px] bg-white border-none drop-shadow-md relative py-4 px-3">
                    <div class="flex justify-center relative top-[-50px]">
                        <img src="assets/img/skripsi_logo.png" class="bg-white rounded-full border-none drop-shadow-md" width="25%" alt="">
                    </div>
                    <div class="text-xl text-center font-bold mt-[-30px]">
                        Joki Skripsi
                    </div>
                    <div class="mt-3 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor rem cum earum incidunt ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="flex justify-center mt-16 bg-main">
        <div class="w-10/12 py-8 text-white">
            <div class="text-3xl font-bold mb-2">
                Mari Berkolaborasi
            </div>
            <div class="text-sm w-10/12">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis rem cupiditate adipisci, consectetur natus, accusamus nesciunt aliquam distinctio nostrum velit ratione impedit dolorem? Impedit assumenda expedita itaque est, ab officiis. Placeat sequi mollitia cumque odio quas consequuntur, nisi tenetur. A?
            </div>
        </div>
      </section>
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
