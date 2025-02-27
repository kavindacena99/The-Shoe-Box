@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Items List</h2>
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/items/'.$item->imagename) }}" class="card-img-top" alt="{{ $item->itemname }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->itemname }}</h5>
                        <p class="card-text">${{ $item->price }}</p>
                        <a href="{{ route('items.show', $item->id) }}" class="btn btn-success">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
