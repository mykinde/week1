<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
@extends('layouts.main')

@section('title', 'All Products')

@section('content')
@include('partials.sidebar')
    <h1>Product List</h1>

    <ul>
    @foreach($products as $product)
        <li>
            <strong>{{ $product->name }}</strong> – ${{ $product->price }}
        </li>
    @endforeach
    </ul>
@endsection
