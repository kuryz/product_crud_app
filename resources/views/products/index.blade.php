@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1 class="mb-4">Products</h1>

@if($products->count())
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($product->image_path)
                        <img src="{{ Storage::url($product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <img src="https://via.placeholder.com/400x250?text=No+Image" class="card-img-top" alt="No image">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary mt-auto">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>{{ $products->links('pagination::bootstrap-5') }}</div>
@else
    <p>No products found.</p>
@endif
@endsection
