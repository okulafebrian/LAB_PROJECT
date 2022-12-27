<x-app title="{{ $product->name }}">
    <x-navbar :categories='$categories' :cartCount='$cartCount' />

    <div class="container py-4">
        <nav class="mb-4"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a
                        href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a></li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>

        <div class="row g-4">
            <div class="col-md-3">
                <img src="/storage/products/{{ $product->photo }}" width="100%" class="rounded-3">
            </div>
            <div class="col">
                <h4 class="mb-3">{{ $product->name }}</h4>
                <div class="alert bg-light text-primary">
                    <h3 class="mb-0">Rp{{ number_format($product->price, 0, '.', '.') }}</h3>
                </div>
                <small>{{ $product->description }}</small>

                @if (auth()->check() && auth()->user()->role == 'CUSTOMER')
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="row">
                                <label for="quantity" class="col-form-label col-lg-3 col-md-4 col-7">Quantity</label>
                                <div class="col-lg-5 col-md-7 col">
                                    <input type="text" class="input-spinner" step="1" id="quantity"
                                        value="1" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md text-md-end text-center">
                            <form method="POST" action="{{ route('purchases.store') }}" class="d-inline">
                                @csrf

                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                <input type="hidden" name="quantity" value="1">

                                <button type="submit" class="btn btn-outline-primary px-4 py-2 rounded-3">Buy</button>
                            </form>

                            <form method="POST" action="{{ route('carts.store') }}" class="d-inline">
                                @csrf

                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">

                                <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">
                                    <i class="bi bi-plus"></i> Cart
                                </button>
                            </form>
                        </div>
                    </div>
                @elseif (!auth()->check())
                    <hr>

                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-circle"></i> Login to your account first to purchase this product.
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app>
