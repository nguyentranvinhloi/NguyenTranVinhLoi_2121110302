@extends('layouts.site')
@section('title', 'Chi tiết bài viết')
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
                                {{ $post->title }} <br />
                            </h4>

                            <p>
                                {{ $post->description }}
                            </p>
                            <hr />
                    </main>
                </div>
            </div>

        </section>
        {{-- --------------------------------------------------------------------------------------------------------------------------------- --}}
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
                                        {{ $post->detail }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- --------------------------------------------------------------------------------------------------------------------------------- --}}
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
                        @foreach ($post_topic as $post)
                            <div class="col-md-3 mb-4">
                                <x-post-card :post="$post" />
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
