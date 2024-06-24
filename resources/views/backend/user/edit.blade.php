@extends('layouts.admin')
@section('title')
    Bảng người dùng
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật người dùng</h1>
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
                <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Tên người dùng</label>
                        <input type="text" value="{{ old('name', $user->name) }}" name="name" id="name"
                            class="form-control">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" value={{$user->email}} name="email" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label>Số điện thoại</label>
                        <input type="text" value={{$user->phone}} name="phone" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" value={{$user->username}} name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Mật khẩu</label>
                        <input type="text" value={{$user->password}} name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Địa chỉ</label>
                        <input name="address" value={{$user->address}} id="address"  class="form-control">
                        </input>
                    </div>
                    <div class="mb-3">
                        <label>Giới tính</label>
                        <input type="text" value={{$user->gender}} name="gender" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Vai trò</label>
                        <input type="text" value={{$user->roles}} name="roles" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Xuất bản</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-sm btn-success">
                            <i class="fa fa-save" aria-hidden="true"></i>
                            Lưu
                        </button>
                    </div>
                </form>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
@endsection
