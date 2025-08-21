@props(['product' => null])

<form method="POST" enctype="multipart/form-data"
      action="{{ $product ? route('products.update', $product) : route('products.store') }}">
    @csrf
    @if($product) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $product->name ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" step="0.01" min="0"
               value="{{ old('price', $product->price ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
        @if($product && $product->image_path)
            <img src="{{ Storage::url($product->image_path) }}" class="img-thumbnail mt-2" width="150">
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" rows="4" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">{{ $product ? 'Update' : 'Create' }}</button>
    <a href="{{ route('products.index') }}" class="btn btn-link">Cancel</a>
</form>
