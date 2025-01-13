@extends('layout')
@section('title', 'registration')
@section('content')
<link href="/public/css/main.css" rel="stylesheet">
<div class="container d-flex justify-content-center align-items-center"
     style="min-height: 100vh; background: url('backgroundone.jpg')">
    <div class="card p-4 shadow" style="width: 400px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.9);">
        <h3 class="text-center mb-4">Register</h3>
        <form action="{{ route('registration.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Create a password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>



@endsection
