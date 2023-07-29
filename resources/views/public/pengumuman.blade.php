@extends('public.template.panel')
@section('content')
<section class="container mx-auto pt-8 pb-2">
<div class="grid grid-cols-12 md:gap-10 gap-0">  
<div class="md:col-span-9 col-span-12 pb-4">
    <div class="flex flex-col">
        <div class="flex flex-col gap-2">
            <div class="">
                <span
                    class="bg-green-100 text-green-800 text-sm  font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $post->kategori }}</span>
            </div>
            <div class="font-extrabold tracking-tight md:text-2xl lg:text-2xl text-xl">
                {{$post->judul}}
            </div>
            <div class="flex gap-3">
                <div class="flex gap-1">
                    <svg class="w-4 h-4 text-gray-400 justify-items-center" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm text-gray-400">{{ $post->created_at->toDateString() }}</p>
                </div>

                <div class="flex gap-1">
                    <svg class="w-4 h-4 text-gray-400 justify-items-end" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                      </svg>
                    <p class="text-sm text-gray-400">{{ $post->created_at->toDateString() }}</p>
                </div>
            </div>
        </div>


        <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-6 h-80">
                    @if ($post->gambar)
                    <img src="{{ asset('storage/'.$post->gambar) }}" alt="{{ $post->judul }}" class=" h-80 w-full object-cover rounded-lg">
                @else
                <img class=" sm:h-80 h-80 w-full object-cover rounded-lg"
                src="{{ asset('storage/post-images/default.jpg') }}" alt="{{ $post->judul }}">
                @endif
                </div>
                <div class="col-span-6">
                    <div class="trix-content">
                    <div class="flex flex-col">
                        <p class="text-md text-gray-800">{!!$post->isi !!}</p>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
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
                        @foreach ($aparaturs as $aparatur)
                                    
                               
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
        
                                    <img src="{{ asset('storage/'.$aparatur->gambar) }}"
                                        class="h-full object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                    <div class="text-center absolute bottom-0 left-0 z-0 bg-secondary/80 w-full p-2">
                                        <div class="text-sm text-white font-medium">{{ $aparatur->nama }}
                                        </div>
                                        <div class="text-xs text-white">{{ $aparatur->jabatan }}</div>
                                    </div>
                                </div>
                                @endforeach
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
            @foreach ($pengumumans as $p)
                  
                    <div class="col-span-12 bg-gray-100 hover:text-secondary">
                        <div class="flex gap-2 ">
                            <div class="border-r-4 border-gray-500"></div>
                            <a href="{{url('/pengumuman')}}/{{$p->slug}}" class="text-sm py-2">{{ $p->judul }}</a>
                        </div>
                    </div>
                       
                    @endforeach



        </div>
    </div>
</div>
</div>
</section>
@endsection