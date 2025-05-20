@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($item->price, 2) }}</p>
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
