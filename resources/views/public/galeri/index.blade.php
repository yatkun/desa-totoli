@extends('public.template.panel')
@section('content')
<section class="container mx-auto pt-8 pb-2">
    <div class="text-center mb-5">
        <div class="">
            <span
                class="bg-green-100 text-green-800 text-sm  font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Galeri</span>
        </div>
        <div class="text-primary mt-3 font-extrabold tracking-tight md:text-2xl lg:text-3xl text-xl">
            Galeri {{ $identitas->nama }}
        </div>
    </div>
    @if ($galeris->count()>0)
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($galeris as $item)
        
        <div>
            <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('storage/'.$item->gambar) }}" alt="">
        </div>
            
        @endforeach
       
    </div>

    @else
        <div>Galeri tidak tersedia.</div>
    @endif

    

</section>

@endsection