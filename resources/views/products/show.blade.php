@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="row">
    <div class="col-md-6">
        @if($product->image_path)
            <img src="{{ Storage::url($product->image_path) }}" class="img-fluid rounded mb-3" alt="{{ $product->name }}">
        @else
            <img src="https://via.placeholder.com/600x400?text=No+Image" class="img-fluid rounded mb-3" alt="No image">
        @endif
    </div>
    <div class="col-md-6">
        <h1>{{ $product->name }}</h1>
        <h4 class="text-success mb-3">${{ number_format($product->price, 2) }}</h4>
        <p>{{ $product->description }}</p>

        @auth
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Delete this product?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        @endauth

        <a href="{{ route('products.index') }}" class="btn btn-link">← Back to list</a>
    </div>
</div>
@endsection
