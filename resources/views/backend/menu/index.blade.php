@extends('layouts.admin')
@section('title')
    Bảng các mục
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bảng các mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng các mục</li>
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
                        <form action="{{ route('admin.menu.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Tên menu</label>
                                <input type="text" name="name" id="name" 
                                    class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Link</label>
                                <input type="text" name="link" id="link" 
                                    class="form-control" value="{{ old('link') }}">
                            </div>
                            <div class="mb-3">
                                <label for="parent_id">Cấp cha</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0">Cấp cha</option>
                                    {!! $htmlparentid !!}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sort_order">Sắp xếp</label>
                                <select name="sort_order" id="sort_order" class="form-control">
                                    <option value="0">Chọn vị trí</option>
                                    {!! $htmlsortorder !!}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Mã bảng</label>
                                <input type="text" name="table_id" id="table_id"
                                    class="form-control" >
                            </div>
                            <div class="mb-3">
                              <label>Vị trí</label>
                              <input type="text" name="position" id="position" placeholder="mainmenu"
                                  class="form-control" >
                          </div>
                            <div class="mb-3">
                                <label>Type</label>
                                <input type="text" name="type" id="type" 
                                    class="form-control" value="{{ old('type') }}">
                            </div>

                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                            <div class="card-header text-right">
                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                    Lưu
                                </button>
                            </div>

                    </div>


                    <div class="col-md-9">
                        <table class="table table-bordered table-hover table-stripes">
                            <theader>
                                <tr>
                                    <th class="text-center" style="width:30px">#</th>
                                    <th>Tên mục</th>
                                    <th>Liên kết</th>
                                    <th class="text-center">Thứ tự</th>
                                    <th class="text-center">Mã cha</th>
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
                                        <th>{{ $row->name }}</th>
                                        <th>{{ $row->link }}</th>
                                        <th class="text-center">{{ $row->sort_order }}</th>
                                        <th class="text-center">{{ $row->parent_id }}</th>
                                        <th class="text-center">
                                            <a href="#" class="btn btn-sm btn-success">
                                                <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.menu.show', ['id' => $row->id]) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.menu.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.menu.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
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
        </div>
    </section>
@endsection
