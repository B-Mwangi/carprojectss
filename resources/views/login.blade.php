@extends('layout')
@section('title', 'login')
@section('content')
<div class="container d-flex justify-content-center align-items-center"
     style="min-height: 100vh; background: url('backgroundone.jpg') no-repeat center center/cover;">
    <div class="card p-4 shadow" style="width: 400px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.9);">
        <h3 class="text-center mb-4">Login</h3>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>


@endsection
