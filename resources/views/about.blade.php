@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@include('layouts.nav')
<div class="container mt-5">
    <h2 class="text-center fw-bold" style="color: #B22222">About The Shoe Box</h2>
    <p class="text-center text-muted">Your one-stop destination for stylish and quality footwear.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset('images/dummy.jpg') }}" class="img-fluid rounded shadow" alt="About Us">
        </div>
        <div class="col-md-6">
            <p>At <strong style="color: #B22222">The Shoe Box</strong>, we are dedicated to bringing you the latest trends in footwear. We offer a wide range of stylish and comfortable shoes for every occasion.</p>
            <p>Our mission is to provide high-quality, affordable shoes that suit everyone's needs. Whether you're looking for casual sneakers, formal shoes, or sports footwear, we've got you covered!</p>
            <p><strong style="color: #B22222">Why choose us?</strong></p>
            <ul>
                <li>High-quality materials</li>
                <li>Affordable prices</li>
                <li>Fast delivery</li>
                <li>Excellent customer service</li>
            </ul>
        </div>
    </div>
</div>
@endsection
