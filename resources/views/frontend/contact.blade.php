@extends('layouts.site')
@section('title','Liên hệ')
@section('header')
<link rel="stylesheet" href="Contact.css">
@endsection

@section('content')

<section class="Contact">
    <div class="container py-2 ">
        <div class="row contact-gt">
            <h3>Thông tin cửa hàng</h3>
        </div>
        <div class="">
            <ul class="info">
                <li>
                    <Link>
                    <FaSearchLocation />
                    </Link> Địa chỉ: 22A đường số 147, kp3, Phước Long B, TP Thủ Đức
                </li>
                <li>
                    <Link>
                    <FaPhoneSquareAlt />
                    </Link> SĐT: 0932293748
                </li>
                {{-- <li>
                    <Link>
                    <FaPhoneSquareAlt />
                    </Link> Hotline: ...................................................
                </li> --}}
                <li>
                    <Link>
                    <FaVoicemail />
                    </Link> Email: Nguyentranvinhloi12@gmail.com
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.751695074883!2d106.
                    77240387422333!3d10.8303045581993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                    1!3m3!1m2!1s0x31752701a34a5d5f%3A0x30056b2fdf668565!
                    2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIFRoxrDGoW5nIFRQLkhDTQ!5e0!3m2!1svi!2s!
                    4v1687771783691!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-6 ">
                <form class="form text-danger" onSubmit={ContactSave} method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i>Họ Tên Khách Hàng</i></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nhập họ tên" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i>Số Điện Thoại</i></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nhập sđt" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i>Email</i></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nhập email" />
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><i>Chủ đề</i></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nhập chủ đề" />
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><i>Nội dung</i></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Gửi</button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
