@extends('public.template.panel')
@section('content')
@include('public.template.carouse')
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
                            <img src="{{ asset('storage/'.$post->gambar) }}" alt="{{ $post->judul }}"
                                class="sm:h-40 h-28 w-full object-cover rounded-lg">
                            @else
                            <img src="{{ asset('storage/post-images/default.jpg') }}" alt="{{ $post->judul }}"
                                class="sm:h-40 h-28 w-full object-cover rounded-lg">
                            @endif

                        </div>
                        <div class="col-span-4 sm:col-span-3 h-28 sm:h-40">
                            <div class="flex flex-col justify-around h-full">
                                <div class="">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs  font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Berita</span>
                                </div>
                                <a href="{{url('/berita')}}/{{$post->slug}}"
                                    class="font-semibold sm:text-lg text-sm leading-tight md:line-clamp-2 line-clamp-3">{{
                                    $post->judul }}</a>

                                <p class="hidden text-sm text-gray-400 sm:line-clamp-1  md:line-clamp-2">{{
                                    $post->excerpt }}</p>
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
                            <img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->judul }}"
                                class="h-28 w-full object-cover rounded-lg">
                            @else
                            <img src="{{ asset('storage/post-images/default.jpg') }}" alt="{{ $data->judul }}"
                                class="h-28 w-full object-cover rounded-lg">
                            @endif



                        </div>
                        <div class="sm:col-span-3 col-span-4 h-28">
                            <div class="flex flex-col justify-around h-full">
                                <div class="">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs  font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Berita</span>
                                </div>
                                <a href="{{url('/berita')}}/{{$data->slug}}"
                                    class="font-semibold text-sm leading-tight line-clamp-3">{{ $data->judul }}</a>


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
            <div class="text-center mt-5">
                {{ $datas->links('vendor.pagination.tailwind') }}
            </div>
        </div>
        <div class="md:col-span-3 col-span-12 pt-4 sm:pt-0">
            <!-- Aparatur Desa -->
            @include('public.template.aparatur')

            <!-- Pengumuman  -->
            @include('public.template.pengumuman')
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
                @php
                    $jumlahLakiLaki = $penduduk->where('kelamin', 'Laki-laki')->count();
                    $perempuan = $penduduk->where('kelamin', 'Perempuan')->count();
                @endphp

                <p class="font-bold text-2xl text-white">{{ $jumlahLakiLaki }}</p>
                <p class="text-white text-sm">LAKI-LAKI</p>
            </div>
            <div class="col-span-4 text-center">
                <svg class="h-10 w-10 text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                    </path>
                </svg>
                <p class="font-bold text-2xl text-white">{{  $perempuan  }}</p>
                <p class="text-white text-sm">PEREMPUAN</p>
            </div>
            <div class="col-span-4 text-center">
                <svg class="h-10 w-10 text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                    </path>
                </svg>
                <p class="font-bold text-2xl text-white">{{  $perempuan+$jumlahLakiLaki  }}</p>
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
    <div class="py-4">
        <iframe class="h-48 w-full"
            src="{{ $identitas->gmap }}"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>




@endsection