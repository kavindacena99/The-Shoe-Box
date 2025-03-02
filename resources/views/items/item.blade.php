@extends('layouts.app')


@section('title', $item->itemname)

@section('content')
@include('layouts.nav')
<div class="container mt-5">
    <div class="row">
        <!-- Product Images -->
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <img src="{{ asset('images/items/' . $item->imagename) }}" class="d-block w-100" alt="Product Image">
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2 class="fw-bold">{{ $item->itemname }}</h2>
            <h4 class="text-danger">${{ $item->price }}</h4>
            <p class="mt-3">{{ $item->itemdesc }}</p>

                
            <div class="mt-4">
                <form action="{{ route('cart.add',$item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Add to Cart</button>
                </form>
            </div>
            
        </div>
    </div>

</div>
@endsection

