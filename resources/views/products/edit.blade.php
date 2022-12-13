<x-app title="Edit Product">
    <x-navbar-admin></x-navbar-admin>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4 class="mb-3">Edit Product</h4>

                <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card border-0 shadow-sm rounded-3 mb-3">
                        <div class="card-body p-4">
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $product->name }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="category_id" class="col-sm-3 col-form-label">Category</label>
                                <div class="col">
                                    <select class="form-select" name="category_id" id="category_id" required>
                                        <option selected disabled>Choose a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col">
                                    <textarea name="description" id="description" name="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-sm-3 col-form-label">Price</label>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" id="price" name="price"
                                            value="{{ $product->price }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col">
                                    <input class="form-control" type="file" id="photo" name="photo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-3 px-5">Cancel</a>
                        @method('PUT')
                        <button type="submit" class="btn btn-primary rounded-3 px-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
