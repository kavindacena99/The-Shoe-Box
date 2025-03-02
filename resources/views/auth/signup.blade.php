@extends('layouts.app')

@section('title','Sign Up')

<div class="container">
    <div class="row">
        <div class="col-md-5" style="padding-top:15%">
            <h1 class="text-center" style="color:#B22222">The Shoe Box</h1>
            <h3 class="text-center">Sign Up</h3><p class="text-center">If you have an account&nbsp;<a style="text-decoration: none;color:#B22222" href="{{ route('login') }}">Login</a></p>
        </div>
        <div class="col-md-7" style="padding:10%">
            <form action="{{ route('createuser') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" id="name" placeholder="Enter first name" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="name" placeholder="Enter last name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Sign Up</button>
            </form>
        </div>
    </div>
</div>