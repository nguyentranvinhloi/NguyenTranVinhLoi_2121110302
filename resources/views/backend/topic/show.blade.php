@extends('layouts.admin')
@section('title')
    Bảng chủ đề
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết chủ đề</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng chủ đề</li>
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
                        <a href="{{ route('admin.topic.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$topic->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên chủ đề</th>
                                    <td>{{$topic->name}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$topic->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Sắp xếp</th>
                                    <td>{{$topic->sort_order}}</td>
                                </tr>
                                <tr>
                                    <th>Mô tả</th>
                                    <td>{{$topic->description}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$topic->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$topic->status}}</td>
                                </tr>
                                
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
