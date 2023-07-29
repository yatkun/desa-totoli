
<!-- Pengumuman  -->
<div class="flex flex-col">
    <div class="flex gap-2">
        <div class="border-r-4 border-secondary"></div>
        <div class="font-extrabold tracking-tight leading-3 md:text-2xl lg:text-2xl text-xl text-primary">
            Pengumuman
        </div>
    </div>
    <div class="grid grid-cols-12 py-4 gap-1">
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

