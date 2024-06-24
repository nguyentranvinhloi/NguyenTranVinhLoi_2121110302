@extends('layouts.admin')
@section('title')
  Bảng người dùng
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bảng người dùng</h1>
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
            {{-- <a href="{{route('admin.user.create',['id'=>$row->id ])}}" class="btn btn-sm btn-success">
              <i class="fa fa-plus" aria-hidden="true"></i>Thêm
            </a> --}}
            <a href="#" class="btn btn-sm btn-danger">
              <i class="fa fa-trash" aria-hidden="true"></i>Thùng rác
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
       

          {{-- <div class="col-md-3">
            <form action="{{ route('admin.banner.store') }}" method="post">
              @csrf
              <div class="mb-3">
                  <label for="name">Tên khách hàng</label>
                  <input type="text" value="{{ old('name') }}" name="name" id="name"
                      class="form-control">
                  @error('name')
                      {{ $message }}
                  @enderror
              </div>
              <div class="mb-3">
                <label for="username">Tài khoản</label>
                <input type="text"  name="username" id="username"
                    class="form-control">
              </div>
              <div class="mb-3">
                <label for="password">Mật khẩu</label>
                <input type="text"  name="password" id="password"
                    class="form-control">
              </div>
              <div class="mb-3">
                <label for="gender">Giới tính</label>
                <input type="text"  name="gender" id="gender"
                    class="form-control">
              </div>
              <div class="mb-3">
                <label for="phone">Điện thoại</label>
                <input type="text"  name="phone" id="phone"
                    class="form-control">
              </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="text"  name="email" id="email"
                    class="form-control">
              </div>
              <div class="mb-3">
                <label for="roles">Vai trò</label>
                <input type="text"  name="roles" id="roles"
                    class="form-control">
              </div>
              <div class="mb-3">
                  <label for="address">Địa chỉ</label>
                  <textarea name="address" id="address" rows="3" class="form-control">
                </textarea>
              </div>
              
              <div class="mb-3">
                  <label for="image">Hình ảnh</label>
                  <input type="file" name="image" id="image" class="form-control">
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
          </div> --}}

          
            <table class="table table-bordered table-hover table-stripes">
              <theader>
                <tr>
                  <th class="text-center" style="width:30px">#</th>
                  <th>Mã khách hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Username</th>
                  <th style="width:80px">Password</th>
                  <th class="text-center" style="width:220px">Chức năng</th>
                  <th class="text-center" style="width:30px">ID</th>
                </tr>
              </theader>
              <tbody>
                @foreach ($list as $row)
                <tr>
                  <th>
                    <input type="checkbox">
                  </th>
                  <th>{{$row->user_id}}</th>
                  <th>{{$row->name}}</th>
                  <th>{{$row->username}}</th>
                  <th>{{$row->password}}</th>
                  <th class="text-center">
                    <a href="#" class="btn btn-sm btn-success">
                      <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.user.show',['id'=>$row->id ])}}" class="btn btn-sm btn-info">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.user.edit',['id'=>$row->id ])}}" class="btn btn-sm btn-primary">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.user.delete',['id'=>$row->id ])}}" class="btn btn-sm btn-danger">
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
  </section>
@endsection
