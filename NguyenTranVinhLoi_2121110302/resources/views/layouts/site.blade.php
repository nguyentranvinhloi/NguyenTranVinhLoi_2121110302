<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> --}}
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <header>
            <div class="p-3 text-center bg-white border-bottom">
                <div class="container">
                    <div class="row gy-3">

                        <div class="col-lg-2 col-sm-4 col-4 ">
                            <a href="./index.html" target="_blank" class="float-start">
                                <img src="{{ asset('assets/logo.png') }}" width="120" height="30" />
                            </a>
                            {{-- <h6 class="text-uppercase text-primary fw-bold mt-2">ĐẮC LỢI</h6> --}}

                        </div>

                        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                            <div class="d-flex float-end">
                                <a href="#"
                                    class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"
                                    target="_blank"> <i class="fa fa-user"></i>

                                </a>
                                <a href="#"
                                    class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"
                                    target="_blank"> <i class="fas fa-heart m-1 me-md-2"></i>
                                </a>
                                <a href="#" class="border rounded py-1 px-3 nav-link d-flex align-items-center"
                                    target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="input-group float-center">
                                <div class="form-outline">
                                    <input type="search" id="form1" class="form-control" />
                                    <label class="form-label" for="form1">Tìm kiếm</label>
                                </div>
                                <button type="button" class="btn btn-success shadow-0">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light  bg-success ">

                <div class="container justify-content-center justify-content-md-between">
                    <button class="navbar-toggler border py-2 text-white" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page"
                                    href="/NguyenTranVinhLoi_2121110302/public/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/NguyenTranVinhLoi_2121110302/public/san-pham">Tất
                                    cả sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/NguyenTranVinhLoi_2121110302/public/lien-he">Liên
                                    hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white"
                                    href="/NguyenTranVinhLoi_2121110302/public/chi-tiet-san-pham/">Chi tiết sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

    </header>
    <!---------------------------------------------------------------------------------------------------------->



    @yield('content')



    <!---------------------------------------------------------------------------------------------------------->
    <footer>
        <footer class="text-center text-lg-start text-muted bg-secondary bg-gradient mt-3">

            <section class="p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                <div class="container">
                    <div class="row d-flex">
                        <!-- Left -->
                        <div
                            class="col-md-6 col-sm-12 mb-2 mb-md-0 d-flex justify-content-center justify-content-md-start">
                            <div class="">
                                <div class="input-group" style="max-width: 400px;">
                                    <input type="email" class="form-control border" placeholder="Email"
                                        aria-label="Email" aria-describedby="button-addon2" />
                                    <button class="btn btn-light border" type="button" id="button-addon2"
                                        data-mdb-ripple-color="dark">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 float-center">
                            <div class="float-md-end">
                                <a class="btn btn-icon btn-light text-secondary px-3 border" title="Facebook"
                                    target="_blank" href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a class="btn btn-icon btn-light text-secondary px-3 border" title="Instagram"
                                    target="_blank" href="#"><i class="fab fa-instagram fa-lg"></i></a>
                                <a class="btn btn-icon btn-light text-secondary px-3 border" title="Youtube"
                                    target="_blank" href="#"><i class="fab fa-youtube fa-lg"></i></a>
                                <a class="btn btn-icon btn-light text-secondary px-3 border" title="Twitter"
                                    target="_blank" href="#"><i class="fab fa-twitter fa-lg"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="">
                <div class="container text-center text-md-start pt-4 pb-4">

                    <div class="row mt-3">
                        <div class="col-12 col-lg-3 col-sm-12 mb-2 ">
                            <a href="./index.html" target="_blank" class="text-white h2 center">
                                <img src="img/logo.png" width="150" />
                            </a>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <h6 class="text-uppercase text-white fw-bold mb-2">
                                Cửa hàng
                            </h6>
                            <ul class="list-unstyled mb-4">
                                <li><a class="text-white-50" href="#">Thông tin cửa hàng</a></li>
                                <li><a class="text-white-50" href="#">Danh mục</a></li>
                                <li><a class="text-white-50" href="#">Bài viết</a></li>
                                <li><a class="text-white-50" href="#">Xem thêm</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">

                            <h6 class="text-uppercase text-white fw-bold mb-2">
                                Giao hàng
                            </h6>
                            <ul class="list-unstyled mb-4">
                                <li><a class="text-white-50" href="#">Hỗ trợ</a></li>
                                <li><a class="text-white-50" href="#">Thanh toán</a></li>
                                <li><a class="text-white-50" href="#">Thông tin giao hàng</a></li>
                                <li><a class="text-white-50" href="#">Hoàn trả</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">

                            <h6 class="text-uppercase text-white fw-bold mb-2">
                                Hỗ trợ
                            </h6>
                            <ul class="list-unstyled mb-4">
                                <li><a class="text-white-50" href="#">Trung tâm hỗ trợ</a></li>
                                <li><a class="text-white-50" href="#">Tài liệu</a></li>
                                <li><a class="text-white-50" href="#">Tài khoản của tôi</a></li>
                                <li><a class="text-white-50" href="#">Hóa đơn của tôi</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-sm-12 col-lg-3">
                            <h6 class="text-uppercase text-white fw-bold mb-2">Đắc Lợi</h6>
                            <p class="text-white">Hãy đăng ký để nhận những thông báo mới nhất về chúng tôi</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="">
                <div class="container">
                    <div class="d-flex justify-content-between py-4 border-top ">

                        <div>
                            <i class="fab fa-lg fa-cc-visa text-white"></i>
                            <i class="fab fa-lg fa-cc-amex text-white"></i>
                            <i class="fab fa-lg fa-cc-mastercard text-white"></i>
                            <i class="fab fa-lg fa-cc-paypal text-white"></i>
                        </div>

                        <div class="dropdown dropup">
                            <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false"> <i
                                    class="flag-vietnam flag m-0"></i> Vietnamese </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-united-kingdom flag"></i>English <i
                                            class="fa fa-check text-success ms-2"></i></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-poland flag"></i>Polski</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-germany flag"></i>Deutsch</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-france flag"></i>Français</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-spain flag"></i>Español</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-russia flag"></i>Русский</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="flag-portugal flag"></i>Português</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>

</html>
