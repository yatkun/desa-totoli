@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pribadi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                        <li class="breadcrumb-item active">Data Pribadi</li>
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
                <div class="col-md-5">
                    <div class="card card-outline card-primary rounded-0 elevation-0">
                        <div class="card-header">
                            <h3 class="card-title ">Profil</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3">
                            <img class="img-responsive img-circle items-center mx-auto d-block" src="http://placekitten.com/g/180/180" />
                           <div class="btn btn-flat btn-primary btn-sm col-md-8 mx-auto d-block my-3">
                            <i class="fa fa-camera" aria-hidden="true" style="margin-right: 2px"></i>Unggah foto</div>
                            <table class="table table-hover text-nowrap tabelsm">

                                <tbody>
                                    <tr>
                                        <td>NIM/NIDN/NIDK</td>
                                        <td>:</td>
                                        <td>G651160432</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>Muhammad Hidayatullah</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>:</td>
                                        <td>Bone</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>30 Juni 1995</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer card-footer-bg">
                            <div class="btn btn-flat btn-info btn-sm">Ubah data</div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-7">
                    <div class="card card-outline card-primary rounded-0 elevation-0">
                        <div class="card-header">
                            <h3 class="card-title">Alamat dan Kontak</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3">
                            <table class="table table-hover text-nowrap tabelsm">

                                <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td >dayat@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jalan</td>
                                        <td>:</td>
                                        <td>Andi Ahmad</td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan/desa</td>
                                        <td>:</td>
                                        <td>Tancung</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>:</td>
                                        <td>Tanasitolo</td>
                                    </tr>
                                    <tr>
                                        <td>Kab./Kota</td>
                                        <td>:</td>
                                        <td>Wajo</td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td>:</td>
                                        <td>Sulawesi Selatan</td>
                                    </tr>
                                    <tr>
                                        <td>No. HP / Whatsapp</td>
                                        <td>:</td>
                                        <td>085155103646</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer card-footer-bg">
                            <div class="btn btn-flat btn-info btn-sm">Ubah data</div>
                        </div>
                        <!-- /.card-body -->
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