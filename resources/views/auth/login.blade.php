
@extends('layouts.app')

@section('title', 'Admin Portal - Login')

@section('content')
<div class="gradient-custom vh-100">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="login-card bg-white p-5">
                    {{-- <img src="img/logo.png" alt="Company Logo" class="brand-logo"> --}}
                    <div class="d-flex align-items-center justify-content-center mb-5">
                        <a href="" class="text-decoration-none">
                            <h1 class="text-primary text-uppercase brand-name">
                                Admin Portal
                            </h1>
                        </a>
                    </div>
                    
                    <!-- Error Message Alert -->
                    <div id="error-alert" class="alert alert-danger d-none" role="alert"></div>
                    
                    <form id="loginForm" action="{{ route('do.login') }}" method="POST">
                        @csrf
                        <!-- Email Input -->
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="username" 
                                   name="username"
                                   required
                                   placeholder="Enter your username">
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" 
                                   class="form-control" 
                                   id="password" 
                                   name="password"
                                   required
                                   placeholder="Enter your password">
                            @error('password')
                                   <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .gradient-custom {
            background: linear-gradient(120deg, #7f7fd5, #86a8e7, #91eae4);
        }
        .login-card {
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }
        .brand-logo {
            width: 180px;
            margin: 0 auto 2rem;
            display: block;
        }
        .brand-name {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        font-family: 'Arial Rounded MT Bold', sans-serif;
        transition: all 0.3s ease;
        }
        
        .brand-name:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }
</style>
@endpush
@endsection