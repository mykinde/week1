<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
@extends('layouts.main')

@section('title', 'Cheap Products')

@section('content')
@include('partials.sidebar')
  <div class="container">
        <h2>Cheap Products (Below $1000)</h2>
        <ul>
            @forelse ($products as $product)
                <li>{{ $product->name }} - ${{ number_format($product->price, 2) }}</li>
            @empty
                <li>No cheap products found.</li>
            @endforelse
        </ul>
    </div>
@endsection
