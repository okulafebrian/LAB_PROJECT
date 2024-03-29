<x-app title="{{ $category->name }}">
    <x-navbar :categories='$categories' :cartCount='$cartCount' />

    <div class="container py-4">
        <nav class="mb-4"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $category->name }}</li>
            </ol>
        </nav>

        <h4 class="mb-3">{{ $category->name }}</h4>

        @if ($products->count() > 0)
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 gx-2 gy-3 mb-3">
                @foreach ($products as $product)
                    <div class="col">
                        <x-card-product :product='$product' />
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        @else
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body text-center">
                    <img src="/storage/assets/empty.webp" width="200">
                    <h4 class="text-muted mb-4">No Available Product</h4>
                </div>
            </div>
        @endif
    </div>
</x-app>
