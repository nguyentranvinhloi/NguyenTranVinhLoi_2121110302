@extends('layouts.admin')
@section('title')
    Bảng băng rôn
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật băng rôn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng băng rôn</li>
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
                        <a href="{{ route('admin.banner.index') }}" class="btn btn-sm btn-success">
                            <i class="fa fa-reply" aria-hidden="true"></i> Quay lại
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.banner.update', ['id' => $banner->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Tên băng rôn</label>
                        <input type="text" value="{{ old('name', $banner->name) }}" name="name" id="name"
                            class="form-control">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Mô tả</label>
                        <textarea name="description" id="description" rows="3" class="form-control">
                                {{ old('description', $banner->description) }}
                              </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link">Liên kết</label>
                        <input type="text" value={{$banner->link}} name="link" id="link"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="position">Vị trí</label>
                        <input type="text" value={{$banner->position}} name="position" id="position"
                            class="form-control" placeholder="slideshow">
                    </div>
                    <div class="mb-3">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $banner->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Xuất bản</option>
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
