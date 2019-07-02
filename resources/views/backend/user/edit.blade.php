@extends('layouts.backend')
@section('title','User Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Management
            <a href="{{route('user.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('user.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                @include('includes.flash')
                @include('includes.error')
                <form action="{{route('user.update',$data['user']->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf
                    <div class="form-group">
                        <label for="role_id">Role Id</label>
                        <input type="number" name="role_id" class="form-control" id="role_id" value="{{$data['user']->role_id}}"/>
                        @include('includes.single_field_validation',['field'=>'role_id'])
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$data['user']->name}}"/>
                        @include('includes.single_field_validation',['field'=>'name'])
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{$data['user']->password}}"/>
                        @include('includes.single_field_validation',['field'=>'password'])
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$data['user']->email}}"/>
                        @include('includes.single_field_validation',['field'=>'email'])
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="Update User"><i class="fa fa-save"></i>Update User</button>
                        <button type="submit" class="btn btn-danger" value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection