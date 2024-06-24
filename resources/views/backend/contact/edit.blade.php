@extends('layouts.admin')
@section('title')
    Bảng liên hệ
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật liên hệ</h1>
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
                {{-- @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif --}}
                {{-- @foreach ($list as $category) --}}
                <form action="{{ route('admin.contact.update', ['id' => $contact->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Tên</label>
                        <input type="text" name="name" id="name" class="form-control" 
                        value="{{old('name', $contact->name)}}">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" value={{$contact->email}} name="email" id="email" class="form-control" >
                       
                    </div>
                    <div class="mb-3">
                        <label for="phone">Điện thoại</label>
                        <input type="text" value={{$contact->phone}} name="phone" id="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="title">Tiêu đề</label>
                      <input type="text" value={{$contact->title}} name="title" id="title" class="form-control" value="{{old('title')}}">
                      @error('title')
                          <div class="text-danger">{{$message}}</div>
                      @enderror
                  </div>
                    <div class="mb-3">
                        <label for="content">Nội dung</label>
                        <input type="text" value={{$contact->content}} name="content" id="content" class="form-control">
                        {{-- <textarea name="content" {{ old('content', $contact->title) }} id="content" rows="3" class="form-control"></textarea> --}}
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $contact->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $contact->status == 1 ? 'selected' : '' }}>Xuất bản</option>
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
