@extends('public.template.panel')
@section('content')
<section class="container mx-auto pt-8 pb-2">
    <div class="grid grid-cols-12 md:gap-10 gap-0">
        <div class="md:col-span-9 col-span-12 pb-4">
            <div class="flex flex-col">
                <div class="flex flex-col gap-2">
                    <div class="text-center">
                        <div class="">
                            <span
                                class="bg-green-100 text-green-800 text-sm  font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Pengumuman</span>
                        </div>
                        <div class="text-primary mt-3 font-extrabold tracking-tight md:text-2xl lg:text-3xl text-xl">
                            Pengumuman {{ $identitas->nama }}
                        </div>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <div class="grid grid-cols-12 md:gap-4 gap-0 ">

                        @foreach ($datas as $data)

                        <div class="sm:col-span-6 col-span-12 py-2">
                            <div class="grid grid-cols-6 gap-4">
                                <div class="sm:col-span-2 col-span-2 h-28 ">

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

                                        </div>
                                        <a href="{{url('/pengumuman')}}/{{$data->slug}}"
                                            class="font-semibold text-md leading-tight line-clamp-3">{{ $data->judul
                                            }}</a>


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
            </div>

        </div>
        <div class="md:col-span-3 col-span-12 pt-4 sm:pt-0">
            <!-- Aparatur Desa -->


            @include('public.template.aparatur')
            @include('public.template.pengumuman')

        </div>
    </div>
</section>

@endsection