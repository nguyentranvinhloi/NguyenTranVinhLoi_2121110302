@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
@section('header')
    <link rel="stylesheet" href="Product_detail.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
    <section class="container">
        <section class="py-5">
            <div class="container">
                <div class="row gx-5">
                    <aside class="col-lg-6">
                        <div class=" rounded-4 mb-3 d-flex justify-content-center">
                            <a>
                                <img width="300px" height="400px" class="rounded-4 fit" src="{{ asset('assets/sp.jpg') }}" />
                            </a>
                        </div>
                    </aside>
                    <main class="col-lg-6">
                        <div class="ps-lg-3">
                            <h4 class="title text-dark">
                                {{ $product->name }} <br />
                            </h4>
                            <div class="mb-3">
                                @if ($product->pricesale > 0 && $product->pricesale < $product->price)
                                    <div class="col-9">
                                        <p class="card-text"><span class="h5">{{ $product->pricesale }} vnđ</span> <span
                                                class="text-muted">/cái</span> </p>
                                        <span class="text-danger"></span><s>{{ $product->price }} vnđ</s></span>
                                    </div>
                                @else
                                    <p class="card-text"><span class="h5">{{ number_format($product->price) }} vnđ</span> <span
                                            class="text-muted">/cái</span> </p>
                                @endif
                            </div>
                            <p>
                                {{ $product->description }}
                            </p>
                            <hr />
                            <div class="row mb-4">
                                {{-- <div class="col-md-4 col-6">
                                    <label class="mb-2">Kích thước</label>
                                    <select class="form-select border border-secondary" style="height: 35px;">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                    </select>
                                </div> --}}
                                <div class="input-group mt-5 mb-3">
                                    <label class="mb-2 d-block me-2">Số lượng</label>
                                    <input type="number" value="1" min="0" max="10"
                                        aria-describedby="basic-addon2" id="qty">
                                </div>
                            </div>
                            <button class="input-group-text btn btn-success" onclick="handleAddCart({{$product->id}})">
                                Thêm vào giỏ hàng
                            </button>
                            {{-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                                class="me-1 fa fa-heart fa-lg"></i> Thêm vào danh sách yêu thích </a> --}}
                        </div>
                    </main>
                </div>
            </div>
        </section>
        {{-------------------------------------------------------------------------------------------------------------------------------------}}
        <section class="bg-light border-top py-4">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-lg-8 mb-4">
                        <div class="border rounded-2 px-3 py-2 bg-white">
                            <!-- Pills navs -->
                            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                <li class="nav-item d-flex" role="presentation">
                                    <a class="nav-link d-flex align-items-center justify-content-center w-100 active"
                                        id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab"
                                        aria-controls="ex1-pills-1" aria-selected="true">Mô tả chi tiết</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->

                            <!-- Pills content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                                    aria-labelledby="ex1-tab-1">
                                    <p>
                                        {{ $product->detail }}
                                    </p>

                                    {{-- <table class="table border mt-3 mb-2">
                                        <tr>
                                            <th class="py-2">Thông số:</th>
                                            <td class="py-2">.....</td>
                                        </tr>
                                        <tr>
                                            <th class="py-2">Thông số:</th>
                                            <td class="py-2">.....</td>
                                        </tr>
                                        <tr>
                                            <th class="py-2">Thông số:</th>
                                            <td class="py-2">.....</td>
                                        </tr>
                                        <tr>
                                            <th class="py-2">Thông số:</th>
                                            <td class="py-2">.....</td>
                                        </tr>
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="px-0 border rounded-2 shadow-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm liên quan</h5>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="{{ asset('assets/sp.jpg') }}" style="min-width: 96px; height: 96px;"
                                                class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                Tên sản phẩm <br />
                                                dòng 2
                                            </a>
                                            <strong class="text-dark"> 99.000 đ</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="{{ asset('assets/sp.jpg') }}" style="min-width: 96px; height: 96px;"
                                                class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                Tên sản phẩm <br />
                                                dòng 2
                                            </a>
                                            <strong class="text-dark"> 99.000 đ</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="{{ asset('assets/sp.jpg') }}" style="min-width: 96px; height: 96px;"
                                                class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                Tên sản phẩm <br />
                                                dòng 2
                                            </a>
                                            <strong class="text-dark"> 99.000 đ</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="{{ asset('assets/sp.jpg') }}"
                                                style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                Tên sản phẩm <br />
                                                dòng 2
                                            </a>
                                            <strong class="text-dark"> 99.000 đ</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="{{ asset('assets/sp.jpg') }}"
                                                style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                Tên sản phẩm <br />
                                                dòng 2
                                            </a>
                                            <strong class="text-dark"> 99.000 đ</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        {{-------------------------------------------------------------------------------------------------------------------------------------}}
        <section>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Sản phẩm liên
                        quan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bình
                        luận</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="row text-center">
                        @foreach ($product_category as $product)
                            <div class="col-md-3 mb-4">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">Tích hợp Facebook</div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                    tabindex="0">...</div>
            </div>
        </section>
    </section>
@endsection
@section('footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function handleAddCart(productid)
        {
            let qty=document.getElementById("qty").value;
            $.ajax({
                url:"{{ route('site.cart.addcart')}}",
                type:"GET",
                data:{
                    productid:productid,
                    qty:qty
                },
                success:function(result,status,xhr){
                    document.getElementById("showqty").innerHTML=result;
                    alert("Đã thêm sản phẩm vào giỏ hàng!");
                },
                error:function(xhr,status,error)
                {
                    alert(error);
                }
            })
           //alert(productid+qty);
        }
    </script>
@endsection