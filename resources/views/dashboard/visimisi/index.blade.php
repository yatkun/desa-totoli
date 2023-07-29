@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Visi Misi</h1>
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
        <div class="col-md-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header">
                    <h3 class="card-title ">Visi Misi Desa</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <form action="{{ route('visi.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="visi">Visi Desa</label>
                            @error('visi')
                            <p class="text-danger text-sm">{{ $message }}</p>
                            @enderror
                            <input id="visi" type="hidden" name="visi" value="{{ $post->visi }}">
                            <trix-editor input="visi"></trix-editor>
                        </div>

                        <div class="form-group">
                            <label for="misi">Misi Desa</label>
                            @error('misi')
                            <p class="text-danger text-sm">{{ $message }}</p>
                            @enderror
                            <input id="misi" type="hidden" name="misi" value="{{ $post->misi }}">
                            <trix-editor input="misi"></trix-editor>
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

@endsection