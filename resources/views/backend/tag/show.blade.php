@extends('layouts.backend')
@section('title','Tag Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tag Management
            <a href="{{route('tag.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('tag.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tag</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Tag</h3>

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
                        <td>{{$data['tag']->name}}</td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td>{{$data['tag']->rank}}</td>
                    </tr>
                     <tr>
                         <th>Slug</th>
                         <td>{{$data['tag']->slug}}</td>
                     </tr>

                    <tr>
                        <th>Meta keyword</th>
                        <td>{{$data['tag']->meta_keyword}}</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>{{$data['tag']->meta_description}}</td>
                    </tr>
                    <tr>
                    <th>Status</th>
                    <td>
                        @if($data['tag']->status==1)
                            <span class="label label-success">Active</span>
                        @else
                            <span class="label label-danger">InActive</span>
                        @endif
                    </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['tag']->created_by)->name}}</td>
                    </tr>


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['tag']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['tag']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['tag']->updated_by))
                                {{\App\User::find($data['tag']->updated_by)->name}}
                            @endif
                            {{$data['tag']->updated_at}}</td>
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