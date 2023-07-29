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
                  
                    <a href="/dashboard/aparaturdesa/tambah" class="btn btn-success btn-sm">Tambah Aparatur Desa</a>
                    <div class="card-tools">
                       
                      
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($items as $item)
                           
                            <tr class="items-center">
                                <td style="vertical-align: middle;">{{ $i++ }}</td>
                                <td style="vertical-align: middle;">
                                    <a href="{{url('dashboard/aparaturdesa/edit')}}/{{$item->id}}">{{ $item->nama }}</a>
                                    
                                </td>
                                <td style="vertical-align: middle;">{{ $item->jabatan }}</td>
                                <td style="vertical-align: middle;"><img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->nama }}" class="img-thumbnail " style="width:50px"></td>
                           
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <!-- /.content -->
</div>

@endsection

