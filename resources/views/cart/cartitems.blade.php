@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Cart</h2>

    @if($cartItems->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <p>Items in Cart: {{ $cartItems->count() }}</p> <!-- Debug -->
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{ optional($cartItem->item)->itemname ?? 'Item not found' }}</td>
                    <td>${{ optional($cartItem->item)->price ?? 0 }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
