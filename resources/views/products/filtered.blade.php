<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
@extends('layouts.main')

@section('title', 'Filtered Products')

@section('content')
@include('partials.sidebar')
<div class="container">
        <h2>Filtered Products (Price > $500 & Name contains "Pro")</h2>
        <ul>
            @forelse ($products as $product)
                <li>{{ $product->name }} - ${{ number_format($product->price, 2) }}</li>
            @empty
                <li>No matching products found.</li>
            @endforelse
        </ul>
    </div>
@endsection
