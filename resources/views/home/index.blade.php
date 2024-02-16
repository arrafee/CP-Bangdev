@extends('layout.main')
@section('content')
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
@endsection
