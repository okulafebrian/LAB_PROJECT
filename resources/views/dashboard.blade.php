<x-app title="Admin Dashboard">
    <x-navbar-admin></x-navbar-admin>

    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h4 class="mb-0">Manage Product</h4>
            <a href="{{ route('products.create') }}" class="btn btn-outline-primary rounded-3 px-4">
                Add Product
            </a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <form role="search" action="{{ route('search.admin') }}">
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search product" name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" name="category">
                                <option value="0" selected>All Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>

                @if ($products->count() > 0)
                    <hr class="mb-0 opacity-100" style="border-color: #DEE2E6">

                    <table class="table">
                        <thead>
                            <tr class="text-secondary">
                                <th class="col-8">Product Info</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="py-3">
                                        <a href="{{ route('products.show', $product) }}" target="_blank"
                                            class="text-decoration-none text-dark">
                                            <div class="row g-3">
                                                <div class="col-md-2 col-6">
                                                    <img src="/storage/products/{{ $product->photo }}" width="100%"
                                                        class="rounded-3">
                                                </div>
                                                <div class="col-md col-12">
                                                    <h6>{{ $product->name }}</h6>
                                                    <span>{{ $product->category->name }}</span>
                                                </div>

                                            </div>
                                        </a>
                                    </td>
                                    <td class="align-middle">Rp{{ number_format($product->price, 0, '.', '.') }}</td>
                                    <td class="text-end align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-light btn-sm" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>

                                            <ul
                                                class="dropdown-menu dropdown-menu-lg-end p-1 border-0 shadow-sm rounded-3">
                                                <li>
                                                    <a class="dropdown-item p-2 rounded-3"
                                                        href="{{ route('products.edit', $product) }}">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <button type="button" class="dropdown-item p-2 rounded-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $product->id }}">
                                                        <i class="bi bi-trash3"></i> Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <div id="delete{{ $product->id }}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" style="max-width: 28rem">
                                        <div class="modal-content border-0 shadow py-3">
                                            <div class="modal-header border-0">
                                                <h5 class="fw-semibold m-auto ">Delete Product</h5>
                                            </div>
                                            <div class="modal-body py-0 text-center">
                                                <p>Are you sure want to delete {{ $product->name }}?</p>
                                            </div>
                                            <div class="modal-footer m-auto border-0">
                                                <button type="button" class="btn btn-outline-light py-2 px-5"
                                                    data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <form method="POST"
                                                    action="{{ route('products.destroy', $product) }}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value='DELETE'>
                                                    <button type="submit"
                                                        class="btn btn-primary py-2 px-5">Continue</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                @elseif(request('search') || request('category'))
                    <div class="card border-0 bg-light rounded-4 mt-4">
                        <div class="card-body text-center">
                            <img src="/storage/assets/empty.webp" width="200">
                            <div class="text-muted mb-4">
                                <h4>Oops, Product Not Found</h4>
                                <small>Try another keyword</small>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body text-center">
                            <img src="/storage/assets/empty.webp" width="200">
                            <h4 class="text-muted mb-4">No Available Product</h4>
                        </div>
                    </div>
                @endif

                <div class="d-flex justify-content-end">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $('select[name="category"]').on('change', function() {
            this.form.submit()
        })
    </script>
</x-app>
