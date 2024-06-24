<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}">
<!-- --------------------------------------------------------------------------------------------- -->
<section>
    <div class="container mt-5">
        <h2 class=" text-danger ">༺ Sản phẩm mới nhất ༻</h2>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            @foreach ($product_new as $product)
            <div class="col-md-3 mb-4">
                <x-product-card :product="$product" />
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <div className="product-main">

    <h5 className="title ">༺ Sản phẩm mới nhất ༻</h5>

    <div className="row">
        @foreach ($product_new as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</div> --}}
