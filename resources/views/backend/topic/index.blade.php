@extends('layouts.admin')
@section('title')
    Bảng chủ đề
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bảng chủ đề</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng chủ đề</li>
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

                        <form action="{{ route('admin.topic.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Tên chủ đề</label>
                                <input type="text" name="name" id="name" placeholder="Nhập tên chủ đề"
                                    class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Mô tả</label>
                                <textarea rows="3" name="description" id="description" placeholder="Nhập mô tả" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Sắp xếp</label>
                                <select name="sort_order" class="form-control">
                                    <option value="0">Chọn vị trí</option>
                                    {!! $htmlsortorder !!}
                                </select>
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
                        </form>


                    </div>

                    <div class="col-md-9">
                        <table class="table table-bordered table-hover table-stripes">
                            <theader>
                                <tr>
                                    <th class="text-center" style="width:30px">#</th>
                                    <th>Tên chủ đề</th>
                                    <th>Slug</th>
                                    <th>Mô tả</th>
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
                                        <th>{{ $row->slug }}</th>
                                        <th>{{ $row->description }}</th>
                                        <th class="text-center">
                                            <a href="#" class="btn btn-sm btn-success">
                                                <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.topic.show', ['id' => $row->id]) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.topic.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.topic.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
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
