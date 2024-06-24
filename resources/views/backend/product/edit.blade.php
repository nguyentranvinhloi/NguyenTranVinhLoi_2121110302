@extends('layouts.admin')
@section('title')
    Bảng sản phẩm
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng sản phẩm</li>
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
                        <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-success">
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
                <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-9">
                        <label>Tên sản phẩm</label>
                        <input type="text" value="{{ old('name', $product->name) }}" name="name" id="name"
                            class="form-control" onkeydown="handle_slug(this.value);">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Chi tiết</label>
                        <textarea type="text" rows="3" name="detail" id="detail" class="form-control">
                            {{$product->detail}}
                        </textarea>

                    </div>
                    <div class="mb-3">
                        <label>Mô tả</label>
                        <textarea type="text" name="description" id="description" class="form-control">
                            {{$product->description}}
                        </textarea>

                    </div>
                    
                    <div class="mb-3"> 
                        <label>Danh mục</label>
                        <select name="category_id" class="form-control">
                            <option value="0">Chọn danh mục</option>
                            {!!$htmlcategoryid!!}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Thương hiệu</label>
                        <select name="brand_id" class="form-control">
                            <option value="0">Chọn thương hiệu</option>
                            {!!$htmlbrandid!!}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Giá</label>
                        <input type="text" value={{$product->price}} name="price" id="price" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label>Giá khuyến mãi</label>
                        <input type="text" value={{$product->pricesale}} name="pricesale" id="pricesale" class="form-control">

                    </div>
                   
                    <div class="mb-3">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Xuất bản</option>
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
