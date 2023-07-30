<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="">

    <section class="bg-darkhijau">
        <div class=" container mx-auto">
            <p class="p-3 text-white text-xs flex items-center sm:gap-2 gap-0 ">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                    </path>
                </svg> +6285155103646 | <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                    </path>
                </svg> kelurahantotoli@gmail.com
            </p>
        </div>

    </section>

    <nav class="bg-primary border-gray-200  dark:border-gray-700 dark:bg-gray-900">
        <div class="container mx-auto">
            <div class=" mx-auto flex max-w-screen-xl flex-wrap items-center justify-between py-4">
                <div class="flex items-center">
                    <a href="#">
                        <div class="flex gap-2 items-center">

                            <img src="http://pedekik.desa.id/desa/logo/logobks__xg0iKm3__sid__nYeUX9c.png"
                                class="w-auto h-auto hidden sm:block">

                            <div class="fex flex-col text-white">

                                <h1 class="sm:text-2xl text-xl font-bold ">Desa Lombang</h1>
                                <h1 class="sm:text-md text-sm ">Kecamatan Banggae, Kab. Majene</h1>
                                <h1 class="sm:text-md text-sm">Kode Pos 90951</h1>


                            </div>


                        </div>
                    </a>
                </div>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
        </div>
    </nav>
    <div class="hidden w-full md:block md:w-auto bg-white md:bg-primary" id="navbar-dropdown">
        <div class="container mx-auto">
            <ul
                class="mt-4 flex flex-col rounded-lg md:rounded-none border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-gray-50 md:p-4 md:dark:bg-gray-900">
                <li>
                    <a href="/src/index.html"
                        class="block rounded bg-blue-700 py-2 pl-3 pr-4 text-white dark:bg-blue-600 md:bg-transparent md:p-0 md:text-primary md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex w-full items-center justify-between rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">
                        Profil Desa<svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/src/index.html"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah
                                    Desa</a>
                            </li>

                        </ul>

                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Data
                        Desa</a>
                </li>

            </ul>
        </div>
    </div>

    <!-- <section
        class=" bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="container mx-auto">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16  relative">
                <a href="#"
                    class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                    <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                        class="text-sm font-medium">Jumbotron component was launched! See what's new</span>
                    <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Website Resmi Desa Lombang</h1>
                <p class="text-sm font-normal text-gray-500 lg:text-md sm:px-16 lg:px-48 dark:text-gray-200">Jalan
                    Perumahan Al-Ikhlas, Kecamatan Banggae Timur, Kab. Majene, Provinsi Sulawesi Barat</p>


            </div>
        </div>
    </section> -->

    <section class="container mx-auto pt-8 pb-2">
        <div class="grid grid-cols-12 md:gap-3 gap-0">
            <div class="md:col-span-9 col-span-12 pb-4">
                <div class="flex flex-col">
                    <div class="flex gap-2">
                        <div class="border-r-4 border-secondary"></div>
                        <div class="font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-primary">
                            Berita Terbaru
                        </div>
                    </div>


                    <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-2 sm:col-span-3 sm:h-40 h-28">
                                @if ($post->gambar)
                                    <img src="{{ asset('storage/'.$post->gambar) }}" alt="{{ $post->judul }}" class="sm:h-40 h-28 w-full object-cover rounded-lg">
                                @else
                                <img src="{{ asset('storage/post-images/default.jpg') }}" alt="{{ $post->judul }}" class="sm:h-40 h-28 w-full object-cover rounded-lg">
                                @endif
                                
                            </div>
                            <div class="col-span-4 sm:col-span-3 h-28 sm:h-40">
                                <div class="flex flex-col justify-around h-full">
                                    <div class="">
                                        <span
                                            class="bg-green-100 text-green-800 text-xs  font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Berita</span>
                                    </div>
                                    <a href="{{url('/berita')}}/{{$post->slug}}" class="font-semibold sm:text-lg text-sm leading-tight md:line-clamp-2 line-clamp-3">{{ $post->judul }}</a>
                                    
                                    <p class="hidden text-sm text-gray-400 sm:line-clamp-1  md:line-clamp-2">{{ $post->excerpt }}</p>
                                    <div class="flex gap-1">
                                        <svg class="w-4 h-4 text-gray-400 justify-items-end" fill="none"
                                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-xs text-gray-400">{{ $post->created_at->toDateString() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 md:gap-4 gap-0 ">

                    @foreach ($datas as $data)
                  
                    <div class="sm:col-span-6 col-span-12 py-2">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="sm:col-span-3 col-span-2 h-28 ">
                                
                                @if ($data->gambar)
                                <img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->judul }}" class="h-28 w-full object-cover rounded-lg">
                            @else
                            <img src="{{ asset('storage/post-images/default.jpg') }}" alt="{{ $data->judul }}" class="h-28 w-full object-cover rounded-lg">
                            @endif


                                
                            </div>
                            <div class="sm:col-span-3 col-span-4 h-28">
                                <div class="flex flex-col justify-around h-full">
                                    <div class="">
                                        <span
                                            class="bg-green-100 text-green-800 text-xs  font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Berita</span>
                                    </div>
                                    <a href="{{url('/berita')}}/{{$data->slug}}" class="font-semibold text-sm leading-tight line-clamp-3">{{ $data->judul }}</a>
                                   

                                    <div class="flex gap-1">
                                        <svg class="w-4 h-4 text-gray-400 justify-items-end" fill="none"
                                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-xs text-gray-400">{{$data->created_at->toDateString()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                          
                    @endforeach
                    





                </div>
            </div>


            <!-- Sidebar -->
            <div class="md:col-span-3 col-span-12 pt-4 sm:pt-0">
                <!-- Aparatur Desa -->
                <div class="flex flex-col pb-4">
                    <div class="flex gap-2">
                        <div class="border-r-4 border-secondary"></div>
                        <div class="font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-primary">
                            Aparatur Desa
                        </div>
                    </div>
                    <div class="grid grid-cols-12 py-4">
                        <div class="col-span-12">
                            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-80 sm:h-72 overflow-hidden rounded-lg">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">

                                        <img src="https://source.unsplash.com/random/?profile-picture"
                                            class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                        <div class="text-center absolute bottom-0 left-0 z-0 bg-secondary/80 w-full p-2">
                                            <div class="text-sm text-white font-medium">Muhammad Hidayatullah, M.Kom
                                            </div>
                                            <div class="text-xs text-white">Kepala Desa</div>
                                        </div>
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://source.unsplash.com/random/?school"
                                            class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://source.unsplash.com/random/?boy"
                                            class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://source.unsplash.com/random/?girl"
                                            class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://source.unsplash.com/random/?women"
                                            class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>


                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center sm:w-6 sm:h-6 w-8 h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg aria-hidden="true"
                                            class="sm:w-4 sm:h-4 w-6 h-6 text-white dark:text-gray-800" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center sm:w-6 sm:h-6 w-8 h-8 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg aria-hidden="true"
                                            class="sm:w-4 sm:h-4 w-6 h-6 text-white dark:text-gray-800" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- Pengumuman  -->
                <div class="flex flex-col">
                    <div class="flex gap-2">
                        <div class="border-r-4 border-secondary"></div>
                        <div class="font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-primary">
                            Pengumuman
                        </div>
                    </div>
                    <div class="grid grid-cols-12 py-4">
                        <div class="col-span-12 bg-gray-100 hover:text-secondary">
                            <div class="flex gap-2 ">
                                <div class="border-r-4 border-gray-500"></div>
                                <a href="" class="text-sm py-2">Penerimaan Bansos Tahap Kedua</a>
                            </div>
                        </div>
                        <div class="col-span-12 bg-gray-100 hover:text-secondary">
                            <div class="flex gap-2 ">
                                <div class="border-r-4 border-gray-500"></div>
                                <a href="" class="text-sm py-2">Penerimaan Bansos Tahap Pertama</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container mx-auto py-5">
        <div class="p-8 bg-primary rounded-lg">
            <h2
                class="mx-auto text-center font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-white">
                Data Penduduk</h2>
            <div class="grid grid-cols-12 gap-4 mt-4">
                <div class="col-span-4 text-center">
                    <svg class="h-10 w-10 text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                        </path>
                    </svg>
                    <p class="font-bold text-2xl text-white">5234</p>
                    <p class="text-white text-sm">LAKI-LAKI</p>
                </div>
                <div class="col-span-4 text-center">
                    <svg class="h-10 w-10 text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                        </path>
                    </svg>
                    <p class="font-bold text-2xl text-white">3000</p>
                    <p class="text-white text-sm">PEREMPUAN</p>
                </div>
                <div class="col-span-4 text-center">
                    <svg class="h-10 w-10 text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                        </path>
                    </svg>
                    <p class="font-bold text-2xl text-white">8234</p>
                    <p class="text-white text-sm">TOTAL</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-5">
        <div class="flex gap-2">
            <div class="border-r-4 border-secondary"></div>
            <div class="font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-primary">Wilayah Desa
            </div>
        </div>
        <div class="py-4 ">
            <iframe class="h-48 w-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.186615937865!2d118.98329677399244!3d-3.5443866422617067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d94bf0b28486581%3A0x54cc317db5bc3939!2sKantor%20Kelurahan%20Lembang!5e0!3m2!1sid!2sid!4v1683985177874!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



    <footer class="bg-white dark:bg-gray-900">


        <div class=" py-6 bg-gray-100 dark:bg-gray-700 ">
            <div class="container mx-auto md:flex md:items-center md:justify-between">

                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a
                        href="https://flowbite.com/">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>

            </div>
        </div>


    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>