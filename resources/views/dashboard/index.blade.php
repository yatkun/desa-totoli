@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $berita }}</h3>
                        <p>Total Berita</p>
                    </div>
                    <div class="icon">
                        <i class="fa-regular fa-newspaper"></i>
                    </div>
                    <a href="/dashboard/berita" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $pengumuman }}</h3>
                        <p>Total Pengumuman</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <a href="/dashboard/pengumuman" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $penduduk }}</h3>
                        <p>Total Penduduk</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <a href="/dashboard/penduduk" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $layanan }}</h3>
                        <p>Total Layanan</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    <a href="/dashboard/layanan" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
        </div>
    </div>
    <!-- /.content -->
</div>

@endsection