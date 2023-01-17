<a href="{{ route('products.show', $product) }}" class="card card-product rounded-3 text-decoration-none text-dark h-100"
    role="button">
    <div class="row g-0 h-100">
        <div class="col-12 col-5">
            <img src="/storage/products/{{ $product->photo }}" width="100%" class="rounded-top">
        </div>
        <div class="col-12">
            <div class="card-body d-flex flex-column h-100">
                <p class="text-truncate-custom">{{ $product->name }}</p>
                <h5 class="mt-auto">
                    Rp{{ number_format($product->price, 0, '.', '.') }}
                </h5>
            </div>
        </div>
    </div>
</a>
