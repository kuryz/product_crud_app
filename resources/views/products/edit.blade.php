@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<h1 class="mb-4">Edit Product</h1>
@include('products.form', ['product' => $product])
@endsection
