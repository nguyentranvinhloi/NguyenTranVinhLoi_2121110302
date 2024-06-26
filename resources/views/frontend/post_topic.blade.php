@extends('layouts.site')
@section('title', 'Bài viết theo chủ đề')
@section('header')
    <link rel="stylesheet" href="Product.css">

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
@endsection

@section('content')
    <section>
        <div class="container mt-5">
            <h2 class=" text-danger text-center mb-5">༺ {{ $row->name }} ༻</h2>
        </div>
    </section>
    <section>
        <div class="ms-4">
            <div class="row">
                <div class="col-md-2 ms-5 me-5">
                    <ul class="list-group">
                        <li class="list-group-item active ">Chủ đề bài viết</li>
                        @foreach ($top as $top)
                            <a class="nav-link" href="{{ route('site.post.topic', ['slug' => $top->slug]) }}">
                                <li class="list-group-item">{{ $top->name }}</li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        @foreach ($post_topic as $post)
                            <div class="col-md-4 mb-4">
                                <x-post-card :post="$post" />
                            </div>
                        @endforeach
                    </div>
                    <div className=" text-center col-12 d-flex justify-content-center">
                        {{ $post_topic->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
