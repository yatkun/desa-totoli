@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Aparatur Desa</h1>
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
                        <a href="/dashboard/aparaturdesa" class="btn btn-info">Kembali</a>
                    </div>

                    <div class="card-tools">


                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <form action="/dashboard/aparaturdesa" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama')
                            is-invalid
                        @enderror" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}"
                                autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan')
                            is-invalid
                        @enderror" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" value="{{ old('jabatan') }}"
                                autofocus>
                            @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                     

                        <div class="form-group">
                            <label for="gambar">Foto</label>
                            <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar')
                                    is-invalid
                                            @enderror" name="gambar" id="myInput" aria-describedby="myInput"
                                        onchange="previewImage()">
                                    <label class="custom-file-label" for="myInput">Pilih foto</label>
                                </div>

                            </div>

                        </div>

                    

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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