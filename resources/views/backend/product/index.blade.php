@extends('layouts.admin')
@section('title')
    Bảng sản phẩm
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bảng sản phẩm</h1>
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
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3">
                        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-9">
                                <label>Tên sản phẩm</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name"
                                    class="form-control" onkeydown="handle_slug(this.value);">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Chi tiết</label>
                                <textarea type="text" rows="3" name="detail" id="detail" class="form-control"></textarea>

                            </div>
                            <div class="mb-3">
                                <label>Mô tả</label>
                                <textarea type="text" name="description" id="description" class="form-control"></textarea>

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
                                <input type="text" name="price" id="price" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label>Giá khuyến mãi</label>
                                <input type="text" name="pricesale" id="pricesale" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label>Số lượng</label>
                                <input type="text" name="qty" id="qty" class="form-control">

                            </div>

                            <div class="mb-3">
                                <label>Hình đại diện</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
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
                                    <th class="text-center" style="width:90px">Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Thương hiệu</th>
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
                                        <th>
                                            <img src="{{ asset('images/products/' . $row->image) }}" class="img-fluid"
                                                alt="{{ $row->image }}">
                                        </th>
                                        <th>{{ $row->name }}</th>
                                        <th>{{ $row->categoryname }}</th>
                                        <th>{{ $row->brandname }}</th>
                                        <th class="text-center">
                                            <a href="#" class="btn btn-sm btn-success">
                                                <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.product.show', ['id' => $row->id]) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.product.edit', ['id' => $row->id]) }}" 
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.product.delete', ['id' => $row->id]) }}" 
                                                class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                        </th>
                                        <th>{{ $row->id }}</th>
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
