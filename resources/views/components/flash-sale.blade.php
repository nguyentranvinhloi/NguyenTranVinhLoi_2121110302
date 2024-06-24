<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}">
<!-- --------------------------------------------------------------------------------------------- -->
<section>
    <div class="container mt-5">
        <h2 class="text-danger ">༺ Sản phẩm khuyến mãi ༻</h2>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            @foreach ($product_sale as $product)
            <div class="col-md-3 mb-4">
                <x-product-card :product="$product" />
            </div>
            @endforeach
        </div>
    </div>
</section>
