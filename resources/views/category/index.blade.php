@extends('layouts.admin_layout')

@section('title') Category @endsection

@section('style')
    <style>
        .thumbnail-img{
            height: 50px;
            width: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info shadow">
                    <div class="card-header">
                        All Category
                        <div class="card-tools">
                                <a href="#" data-toggle="modal" data-target="#newsCreate"
                                   class="btn btn-sm defaultBtnColor text-white">
                                    <i class="fas fa-plus"></i>
                                    Add New</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="categoryTable" class="table text-center">
                            <thead>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th style="width: 70%">Category Name</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($categories as $category)
                                    <tr>
                                    <th>{{$i++}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <button
                                                title="View" type="button"
                                                onclick="viewNewsModal()"
                                                class="btn btn-info btn-sm" title="View"><i class="fa fa-search-plus"></i>
                                        </button>
                                        <button
                                                title="Edit" type="button"
                                                onclick="openNewsEditModal()"
                                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                        </button>
                                        <button
                                            type="button"
                                            title="Delete"
                                            onclick="deleteBtn()"
                                            class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // select2
        $('.select2').select2()


        $("#categoryTable").DataTable({
            "responsive": true,
            "autoWidth": false,
            "searching": true,

        });
    </script>
@endsection
