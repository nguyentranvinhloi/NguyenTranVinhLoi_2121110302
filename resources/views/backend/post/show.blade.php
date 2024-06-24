@extends('layouts.admin')
@section('title')
    Bảng bài viết
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng bài viết</li>
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
                        <a href="{{ route('admin.post.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$post->id}}</td>
                                </tr>
                                <tr>
                                    <th>Mã chủ đề</th>
                                    <td>{{$post->topic_id}}</td>
                                </tr>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <td>{{$post->title}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$post->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Mô tả</th>
                                    <td>{{$post->description}}</td>
                                </tr>
                                <tr>
                                    <th>Chi tiết</th>
                                    <td>{{$post->detail}}</td>
                                </tr>
                                <tr>
                                    <th>Loại</th>
                                    <td>{{$post->type}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$post->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$post->status}}</td>
                                </tr>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <td>
                                        <img src="{{ asset('images/posts/' . $post->image) }}" alt="hinh" width="100px" height="100px"/>
                                    </td>
                                </tr>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
