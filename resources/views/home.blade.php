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
                        <x-card-product :product='$product' />
                    @endforeach
                </div>
            @endforeach
        </section>
    </div>
</x-app>
