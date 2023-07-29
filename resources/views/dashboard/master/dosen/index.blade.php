@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Dosen</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Data Dosen</li>
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
                                <div class="btn btn-flat btn-info btn-xs">Tambah dosen</div>
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



                        <div class="card-body p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>NIDN/NIDK</th>
                                        <th>Nama Dosen</th>
                                        <th>Homebase</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>0030069502</td>
                                        <td>Muhammad Hidayatullah, S.Pd., M.Kom</td>
                                        <td>Statistika</td>

                                        <td> <div class="btn btn-outline-danger btn-xs">Hapus</div></td>
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