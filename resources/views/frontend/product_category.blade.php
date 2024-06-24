@extends('layouts.site')
@section('title','Sản phẩm theo loại')
@section('header')
<link rel="stylesheet" href="Product.css">

{{-- <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
@endsection

@section('content')
<section>
  <div class="container mt-5">
      <h2 class=" text-danger text-center">༺ {{$row->name}} ༻</h2>
  </div>
</section>
<section>
  <div class="container">
      <div class="row text-center">
          @foreach ($product_category as $product)
              <x-product-card :product="$product" />
          @endforeach
      </div>
      <div className=" text-center col-12 d-flex justify-content-center">
          {{$product_category->links()}}
      </div>
  </div>
</section>
@endsection