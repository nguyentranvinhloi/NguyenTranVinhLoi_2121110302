@extends('layouts.admin')
@section('title')
  Bảng liên hệ
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bảng liên hệ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
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
            <a href="#" class="btn btn-sm btn-danger">
              <i class="fa fa-trash" aria-hidden="true"></i>Thùng rác
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <form action="{{route("admin.contact.store")}}" method="post" enctype="multipart/form-data">
              @csrf <!-- Add CSRF token for security -->
              
              <div class="mb-3">
                  <label for="name">Tên</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                  @error('name')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
              </div>
              
              <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" >
                 
              </div>
              <div class="mb-3">
                  <label for="phone">Điện thoại</label>
                  <input type="text" name="phone" id="phone" class="form-control">
              </div>
              <div class="mb-3">
                <label for="title">Tiêu đề</label>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
              <div class="mb-3">
                  <label for="content">Nội dung</label>
                  <textarea name="content" id="content" rows="3" class="form-control"></textarea>
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
                  
                  <th>Tên khách hàng</th>
                  <th>Email</th>
                  <th>Điện thoại</th>
                  <th class="text-center" style="width:190px">Chức năng</th>
                  <th class="text-center" style="width:30px">ID</th>
                </tr>
              </theader>
              <tbody>
                @foreach ($list as $row)
                <tr>
                  <th>
                    <input type="checkbox">
                  </th>
                  
                  <th>{{$row->name}}</th>
                  <th>{{$row->email}}</th>
                  <th>{{$row->phone}}</th>
                  <th class="text-center">
                    <a href="#" class="btn btn-sm btn-success">
                      <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.contact.show',['id'=>$row->id ])}}" class="btn btn-sm btn-info">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.contact.edit',['id'=>$row->id ])}}" class="btn btn-sm btn-primary">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('admin.contact.delete',['id'=>$row->id ])}}" class="btn btn-sm btn-danger">
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
