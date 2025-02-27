@extends('layouts.app')

@section('title','Home')

@section('content')
    @include('layouts.nav')


    <!--
        @if(Auth::check())
        <p>Logged</p>
    @else 
        <p>Not logged</p>
    @endif 
     -->

    <header class="text-white text-center py-5" style="background: url('{{ asset('images/dummy.jpg') }}') no-repeat center center/cover;">
        <h1>Welcome to Shoe Box</h1>
        <p>Your ultimate destination for stylish and comfortable shoes</p>
        <a href="#" class="btn btn-dark mt-3">Shop Now</a>
    </header>
    
    <div class="container my-5">
        <h2 class="text-center">Featured Shoes</h2>
        <div class="row mt-4">
            @foreach($items as $shoe)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/items/'.$shoe->imagename) }}" class="card-img-top" alt="{{ $shoe->itemname }}">
                        <div class="card-body text-center">
                            <a href="{{ route('items.show',$shoe->id) }}" style="text-decoration: none"><h5 class="card-title">{{ $shoe->itemname }}</h5></a>
                            <p class="card-text">${{ $shoe->price }}</p>
                            <form action="{{ route('cart.add',$shoe->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection