<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid red">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: #B22222">The Shoe Box</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: #B22222" href="{{ route('categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #B22222" href="{{ route('contact') }}">Contact US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #B22222" href="{{ route('about') }}">About US</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a href="{{ route('cart.show') }}" class="btn btn-outline-danger ms-3">My Cart<i class="bi bi-cart"></i></a>
            <a 
                @if(Auth::check())
                    href="{{ route('profile') }}" class="btn btn-dark ms-3">
                    My Profile
                @else 
                    href="{{ route('login') }}" class="btn btn-dark ms-3">
                    Login
                @endif
            <i class="bi bi-person"></i></a> 
        </div>
    </div>
</nav>