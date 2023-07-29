@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengaturan Penduduk</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            
         


            <div class="col-md-6">
                <div class="card card-outline card-primary rounded-0 elevation-0">
                    <div class="card-header">
                        <h3 class="card-title ">Pendidikan</h3>

                        <div class="card-tools">
                            <a href="#" data-toggle="modal" data-target="#addModalPendidikan"
                                class="btn btn-sm btn-info">Tambah Pendidikan</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($pendidikans as $pendidikan)

                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $pendidikan->nama }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto mr-0">
                                                <a href="" class="badge bg-success" data-toggle="modal"
                                                    data-target="#editModalPendidikan{{ $pendidikan->id }}">
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="col-none">
                                                <form action="{{ route('pendidikan.destroy', $pendidikan->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger" style="border:none">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- modal edit pendidikan --}}
                                    <div class="modal fade" id="editModalPendidikan{{ $pendidikan->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $pendidikan->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $pendidikan->id }}">
                                                        Edit
                                                        Pendidikan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form"
                                                        action="{{ route('pendidikan.update', $pendidikan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="nama">Nama Pendidikan</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama" value="{{ $pendidikan->nama }}">
                                                        </div>
                                                        <!-- Tambahkan input form untuk kategori lainnya -->

                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            {{-- modal pendidikan --}}
            <div class="modal fade" id="addModalPendidikan" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Pendidikan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="{{ route('pendidikan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Pendidikan</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan nama pendidikan">
                                </div>
                                <!-- Tambahkan input form untuk kategori lainnya -->

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-outline card-primary rounded-0 elevation-0">
                    <div class="card-header">
                        <h3 class="card-title ">Pekerjaan</h3>

                        <div class="card-tools">
                            <a href="#" data-toggle="modal" data-target="#addModalPekerjaan"
                                class="btn btn-sm btn-info">Tambah Pekerjaan</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pekerjaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($pekerjaans as $pekerjaan)

                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $pekerjaan->nama }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto mr-0">
                                                <a href="" class="badge bg-success" data-toggle="modal"
                                                    data-target="#editModalPekerjaan{{ $pekerjaan->id }}">
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="col-none">
                                                <form action="{{ route('pekerjaan.destroy', $pekerjaan->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger" style="border:none">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- modal edit pekerjaan --}}
                                    <div class="modal fade" id="editModalPekerjaan{{ $pekerjaan->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $pekerjaan->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $pekerjaan->id }}">Edit
                                                        Pekerjaan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form"
                                                        action="{{ route('pekerjaan.update', $pekerjaan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="nama">Nama Pekerjaan</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama" value="{{ $pekerjaan->nama }}">
                                                        </div>
                                                        <!-- Tambahkan input form untuk kategori lainnya -->

                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            {{-- modal pekerjaan --}}
            <div class="modal fade" id="addModalPekerjaan" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Pekerjaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="{{ route('pekerjaan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Pekerjaan</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan nama pekerjaan">
                                </div>
                                <!-- Tambahkan input form untuk kategori lainnya -->

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /.content -->
</div>


@endsection