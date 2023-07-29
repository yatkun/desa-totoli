@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
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
                        <a href="/dashboard/berita" class="btn btn-info">Kembali</a>
                    </div>

                    <div class="card-tools">
                        <a href="/dashboard/berita/hapus/{{$post->id}}"
                            onclick="return confirm('Apakah Anda Yakin Menghapus Berita Ini?');"
                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <form action="{{ route('berita.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul')
                            is-invalid
                        @enderror" id="judul" name="judul" placeholder="Masukkan judul" value="{{ $post->judul }}"
                                autofocus>
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control form-control-sm @error('slug')
                        is-invalid
                    @enderror" id="slug" name="slug" readonly value="{{ $post->slug }}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="hidden" name="oldImage" value="{{ $post->gambar }}">
                            @if ($post->gambar)
                            <img src="{{ asset('storage/'.$post->gambar) }}" class="d-block img-preview img-fluid mb-3 col-sm-5">
                            @else
                            <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar')
                                    is-invalid
                                            @enderror" name="gambar" id="myInput" aria-describedby="myInput"
                                        onchange="previewImage()">
                                    <label class="custom-file-label" for="myInput">Pilih gambar</label>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            @error('isi')
                            <p class="text-danger text-sm">{{ $message }}</p>
                            @enderror
                            <input id="isi" type="hidden" name="isi" value="{{ $post->isi }}">
                            <trix-editor input="isi"></trix-editor>

                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
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