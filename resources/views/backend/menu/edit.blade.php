@extends('layouts.admin')
@section('title')
    Bảng các mục
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật các mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
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
                        <a href="{{ route('admin.menu.index') }}" class="btn btn-sm btn-success">
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
                <form action="{{ route('admin.menu.update', ['id' => $menu->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Tên mục</label>
                        <input type="text" value="{{ old('name', $menu->name) }}" name="name" id="name"
                            class="form-control">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Link</label>
                        <input type="text" name="link" id="link" 
                            class="form-control" value="{{ old('link', $menu->link) }}">
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
                        <input type="text" value={{$menu->table_id}} name="table_id" id="table_id"
                            class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label>Vị trí</label>
                      <input type="text" value={{$menu->position}} name="position" id="position" placeholder="mainmenu"
                          class="form-control" >
                  </div>
                    <div class="mb-3">
                        <label>Type</label>
                        <input type="text" value={{$menu->type}} name="type" id="type" 
                            class="form-control" value="{{ old('type') }}">
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $menu->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $menu->status == 1 ? 'selected' : '' }}>Xuất bản</option>
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
