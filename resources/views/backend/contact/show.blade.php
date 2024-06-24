@extends('layouts.admin')
@section('title')
    Bảng liên hệ
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết liên hệ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng liên hệ</li>
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
                        <a href="{{ route('admin.contact.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$contact->id}}</td>
                                </tr>
                                <tr>
                                    <th>Mã user</th>
                                    <td>{{$contact->user_id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên liên hệ</th>
                                    <td>{{$contact->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$contact->email}}</td>
                                </tr>
                                <tr>
                                    <th>Điện thoại</th>
                                    <td>{{$contact->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <td>{{$contact->title}}</td>
                                </tr>
                                <tr>
                                    <th>Nội dung</th>
                                    <td>{{$contact->content}}</td>
                                </tr>
                                <tr>
                                    <th>Mã replay</th>
                                    <td>{{$contact->replay_id}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$contact->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$contact->status}}</td>
                                </tr>
                                
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
