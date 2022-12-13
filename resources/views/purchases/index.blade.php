<x-app title="My Purchases">
    <x-navbar :categories='$categories' :cartCount='$cartCount'></x-navbar>

    <div class="container py-4">
        <h4 class="mb-3">My Purchases</h4>

        <div class="row row-cols-1 g-4">
            @foreach ($purchases as $purchase)
                <div class="col-lg-8">
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
                                                        <img src="/storage/products/{{ $product->photo }}"
                                                            width="100%">
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1 text-truncate-custom">{{ $product->name }}</h6>
                                                        <small class="text-muted">{{ $product->pivot->quantity }} x
                                                            Rp{{ number_format($product->price, 0, '.', '.') }}</small>
                                                    </div>
                                                    <div class="col-md-2 me-auto text-md-end text-start">
                                                        <small>Total Price</small>
                                                        <h6>
                                                            Rp{{ number_format($product->price * $product->pivot->quantity, 0, '.', '.') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="d-flex justify-content-between">
                                <h5>Total Payment</h5>
                                <h5>Rp{{ number_format($totalPrice[$purchase->id], 0, '.', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
