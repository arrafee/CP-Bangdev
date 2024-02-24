@extends('layout.main')
@section('content')
<section class="flex justify-center py-10">
    <article class="w-8/12 text-center">
        <h1 class="text-main text-[40px] font-semibold">Mau Magang? di Bangkalan Developer aja</h1>
        <div class="flex justify-center pt-4">
            <p class="w-8/12">Ingin menggali lebih dalam dunia desain website dan mengasah keterampilanmu? Jadilah bagian dari program internship desain website kami yang menarik! Apakah kamu seorang mahasiswa bersemangat yang mencari pengalaman praktis atau seseorang yang baru memulai karir di dunia desain, internship ini akan memberikanmu kesempatan emas untuk belajar, berkembang, dan menciptakan karya-karya yang mengagumkan dalam bidang yang kamu minati.</p>
        </div>
    </article>
</section>
<section class="flex justify-around gap-14 my-14">
    <div class="relative w-5/12">
        <img src="assets/img/Internship-rafiki 1.png" class="ml-16 relative z-10" alt="">
        <img src="assets/img/img-element1.png" class="absolute top-0 left-14 z-0" alt="">
        <img src="assets/img/img-element2.png" class="absolute top-[60%] left-[-11%]" alt="">
    </div>
    <div class="w-5/12">
        <h1 class="text-[30px] font-bold">Posisi Magang</h1>
        <div class="w-[10%] border-2 border-main mt-3"></div>
        <div class="w-11/12">
            <p class="text-[#757575]">Lorem ipsum dolor sit amet consectetur. Sodales risus magna arcu eget tempor molestie. Ultrices odio id morbi id nibh morbi nullam sit.</p>
        </div>
        <div class="flex justify-center w-11/12 flex-wrap gap-10 mt-5">
            <div class="w-5/12 px-5 py-5 shadow-md rounded-[15px]">
                <img src="assets/img/computer_internship.png" class="p-2 bg-[#FFCBCB] rounded-full" alt="">
                <h3 class="text-[19px] font-semibold mt-3">Web Design</h3>
            </div>
            <div class="w-5/12 px-5 py-5 shadow-md rounded-[15px]">
                <img src="assets/img/keyboard_internship.png" class="p-2 bg-[#FFCBCB] rounded-full" alt="">
                <h3 class="text-[19px] font-semibold mt-3">Copywriting</h3>
            </div>
            <div class="w-5/12 px-5 py-5 shadow-md rounded-[15px]">
                <img src="assets/img/code_internship.png" class="p-2 bg-[#FFCBCB] rounded-full" alt="">
                <h3 class="text-[19px] font-semibold mt-3">Development Website and App</h3>
            </div>
        </div>
    </div>
</section>
<section class="py-16 relative">
    <h1 class="text-center font-bold text-[34px]">Persyaratan & Benefit Inter Di Bangkalan Dev</h1>
    <div class="flex justify-center gap-5 my-14 relative z-50">
        <div class="w-3/12 px-4 py-1 bg-main rounded-[28.4px]">
            <div class="flex justify-between text-white font-bold text-[21px]">
                <h3 class="">Syarat</h3>
                <i class="bi bi-three-dots"></i>
            </div>
            <div class="border-2 border-white mt-3"></div>
            <div class="px-6 mt-4 mb-8">
                <ul class="list-disc text-white text-md">
                    <li>Memiliki Laptop Sendiri</li>
                    <li>Minimal masa magang 3 bulan</li>
                    <li>Bersedia masuk kantor, senin - jumat (08.30 - 17.30)</li>
                    <li>Menguasai basic skill pada posisi yang dipilih</li>
                    <li>Memiliki Niat dan Kemauan Belajar Tinggi</li>
                </ul>
            </div>
        </div>
        <div class="w-3/12 px-4 py-1 bg-main rounded-[28.4px]">
            <div class="flex justify-between text-white font-bold text-[21px]">
                <h3>Benefit</h3>
                <i class="bi bi-three-dots"></i>
            </div>
            <div class="border-2 border-white mt-3"></div>
            <div class="px-6 mt-4 mb-8">
                <ul class="list-disc text-white text-md">
                    <li>Pengalaman Praktis yang Mendalam</li>
                    <li>Mentorship oleh Profesional Berpengalaman</li>
                    <li>Penerapan Langsung Keterampilan yang Relevan</li>
                    <li>Pembuatan Website yang Memukau</li>
                    <li>Peluang Jaringan Profesional yang Luas</li>
                </ul>
            </div>
        </div>
    </div>
    <img src="assets/img/background-intern.png" class="absolute bottom-0 z-40" alt="">
    <img src="assets/img/background-intern-1.png" class="absolute bottom-0 right-0 z-20" alt="">
    <img src="assets/img/img-element2.png" class="absolute top-36 right-0 z-30" alt="">
    <img src="assets/img/img-element2.png" class="absolute top-36 left-[-150px]" alt="">
</section>
<section class="flex w-full px-5 py-32 bg-main">
    <div class="flex flex-col gap-5 text-center w-1/2">
        <h2 class="text-[34px] font-bold text-white mb-2">Mari Berkembang Bersama Kami</h2>
        <p class="text-[24px] text-white">Tanya-tanya silahkan hubungi nomor <br> WhatsApp berikut</p>
        <p class="text-[34px] font-bold text-white">0832493842</p>
        <p class="text-[24px] text-white">Atau kirim proposal magangmu di sini</p>
        <p class="text-[34px] font-bold text-white">bangkalan.dev@gmail.com</p>
    </div>
    <div class="w-1/2 relative">
        <img src="assets/img/img-1.png" class="absolute top-[-70px] left-[-50px]" alt="">
        <img src="assets/img/img-2.png" class="absolute top-12 right-32" alt="">
        <img src="assets/img/img-3.png" class="absolute bottom-[-110px] right-0" alt="">
    </div>
</section>
@endsection
