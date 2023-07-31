@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Penduduk</h1>
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
                        <a href="/dashboard/penduduk/hapus/{{$post->id}}"
                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <form action="{{ route('penduduk.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <span class="text-sm">*wajib</span>
                                <input type="text" class="form-control @error('nama')
                                is-invalid
                            @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $post->nama }}">
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
                                is-invalid @enderror" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ $post->nik }}">
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
                                        is-invalid @enderror" name="nohp" id="nohp" placeholder="Masukkan No.HP" value="{{ $post->nohp }}">
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
                                        <option value="Laki-laki" {{ $post->kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $post->kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
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
                                            <option value="Belum/Tidak Sekolah" {{ $post->pendidikan == 'Belum/Tidak Sekolah' ? 'Selected' : '' }}>Belum/Tidak Sekolah</option>
                                            <option value="SD/Sederajat" {{ $post->pendidikan == 'SD/Sederajat' ? 'Selected' : '' }}>SD/Sederajat</option>
                                            <option value="SMP/Sederajat" {{ $post->pendidikan == 'SMP/Sederajat' ? 'Selected' : '' }}>SMP/Sederajat</option>
                                            <option value="SMA/Sederajat" {{ $post->pendidikan == 'SMA/Sederajat' ? 'Selected' : '' }}>SMA/Sederajat</option>
                                            <option value="Strata 1" {{ $post->pendidikan == 'Strata 1' ? 'Selected' : '' }}>Strata 1</option>
                                            <option value="Strata 2" {{ $post->pendidikan == 'Strata 2' ? 'Selected' : '' }}>Strata 2</option>
                                            <option value="Strata 3" {{ $post->pendidikan == 'Strata 3' ? 'Selected' : '' }}>Strata 3</option>
                                            <option value="Lainnya" {{ $post->pendidikan == 'Lainnya' ? 'Selected' : '' }}>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <span class="text-sm">*wajib</span>
                                        <input type="text" class="form-control @error('pekerjaan')
                                        is-invalid @enderror" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan"
                                                    value="{{ $post->pekerjaan }}">
                                                @error('pekerjaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror

                                           
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
                                            <option value="Islam" {{ $post->agama == 'Islam' ? 'Selected' : '' }}>Islam</option>
                                            <option value="Kristen" {{ $post->agama == 'Kristen' ? 'Selected' : '' }}>Kristen</option>
                                            <option value="Katolik" {{ $post->agama == 'Katolik' ? 'Selected' : '' }}>Katolik</option>
                                            <option value="Hindu" {{ $post->agama == 'Hindu' ? 'Selected' : '' }}>Hindu</option>
                                            <option value="Buddha" {{ $post->agama == 'Buddha' ? 'Selected' : '' }}>Buddha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="perkawinan">Perkawinan</label>
                                        <select class="custom-select" id="perkawinan" name="perkawinan">
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="Belum Menikah" {{ $post->perkawinan == 'Belum Menikah' ? 'Selected' : '' }} >Belum Menikah</option>
                                            <option value="Menikah" {{ $post->perkawinan == 'Menikah' ? 'Selected' : '' }}>Menikah</option>
                                            <option value="Duda/Janda" {{ $post->perkawinan == 'Duda/Janda' ? 'Selected' : '' }}>Duda/Janda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                           
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>






                    </div>

                   
                </form>
            </div>
            <!-- /.card -->
        </div>

    </div>
    <!-- /.content -->
</div>

<script>
    

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