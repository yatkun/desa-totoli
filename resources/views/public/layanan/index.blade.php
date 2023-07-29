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
                                class="bg-green-100 text-green-800 text-sm  font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Layanan</span>
                        </div>
                        <div class="text-primary mt-3 font-extrabold tracking-tight md:text-2xl lg:text-3xl text-xl">
                            Layanan {{ $identitas->nama }}
                        </div>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <div class="grid grid-cols-12 md:gap-4 gap-0 ">

                        

                        <div class="sm:col-span-6 col-span-12 py-2">
                            <div class="grid grid-cols-6 gap-4">
                                <div class="col-span-6 flex flex-col gap-4">
                                    @foreach ($datas as $data)
                                    <a href="{{url('/layanan')}}/{{$data->slug}}" class="text-center ">
                                        <div
                                            class="p-2 text-white text-md md:text-xl font-semibold items-center w-full bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">
                                            {{ $data->judul }}
                                        </div>
                                    </a>
                                    @endforeach
                                 
                                </div>

                            </div>
                        </div>

                        

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