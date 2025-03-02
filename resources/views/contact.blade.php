@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
@include('layouts.nav')
<div class="container mt-5">
    <h2 class="text-center fw-bold" style="color:#B22222">Contact Us</h2>
    <p class="text-center text-muted">We’d love to hear from you! Reach out to us for any inquiries.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4 style="color:#B22222">Our Store</h4>
            <p><i class="bi bi-geo-alt-fill"></i> 123 Main Street, Colombo, Sri Lanka</p>
            <p><i class="bi bi-telephone-fill"></i> +94 77 123 4567</p>
            <p><i class="bi bi-envelope-fill"></i> contact@theshoebox.com</p>
        </div>

        <div class="col-md-6">
            <h4 style="color:#B22222">Send Us a Message</h4>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection
