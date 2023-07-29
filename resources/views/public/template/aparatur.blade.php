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