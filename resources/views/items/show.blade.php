@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <img src="{{ asset('images/items/' . $item->imagename) }}" class="card-img-top" alt="{{ $item->itemname }}">
        <div class="card-body text-center">
            <h2>{{ $item->itemname }}</h2>
            <p><strong>Price:</strong> ${{ number_format($item->price, 2) }}</p>
            <p>{{ $item->description }}</p>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to Items</a>
            <a href="#" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    </div>
</div>
@endsection
