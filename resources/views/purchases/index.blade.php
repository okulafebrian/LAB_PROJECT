<x-app title="My Purchases">
    <x-navbar :categories='$categories' :cartCount='$cartCount' />

    <div class="container py-4">
        <h4 class="mb-3">History</h4>

        <div class="row row-cols-1 g-4">
            @forelse ($purchases as $purchase)
                <div class="col-lg-9">
                    <div class="card border-0 rounded-3 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3">
                                <i class="bi bi-bag-check-fill"></i>
                                {{ date('j M Y', strtotime($purchase->created_at)) }}
                            </div>

                            <div class="row row-cols-1 g-2 mb-3">
                                @foreach ($purchase->products as $product)
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-3">
                                                    <div class="col-md-1 col-3">
                                                        <a href="{{ route('products.show', $product) }}"
                                                            target="_blank">
                                                            <img src="/storage/products/{{ $product->photo }}"
                                                                class="rounded-1" width="100%">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('products.show', $product) }}" target="_blank"
                                                            class="text-decoration-none text-dark">
                                                            <h6 class="mb-1 text-truncate-custom">
                                                                {{ $product->name }}
                                                            </h6>
                                                        </a>
                                                        <small class="text-muted">{{ $product->pivot->quantity }} x
                                                            Rp{{ number_format($product->price, 0, '.', '.') }}</small>
                                                    </div>
                                                    <div class="col-md-2 me-auto text-md-end text-start">
                                                        <small>Total Price</small>
                                                        <h6 class="text-muted">
                                                            Rp{{ number_format($product->price * $product->pivot->quantity, 0, '.', '.') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Total Payment <br class="d-block d-md-none">
                                    ({{ $purchase->products->sum('pivot.quantity') }} items)
                                </h5>
                                <h5>Rp{{ number_format($purchase->total_price, 0, '.', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card border-0 bg-light rounded-4">
                    <div class="card-body text-center">
                        <img src="/storage/assets/empty.webp" width="200">
                        <h4 class="text-muted">You have no transactions here yet</h4>
                        <p class="text-muted">Let's buy your dream items!</p>
                        <a href="{{ route('home') }}" class="btn btn-primary rounded-3 px-4 py-2 mb-4">Start
                            Shopping</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app>
