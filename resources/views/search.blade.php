<x-app title="Search">
    <x-navbar :categories='$categories' :cartCount='$cartCount'></x-navbar>

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
                        <a href="{{ route('products.show', $product) }}"
                            class="card card-product rounded-3 text-decoration-none text-dark h-100" role="button">
                            <div class="row g-0">
                                <div class="col-12 col-5">
                                    <img src="/storage/products/{{ $product->photo }}" width="100%"
                                        class="rounded-top">
                                </div>
                                <div class="col-12">
                                    <div class="card-body">
                                        <p class="mb-2">{{ $product->name }}</p>
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
        @else
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body text-center">
                    <img src="/storage/assets/empty.webp" width="20%">
                    <div class="text-muted mb-4">
                        <h4>Oops, Product Not Found</h4>
                        <small>Try another keyword</small>
                    </div>
                </div>
            </div>
        @endif

    </div>
</x-app>
