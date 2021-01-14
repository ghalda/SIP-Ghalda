@extends('layout')
@section('title', 'User Manager')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h1 class="m-0"><b>User Manager</b></h1>
                        <a href="/pengguna/create" class="btn btn-primary mb-2">+ Add Data</a>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pengguna as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->username}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->password}}</td>
                                    <td>
                                        <a href="{{$p->id}}/edit" class="btn btn-block btn-success">Edit</a>
                                        <form action="{{$p->id}}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-danger mt-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection