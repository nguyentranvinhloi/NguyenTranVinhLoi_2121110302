@extends('layouts.admin')
@section('title')
    Bảng người dùng
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng người dùng</li>
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
                        <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên người dùng</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td>{{$user->username}}</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>{{$user->password}}</td>
                                </tr>
                                <tr>
                                    <th>Giới tính</th>
                                    <td>{{$user->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Điện thoại</th>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>{{$user->address}}</td>
                                </tr>
                                <tr>
                                    <th>role</th>
                                    <td>{{$user->roles}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$user->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$user->status}}</td>
                                </tr>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <td>
                                        <img src="{{ asset('images/users/' . $user->image) }}" alt="hinh" width="100px" height="100px"/>
                                    </td>
                                </tr>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
