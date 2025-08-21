@extends('layouts.app')

@section('title', 'New Product')

@section('content')
<h1 class="mb-4">Create Product</h1>
@include('products.form')
@endsection
