@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Penduduk</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="col-md-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header">
                    <div class="card-title ">
                        <a href="/dashboard/penduduk" class="btn btn-info">Kembali</a>
                    </div>

                    <div class="card-tools">


                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <form action="/dashboard/penduduk" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <span class="text-sm">*wajib</span>
                                <input type="text" class="form-control @error('nama')
                                is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <span class="text-sm">*wajib</span>
                                <input type="text" class="form-control @error('nik')
                                is-invalid @enderror" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ old('nik') }}">
                                @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nohp">No.HP</label>
                                        <span class="text-sm">*wajib</span>
                                        <input type="text" class="form-control @error('nohp')
                                is-invalid @enderror" name="nohp" id="nohp" placeholder="Masukkan No.HP" value="{{ old('nohp') }}">
                                @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kelamin">Kelamin</label>
                                        <select class="custom-select" id="kelamin" name="kelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan</label>
                                        <select class="custom-select" id="pendidikan" name="pendidikan">
                                            <option value="">Pilih Pendidikan</option>
                                            @foreach ($pendidikans as $pendidikan)
                                            <option value="{{ $pendidikan->nama }}">{{ $pendidikan->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <span class="text-sm">*wajib</span>
                                        <select class="custom-select @error('pekerjaan')
                                        is-invalid
                                    @enderror" id="pekerjaan" name="pekerjaan">
                                            <option value="">Pilih Pekerjaan</option>
                                            @foreach ($pekerjaans as $pekerjaan)
                                            <option value="{{ $pekerjaan->nama }}">{{ $pekerjaan->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select class="custom-select" id="agama" name="agama">
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="perkawinan">Perkawinan</label>
                                        <select class="custom-select" id="perkawinan" name="perkawinan">
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Duda/Janda">Duda/Janda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>





                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>






                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card -->
        </div>

    </div>
    <!-- /.content -->
</div>

<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function(){
    fetch('/dashboard/berita/checkSlug?judul='+judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault()
    })

    function previewImage(){
        const image = document.querySelector('#myInput');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader ();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
    }
   
</script>

<script>
    /* show file value after file select */
document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("myInput").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
})
</script>
@endsection