@extends('layouts.site')
@section('title', 'Tất cả sản phẩm')
@section('header')
    <link rel="stylesheet" href="Product.css">

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
@endsection

@section('content')
    <section>
        <div class="container mt-5">
            <h2 class=" text-danger text-center mb-5">༺ Tất cả sản phẩm ༻</h2>
        </div>
    </section>
    <section>
        <div class="ms-4">
            <div class="row">
                <div class="col-md-2 ms-5 me-5">
                    <ul class="list-group">
                        <li class="list-group-item active">Danh mục sản phẩm</li>
                        @foreach ($cat as $row)
                            <a class="nav-link" href="{{ route('site.product.category', ['slug' => $row->slug]) }}">
                                <li class="list-group-item">{{ $row->name }}</li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        @foreach ($product_all as $product)
                            <div class="col-md-4 mb-4">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>
                    <div className="col-12 d-flex justify-content-center">
                        {{ $product_all->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
