@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokumen Pribadi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Dokumen</a></li>
                        <li class="breadcrumb-item active">Pribadi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-secondary rounded-0 elevation-0">
                        <div class="card-header">
                            <div class="card-title ">
                                <div class="btn btn-flat btn-info btn-xs">Tambah dokumen</div>
                            </div>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px; margin-top:0 !important">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-tools -->
                        </div>



                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Dokumen</th>
                                        <th>Tanggal Upload</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>SK Mata Kuliah Semester Ganjil 2022/2023</td>
                                        <td>17/02/2023</td>

                                        <td><div class="btn btn-outline-success btn-xs">Downlad</div> <div class="btn btn-outline-danger btn-xs">Hapus</div></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                    <!-- /.card -->
                </div>


            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection