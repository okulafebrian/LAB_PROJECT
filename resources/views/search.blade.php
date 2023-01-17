<x-app title="Search">
    <x-navbar :categories='$categories' :cartCount='$cartCount' />

    <div class="container py-4">
        @if ($products->count() > 0)
            <div class="mb-3">
                <small>
                    Showing 1 - {{ $products->count() < 10 ? $products->count() : 10 }} items out of
                    {{ $products->count() }} total for
                    "<b>{{ request('search') }}</b>"
                </small>
            </div>

            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-2 mb-3">
                @foreach ($products as $product)
                    <div class="col">
                        <x-card-product :product='$product' />
                    </div>
                @endforeach
            </div>
        @else
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body text-center">
                    <img src="/storage/assets/empty.webp" width="200">
                    <div class="text-muted mb-4">
                        <h4>Oops, Product Not Found</h4>
                        <small>Try another keyword</small>
                    </div>
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</x-app>
