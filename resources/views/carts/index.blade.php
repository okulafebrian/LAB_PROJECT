<x-app title="My Cart">
    <x-navbar :categories='$categories' :cartCount='$cartCount'></x-navbar>

    <div class="container py-4">
        @if ($carts->count() > 0)
            <h4 class="mb-4">My Cart</h4>

            <div class="row">
                <div class="col-lg-8">
                    @foreach ($carts as $cart)
                        <div class="card border-0">
                            <div class="card-body">
                                <input type="hidden" name="product_id[]" value="{{ $cart->product->id }}">
                                <input type="hidden" name="quantity[]" value="{{ $cart->quantity }}">

                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <a href="{{ route('products.show', $cart->product) }}">
                                            <img src="/storage/products/{{ $cart->product->photo }}" width="100%"
                                                class="rounded-3">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <h5>
                                            <a href="{{ route('products.show', $cart->product) }}"
                                                class="text-decoration-none text-dark">
                                                {{ $cart->product->name }}
                                            </a>
                                        </h5>
                                        <span>Rp{{ number_format($cart->product->price, 0, '.', '.') }}</span>

                                        <div class="d-flex align-items-center justify-content-end">
                                            <form method="POST" action="{{ route('carts.destroy', $cart) }}">
                                                @csrf
                                                <input type="hidden" name="_method" value='DELETE'>
                                                <button class="btn btn-trash" type="submit">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>

                                            <div class="mx-3" style="border-left: 2px solid #DEE2E6; height: 1.5rem">
                                            </div>
                                            <span>{{ $cart->quantity }} items</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="border-width: 0.4rem">
                    @endforeach
                </div>
                <div class="col">
                    <div class="card border-0 rounded-3 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Shopping Summary</h5>
                            <div class="d-flex justify-content-between">
                                <span>Total Price ({{ $cart->sum('quantity') }} items)</span>
                                <span>Rp{{ number_format($totalPrice, 0, '.', '.') }}</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between mb-3">
                                <h5>Total Price</h5>
                                <h5>Rp{{ number_format($totalPrice, 0, '.', '.') }}</h5>
                            </div>

                            <form method="POST" action="{{ route('purchases.store') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100 py-2 rounded-3">
                                    Buy ({{ $cart->sum('quantity') }})
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body text-center">
                    <img src="/storage/assets/empty.webp" width="20%">
                    <h4 class="text-muted">Your shopping cart is empty</h4>
                    <p class="text-muted">Let's fill it with your dream items!</p>
                    <a href="{{ route('home') }}" class="btn btn-primary rounded-3 px-4 py-2 mb-4">Start Shopping</a>
                </div>
            </div>
        @endif
    </div>
</x-app>
