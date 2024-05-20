@extends('layouts.site')
@section('title', 'Trang chủ')
@section('header')
    <link rel="stylesheet" href="Home.css">
@endsection

@section('content')
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/banner1.jpg') }}" height="400" class="d-block w-100" alt="Wild Landscape" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/banner1.jpg') }}" height="400" class="d-block w-100" alt="Camera" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="card p-4 bg-success bg-opacity-60">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="mb-0 text-white">Sản phẩm mới</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Feature -->
    <!-- Features -->
    <section>
        <div class="container mt-5">
            <div class="card p-4 bg-success bg-opacity-60">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="mb-0 text-white">Sản phẩm bán chạy</h4>
                        <p class="mb-0 text-white-50">giới thiệu</p>
                    </div>
                    <div class="col-auto"><a class="btn btn-white text-white text-decoration-underline shadow-0"
                            href="#">xem thêm</a></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <div class="mask" style="height: 50px;">
                            <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                <h6><span class="badge bg-danger pt-1">New</span></h6>
                            </div>
                        </div>
                        <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tên sản phẩm</h5>
                            <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                        class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
