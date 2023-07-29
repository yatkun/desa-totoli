@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Identitas Desa</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <div class="content">
        <form action="{{ route('identitas.update', $datas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="col-sm-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header">
                    <h3 class="card-title ">Identitas</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Desa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama desa" value="{{ $datas->nama }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="row">
                                <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kecamatan"
                                        placeholder="Masukkan kecamatan" name="kecamatan" value="{{ $datas->kecamatan }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class="row">
                                <label for="kabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kabupaten"
                                        placeholder="Masukkan kabupaten" name="kabupaten" value="{{ $datas->kabupaten }}">
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="row">
                                <label for="nohp" class="col-sm-4 col-form-label">Nomor HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nohp"
                                        placeholder="Masukkan nomor hp" name="nohp" value="{{ $datas->nohp }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class="row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Masukkan email" name="email" value="{{ $datas->email }}">
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="kodepos" name="kodepos"
                                placeholder="Masukkan kode pos" value="{{ $datas->kodepos }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Logo Desa</label>
                        <div class="col-sm-6">
                            
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
                    </div>

                   
               
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-sm-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header">

                    <h3 class="card-title ">Wilayah Desa</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="gmap" class="col-sm-2 col-form-label">Link Gmap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gmap" name="gmap"
                                placeholder="Masukkan link google map" value="{{ $datas->gmap }}">
                        </div>
                    </div>
                   


                   
               
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-sm-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header">

                    <h3 class="card-title ">Sosial Media</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="facebook" name="facebook"
                                placeholder="Masukkan link facebook" value="{{ $datas->facebook }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="instagram" name="instagram"
                                placeholder="Masukkan link instagram" value="{{ $datas->instagram }}">
                        </div>
                    </div>
                   


                   
               
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </div>
        </form>
    </div>
    <!-- /.content -->
</div>

@endsection