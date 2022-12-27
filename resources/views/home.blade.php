<x-app title="Barbartos">
    <x-navbar :categories='$categories' :cartCount='$cartCount' />

    <div class="container py-4">
        <section class="mb-4">
            <img src="/storage/assets/ad_website.png" width="100%" class="d-none d-lg-block rounded-3">
            <img src="/storage/assets/ad_mobile.png" width="100%" class="d-lg-none d-block rounded-3">
        </section>

        <section>
            @foreach ($existCategories as $category)
                <div class="mb-3">
                    <h4 class="mb-0 me-1 d-inline">{{ $category->name }}</h4>
                    <a class="text-decoration-none" href="{{ route('categories.show', $category) }}">
                        <small class="fw-bold text-secondary">View All</small>
                    </a>
                </div>

                <div class="slick-carousel mb-5">
                    @foreach ($category->products as $product)
                        <a href="{{ route('products.show', $product) }}"
                            class="card card-product rounded-3 text-decoration-none text-dark h-100" role="button">
                            <div class="row g-0 h-100">
                                <div class="col-12 col-5">
                                    <img src="/storage/products/{{ $product->photo }}" width="100%"
                                        class="rounded-top">
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
                    @endforeach
                </div>
            @endforeach
        </section>
    </div>
</x-app>
