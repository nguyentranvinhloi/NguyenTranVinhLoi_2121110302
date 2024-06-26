<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<section class="mt-5 mb-4 text-center">
    <div class="container text-dark">
      <header class="mb-4">
        <h3 class=" text-danger ">༺ Sản phẩm mới nhất ༻</h3>
      </header>
      @foreach ($post_new as $post)
      <div class="container mt-3">
        <div class="card img-fluid" style="width:300px">
          <img class="" src="{{ asset('assets/sp.jpg') }}" alt="Card image" width="300px" height="300px">
          <div class="card-img-overlay">
            <h4 class="text-white card-title">{{$post->title}}</h4>
            <p class="text-white card-text">{{$post->description}}</p>
            <a href="#" class="btn btn-primary">Xem chi tiết</a>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="row">
        @foreach ($post_new as $post)
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="./img/sanpham.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                12.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">{{$post->title}}</h6>
              </a>
              <p>Mô tả ngắn về bài viết </p>
              <p>{{$post->description}}</p>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div> --}}

  </section>
  