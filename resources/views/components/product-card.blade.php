<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>


<div class="card">
    <a href="{{ route('site.product.detail', ['slug' => $product->slug]) }}">
        <img src="{{ asset('assets/sp.jpg') }}" height="300px" width="259px" alt="Denim Jeans">
    </a>
    <a class="nav-link" href="{{ route('site.product.detail', ['slug' => $product->slug]) }}">
        <h4 class="">{{ $product->name }}</h4>
    </a>
    <div class="price_sale">
        <div class="row">
            @if ($product->pricesale > 0 && $product->pricesale < $product->price)
                <div class="col-9 text-danger">
                    {{ number_format($product->pricesale) }}<del>{{ number_format($product->price) }}<sup>vnđ</sup></del>
                </div>
            @else
                <div class="col-12 text-danger">{{ number_format($product->price) }}<sup>vnđ</sup></div>
            @endif
        </div>
    </div>

    <p>{{ $product->detail }}</p>
    {{-- <p><button>Thêm vào giỏ hàng</button></p> --}}
</div>

{{-- <div class="showcase">
    <div class="showcase-banner">
        <Link to="">
            <img src="{{ asset('assets/sp.jpg') }}" className="product-img default" alt={props.product.image} />
           
        </Link>
        <div class="showcase-actions">
            <Link to="">
                <button class="btn-action">
                    <i class="fa fa-eye"></i>
                </button>
            </Link>
            <Link to="">
                <button class="btn-action" >
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </Link>
        </div>
    </div>
    <div class="showcase-content">
        <Link className="nav-link" to="">
            <h3 class="showcase-title">{{$product->name}}</h3>
        </Link>
        <div class="price-box">
            <strong className="text-danger fs-6">00.000vnđ</strong>
        </div>
    </div>
</div> --}}

{{-- <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
                <div class="d-flex justify-content-start align-items-start h-100 m-2">
                    <h6><span class="badge bg-danger pt-1">New</span></h6>
                </div>
            </div>
            <img src="{{ asset('assets/sp.jpg') }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                    <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                            class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
