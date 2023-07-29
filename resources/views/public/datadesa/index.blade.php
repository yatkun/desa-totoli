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
                                class="bg-green-100 text-green-800 text-sm  font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Data
                                Penduduk</span>
                        </div>
                        <div class="text-primary mt-3 font-extrabold tracking-tight md:text-2xl lg:text-3xl text-xl">
                            Data Penduduk
                        </div>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <label for="kelamin" class="font-extrabold tracking-tight text-xl text-secondary">Jenis Kelamin</label>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jumlah
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $laki = $penduduks->where('kelamin', 'Laki-laki')->count();
                                $perempuan = $penduduks->where('kelamin', 'Perempuan')->count();
                                $no = $penduduks->where('kelamin', '')->count();
                                @endphp
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Laki-laki
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $laki }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Perempuan
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $perempuan }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tidak terdata
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $no }}
                                    </td>
                                </tr>
                   
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <label for="kelamin" class="font-extrabold tracking-tight text-xl text-secondary">Pendidikan</label>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                       Pendidikan
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jumlah
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $laki = $penduduks->where('kelamin', 'Laki-laki')->count();
                                $perempuan = $penduduks->where('kelamin', 'Perempuan')->count();
                                $no = $penduduks->where('kelamin', '')->count();
                                @endphp

                                @foreach ($pendidikans as $pend)
                              
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $pend->nama }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('pendidikan',  $pend->nama)->count() }}
                                    </td>
                                </tr>
                                
                                     
                                @endforeach
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tidak terdata
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('pendidikan',  '')->count() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <label for="kelamin" class="font-extrabold tracking-tight text-xl text-secondary">Pekerjaan</label>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                       Pekerjaan
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jumlah
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                               

                                @foreach ($pekerjaans as $pekerjaan)
                              
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $pekerjaan->nama }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('pekerjaan',  $pekerjaan->nama)->count() }}
                                    </td>
                                </tr>
                                
                                     
                                @endforeach
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tidak terdata
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('pekerjaan',  '')->count() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <label for="kelamin" class="font-extrabold tracking-tight text-xl text-secondary">Agama</label>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                       Agama
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jumlah
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                                             
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Islam
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('agama',  'Islam')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Kristen
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('agama',  'Kristen')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Katolik
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('agama',  'Katolik')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Hindu
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('agama',  'Hindu')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Buddha
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('agama',  'Buddha')->count() }}
                                    </td>
                                </tr>
                     
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tidak terdata
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('pekerjaan',  '')->count() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="col-span-6 sm:py-4 py-2 mt-2 sm:mt-0">
                    <label for="kelamin" class="font-extrabold tracking-tight text-xl text-secondary">Pernikahan</label>
                    <div class="relative overflow-x-auto mt-2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                       Pernikahan
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/4">
                                        Jumlah
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                                             
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Belum Menikah
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('perkawinan',  'Belum Menikah')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Menikah
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('perkawinan',  'Menikah')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Duda/Janda
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('perkawinan',  'Duda/Janda')->count() }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tidak terdata
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $penduduks->where('perkawinan',  '')->count() }}
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
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