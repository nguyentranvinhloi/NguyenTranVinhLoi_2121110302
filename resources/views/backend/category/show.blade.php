@extends('layouts.admin')
@section('title')
    Bảng danh mục
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng danh mục</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">
                        {{-- <a href="#" class="btn btn-sm btn-success">
              <i class="fa fa-plus" aria-hidden="true"></i>Thêm
            </a> --}}
                        <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-success">
                            <i class="fa fa-reply" aria-hidden="true"></i> Quay lại
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-stripes">
                    <theader>
                        <tr>
                            <th style="width:300px">Tên trường</th>
                            <th>Giá trị</th>
                           
                        </tr>
                    </theader>
                    <tbody>
                            <tr>
                                <tr>
                                    <th>Id</th>
                                    <td>{{$category->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <td>{{$category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$category->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$category->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$category->status}}</td>
                                </tr>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <td>
                                        <img src="{{ asset('images/categorys/' . $category->image) }}" alt="hinh" width="100px" height="100px"/>
                                    </td>
                                </tr>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
