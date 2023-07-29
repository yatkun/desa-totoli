@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin</h1>
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
                    <div class="card-title ">
                        <a href="/dashboard/admin/tambah" class="btn btn-sm btn-success">Tambah Admin</a>
                    </div>
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
                                <th>Nama</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($posts as $post)
                           
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <a href="{{url('dashboard/admin/edit')}}/{{$post->id}}">{{ $post->name }}</a>
                                    
                                </td>
                                <td>{{ $post->username }}</td>
                         
                           
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

