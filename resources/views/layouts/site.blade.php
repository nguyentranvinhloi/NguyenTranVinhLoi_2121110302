<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <title>@yield('title')</title>
</head>
<!-- --------------------------------------------------------------------------------------------- -->

<body>
    <div class=" mt-3">
        <div class="row ">
            <div class="col-md-3 text-center mt-2 mb-2">
                <a href="./index.html" className="">
                    <img src="{{ asset('assets/logo.png') }}" width="150" height="35" />
                </a>
            </div>
            {{-- <div class="col-md-8">
                   
                        <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"
                            target="_blank"> <i class="fa-user"></i>

                        </a>
                        <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"
                            target="_blank"> <i class="fas fa-heart m-1 me-md-2"></i>
                        </a>
                        <a href="#" class="border rounded py-1 px-3 nav-link d-flex align-items-center"
                            target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                        </a>
                  
                </div> --}}
        </div>
    </div>
    <div className="mt-3">
        <x-main-menu />
    </div>


    <!---------------------------------------------------------------------------------------------------------->



    @yield('content')



    <!---------------------------------------------------------------------------------------------------------->
    <footer class="text-center bg-dark mt-5">
        <section class="">
            <div class="container text-center text-md-start pt-4 pb-4">
                <div class="row mt-3">
                    <div class="col-12 col-lg-3 col-sm-12 mb-2 mt-5">
                        <a href="" target="_blank" class="text-white h2 center">
                            <img src="{{asset('images/bocongthuong.jpg')}}" width="150" />
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
                        <h6 class="text-uppercase text-white fw-bold mb-2">DACLOI</h6>
                        {{-- <p class="text-white">Hãy đăng ký để nhận những thông báo mới nhất về chúng tôi</p> --}}
                    </div>
                </div>
            </div>
        </section>


        <div class="">
            <div class="container">
                <div class=" justify-content-between py-4 border-top text-center">
                    <div class="mt-1 ">
                        <h6 class="text-white-50 ">༺Thiết kế bởi: Nguyễn Trần Vĩnh Lợi -- Mã sinh viên: 2121110302༻</h6>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    {{-- <section className=" bg-secondary mt-2">
        <div className="row container-fluid text-white">
            <div className="col-md-4 mt-5">
                <h6>༺TRẦM HƯƠNG ĐẮC LỢI༻</h6>
                <p>
                    ✈ 40/2 đường 147, Phường Phước Long B, Thành Phố Thủ Đức, TPHCM
                </p>
                <p>☎ 0932293748</p>
                <p>✉ Nguyentranvinhloi12@gmail.com</p>
            </div>
            <div className="col-md-1"></div>
            {/* <div className="col-md-2 mt-1">
                <h6>༺Liên kết༻</h6>
                <Link className="nav-link text-white" to="/gioi-thieu">Giới thiệu</Link>
                <Link className="nav-link text-white" to="/danh-muc-san-pham/vong-tay-nam">Vòng tay nam</Link>
                <Link className="nav-link text-white" to="/danh-muc-san-pham/tra-cu">Vòng tay nữ</Link>
                <Link className="nav-link text-white" to="/danh-muc-san-pham/tra-hop-thiec">Trà hộp thiếc</Link>
                <Link className="nav-link text-white" to="/lien-he">Liên hệ</Link>
            </div> */}
            <div className="col-md-4 mt-5">
                <h6>༺Chính sách༻</h6>
                <Link className="nav-link text-white" to="/chinh-sach-mua-hang">Chính sách mua hàng</Link>
                <Link className="nav-link text-white" to="/chinh-sach-bao-hanh">Chính sách bảo hành</Link>
                <Link className="nav-link text-white" to="/chinh-sach-van-chuyen">Chính sách vận chuyển</Link>
                <Link className="nav-link text-white" to="/chinh-sach-doi-tra">Chính sách đổi trả</Link>
            </div>
            <div className="col-md-3 mt-5">

                <img src="{{ asset('assets/bocongthuong.jpg') }}" width="200px" height="20px" className="img-fluiddd "
                    alt="hinh" />
            </div>
        </div>

        <div className="container-fluid text-error text-center p-3">
            ༺Thiết kế bởi: Nguyễn Trần Vĩnh Lợi -- Mã sinh viên: 2121110302༻
        </div>
    </section> --}}


</body>

</html>
