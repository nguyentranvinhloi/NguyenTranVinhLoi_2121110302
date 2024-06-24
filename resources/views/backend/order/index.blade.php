@extends('layouts.admin')
@section('title')
  Bảng đơn hàng
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bảng đơn hàng</h1>
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
            <a href="#" class="btn btn-sm btn-danger">
              <i class="fa fa-trash" aria-hidden="true"></i>Thùng rác
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <form action="{{ route('admin.order.store') }}" method="post">
              @csrf
              <div class="mb-3">
                <label>Tên Khách hàng</label>
                <input type="text" name="delivery_name" class="form-control"
                    value="{{ old('delivery_name') }}">
                @error('delivery_name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3"> 
              <label>Mã user</label>
              <select name="user_id" class="form-control">
                  <option value="0">Chọn mã</option>
                  {!!$htmluserid!!}
              </select>
          </div>
            <div class="mb-3">
              <label>Giới tính</label>
              <select name="delivery_gender" class="form-control">
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
              </select>
          </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="delivery_email" class="form-control">

            </div>

            <div class="mb-3">
                <label>Số điện thoại</label>
                <input type="text" name="delivery_phone" class="form-control">

            </div>
            <div class="mb-3">
              <label>Địa chỉ</label>
              <textarea name="address" id="delivery_address" rows="3" class="form-control">
              </textarea>
            </div>
            <div class="mb-3">
              <label>Ghi chú</label>
              <textarea name="note" id="note" rows="3" class="form-control">
              </textarea>
            </div>
            <div class="mb-3">
              <label>Loại</label>
              <input name="type" id="type" class="form-control">
              </input>
            </div>

              <div class="mb-3">
                  <label for="status">Trạng thái</label>
                  <select name="status" id="status" class="form-control">
                      <option value="2">Chưa xuất bản</option>
                      <option value="1">Xuất bản</option>
                  </select>
              </div>
              <div class="mb-3">
                <button class="btn btn-sm btn-success">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Lưu
              </button>
              </div>
          </form>
          </div>
          <div class="col-md-9">
            <table class="table table-bordered table-hover table-stripes">
              <theader>
                <tr>
                  <th class="text-center" style="width:30px">#</th>
                  <th class="text-center">Mã khách hàng</th>
                  <th>Tên khách hàng</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Địa chỉ</th>
                  <th class="text-center">SĐT</th>
                  <th class="text-center" style="width:190px">Chức năng</th>
                  <th class="text-center" style="width:30px">ID</th>
                </tr>
              </theader>
              <tbody>
                @foreach ($list as $row)
                <tr>
                  <th>
                    <input type="checkbox" >
                  </th>
                  <th class="text-center">{{$row->user_id}}</th>
                  <th>{{$row->delivery_name}}</th>
                  <th>{{$row->delivery_email}}</th>
                  <th>{{$row->delivery_address}}</th>
                  <th>{{$row->delivery_phone}}</th>
                  <th class="text-center">
                    <a href="#" class="btn btn-sm btn-success">
                      <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.order.show',['id'=>$row->id ])}}" class="btn btn-sm btn-info">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.order.edit',['id'=>$row->id ])}}" class="btn btn-sm btn-primary">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.order.delete',['id'=>$row->id ])}}" class="btn btn-sm btn-danger">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
    
                  </th>
                  <th>{{$row->id}}</th>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection
