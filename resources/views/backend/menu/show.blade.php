@extends('layouts.admin')
@section('title')
    Bảng các mục
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết các mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng các mục</li>
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
                        <a href="{{ route('admin.menu.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$menu->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên mục</th>
                                    <td>{{$menu->name}}</td>
                                </tr>
                                <tr>
                                    <th>Liên kết</th>
                                    <td>{{$menu->link}}</td>
                                </tr>
                                <tr>
                                    <th>Mã cha</th>
                                    <td>{{$menu->parent_id}}</td>
                                </tr>
                                <tr>
                                    <th>Sắp xếp</th>
                                    <td>{{$menu->sort_order}}</td>
                                </tr>
                                <tr>
                                    <th>Vị trí</th>
                                    <td>{{$menu->position}}</td>
                                </tr>
                                <tr>
                                    <th>Loại</th>
                                    <td>{{$menu->type}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$menu->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$menu->status}}</td>
                                </tr>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
