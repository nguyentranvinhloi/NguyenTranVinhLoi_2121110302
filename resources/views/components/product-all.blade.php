<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ProductStyle.css') }}">

<!-- --------------------------------------------------------------------------------------------- -->
<section>
    <div class="container mt-5">
        <h2 class=" text-danger text-center">༺ Tất cả sản phẩm ༻</h2>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            @foreach ($product_all as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
        <div className="col-12 d-flex justify-content-center">
            {{$product_all->links()}}
        </div>
    </div>
</section>
