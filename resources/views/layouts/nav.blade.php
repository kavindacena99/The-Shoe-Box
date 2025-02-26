<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">The Shoe Box</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About US</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a href="#" class="btn btn-outline-primary ms-3">Cart <i class="bi bi-cart"></i></a>
            <a href="#" class="btn btn-outline-secondary ms-3">ffv<i class="bi bi-person"></i></a>
        </div>
    </div>
</nav>