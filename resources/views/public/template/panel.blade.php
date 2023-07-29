<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
   
    <title>{{ $title }} | {{ $identitas->nama }}</title>
</head>
<style>
    .trix-content  ul { list-style-type: disc;
         padding: 5px;
   margin-left: 35px;  }
   .trix-content ol { list-style-type: decimal;
     padding: 5px;
   margin-left: 35px;  }
   .trix-content a {
         color: #3366ff;
     }
 </style>
<body class="">

    <section class="bg-darkhijau">
        <div class=" container mx-auto">
            <p class="p-3 text-white text-xs flex items-center sm:gap-2 gap-0 ">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                    </path>
                </svg> {{ $identitas->nohp }} | <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                    </path>
                </svg> {{ $identitas->email }}
            </p>
        </div>
    
    </section>
    
    <nav class="bg-primary border-gray-200  dark:border-gray-700 dark:bg-gray-900">
        <div class="container mx-auto">
            <div class=" mx-auto flex max-w-screen-xl flex-wrap items-center justify-between py-4">
                <div class="flex items-center">
                    <a href="/">
                        <div class="flex gap-2 items-center">
    
                            <img src="http://pedekik.desa.id/desa/logo/logobks__xg0iKm3__sid__nYeUX9c.png"
                                class="w-auto h-auto hidden sm:block">
    
                            <div class="fex flex-col text-white">
    
                                <h1 class="sm:text-2xl text-xl font-bold ">{{ $identitas->nama }}</h1>
                                <h1 class="sm:text-md text-sm ">Kecamatan {{ $identitas->kecamatan }}, Kab. {{ $identitas->kabupaten }}</h1>
                                <h1 class="sm:text-md text-sm">Kode Pos {{ $identitas->kodepos }}</h1>
    
    
                            </div>
    
    
                        </div>
                    </a>
                </div>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-white  focus:outline-none   dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
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
                    <a href="/"
                        class="{{ $menu == 'Beranda' ? 'md:text-primary bg-primary text-white' : 'md:text-gray-900 hover:bg-gray-100' }} md:hover:bg-transparent text-gray-900 block md:hover:text-primary rounded  py-2 pl-3 pr-4  md:bg-transparent md:p-0  md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="{{ $menu == 'Profil' ? 'md:text-primary bg-primary text-white' : 'md:text-gray-900 hover:bg-gray-100' }}  md:bg-transparent text-gray-900 flex w-full items-center justify-between rounded py-2 pl-3 pr-4  hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">
                        Profil Desa<svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-30 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/visi-misi"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="/sejarah"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah
                                    Desa</a>
                            </li>
    
                        </ul>
    
                    </div>
                </li>
                <li>
                    <a href="/layanan"
                        class="{{ $menu == 'Layanan' ? 'md:text-primary bg-primary text-white' : 'md:text-gray-900 hover:bg-gray-100' }}  md:bg-transparent block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Layanan</a>
                </li>
                <li>
                    <a href="/data-penduduk"
                        class="{{ $menu == 'Data Penduduk' ? 'md:text-primary bg-primary text-white' : 'md:text-gray-900 hover:bg-gray-100' }} md:bg-transparent block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Data
                        Penduduk</a>
                </li>
                <li>
                    <a href="/pengumuman"
                        class="{{ $menu == 'Pengumuman' ? 'md:text-primary bg-primary text-white ' : 'md:text-gray-900 hover:bg-gray-100' }} md:hover:bg-transparent text-gray-900 md:hover:text-primary block rounded  py-2 pl-3 pr-4 md:bg-transparent md:p-0  md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Pengumuman</a>
                </li>
                <li>
                    <a href="/galeri"
                        class="{{ $menu == 'Galeri' ? 'md:text-primary bg-primary text-white ' : 'md:text-gray-900 hover:bg-gray-100' }} md:hover:bg-transparent text-gray-900 md:hover:text-primary block rounded  py-2 pl-3 pr-4 md:bg-transparent md:p-0  md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Galeri</a>
                </li>

                <li>
                    <a href="/login"
                        class="{{ $menu == 'Login' ? 'md:text-primary bg-primary text-white' : 'md:text-gray-900 hover:bg-gray-100' }}md:hover:bg-transparent text-gray-900 md:hover:text-primary block rounded  py-2 pl-3 pr-4  md:bg-transparent md:p-0  md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Login</a>
                </li>
    
            </ul>
        </div>
    </div>
 
    @yield('content')
    @yield('pengumuman')
    <footer class="bg-white dark:bg-gray-900">


        <div class=" py-6 bg-gray-100 dark:bg-gray-700 ">
            <div class="container mx-auto md:flex md:items-center md:justify-between">

                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a
                        href="https://flowbite.com/">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center md:mt-0">
                    <a href="http://{{ $identitas->facebook }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="http://{{ $identitas->instagram }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
      
                </div>

            </div>
        </div>


    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>