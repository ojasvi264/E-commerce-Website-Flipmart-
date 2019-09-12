@extends('layouts.backend')
@section('title','Product_Line Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product_Line Management
            <a href="{{route('product_line.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('product_line.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product_Line</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Product_Line</h3>

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
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['product_line']->name}}</td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td>{{$data['product_line']->rank}}</td>
                    </tr>
                     <tr>
                         <th>Slug</th>
                         <td>{{$data['product_line']->slug}}</td>
                     </tr>
                    <tr>
                    <th>Status</th>
                    <td>
                        @if($data['product_line']->status==1)
                            <span class="label label-success">Active</span>
                        @else
                            <span class="label label-danger">InActive</span>
                        @endif
                    </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['product_line']->created_by)->name}}</td>
                    </tr>


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['product_line']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['product_line']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['product_line']->updated_by))
                                {{\App\User::find($data['product_line']->updated_by)->name}}
                            @endif
                            {{$data['product_line']->updated_at}}</td>
                    </tr>

                    </thead>
                </table>
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