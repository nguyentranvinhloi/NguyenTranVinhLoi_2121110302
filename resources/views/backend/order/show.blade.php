@extends('layouts.admin')
@section('title')
    Bảng đơn hàng
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Xem chi tiết đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng đơn hàng</li>
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
                        <a href="{{ route('admin.order.index') }}" class="btn btn-sm btn-success">
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
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tên đặt hàng</th>
                                    <td>{{$order->delivery_name}}</td>
                                </tr>
                                <tr>
                                    <th>Mã user</th>
                                    <td>{{$order->user_id}}</td>
                                </tr>
                                <tr>
                                    <th>Giới tính</th>
                                    <td>{{$order->delivery_gender}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$order->delivery_email}}</td>
                                </tr>
                                <tr>
                                    <th>Điện thoại</th>
                                    <td>{{$order->delivery_phone}}</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>{{$order->delivery_address}}</td>
                                </tr>
                                <tr>
                                    <th>Ghi chú</th>
                                    <td>{{$order->note}}</td>
                                </tr>
                                <tr>
                                    <th>Loại</th>
                                    <td>{{$order->type}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{{$order->status}}</td>
                                </tr>
                               
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
