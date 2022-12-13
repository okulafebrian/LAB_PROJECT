<x-app title="Barbartos">
    <x-navbar :categories='$categories' :cartCount='$cartCount'></x-navbar>

    <div class="container py-4">
        <section class="mb-4">
            <img src="/storage/assets/ad_website.png" width="100%" class="d-none d-lg-block rounded-3">
            <img src="/storage/assets/ad_mobile.png" width="100%" class="d-lg-none d-block rounded-3">
        </section>

        <section>
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-2 mb-3">
                @foreach ($products as $product)
                    <div class="col">
                        <a href="{{ route('products.show', $product) }}"
                            class="card card-product rounded-3 text-decoration-none text-dark h-100" role="button">
                            <div class="row g-0">
                                <div class="col-12 col-5">
                                    <img src="/storage/products/{{ $product->photo }}" width="100%"
                                        class="rounded-top">
                                </div>
                                <div class="col-12">
                                    <div class="card-body">
                                        <p class="mb-2 text-truncate-custom">{{ $product->name }}</p>
                                        <h6>
                                            Rp{{ number_format($product->price, 0, '.', '.') }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</x-app>
