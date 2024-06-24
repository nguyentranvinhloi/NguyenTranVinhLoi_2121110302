@extends('layouts.admin')
@section('title')
    Bảng bài viết
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng bài viết</li>
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
                        <a href="{{ route('admin.post.index') }}" class="btn btn-sm btn-success">
                            <i class="fa fa-reply" aria-hidden="true"></i> Quay lại
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.post.update', ['id' => $post->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Tiêu đề</label>
                        <input type="text" value="{{ old('title', $post->title) }}" name="name" id="name"
                            class="form-control">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Mô tả</label>
                        <input name="description" value="{{$post->description}}"id="description" class="form-control">
                      </input>
                    </div>
                    <div class="mb-3">
                      <label for="detail">Chi tiết</label>
                      <input type="text" name="detail" id="detail"
                          class="form-control" value="{{ old('detail') }}">
                  </div>
                    <div class="mb-3">
                        <label for="topic_id">Mã chủ đề</label>
                        <select name="topic_id" id="topic_id" class="form-control">
                            <option value="0">None</option>
                            {!! $htmltopicid !!}
                        </select>
                    </div>
                    <div class="mb-3">
                      <label for="type">Loại</label>
                      <input name="type" value="{{$post->type}}" id="type" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2" {{ $post->status == 2 ? 'selected' : '' }}>Chưa xuất bản</option>
                            <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Xuất bản</option>
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
