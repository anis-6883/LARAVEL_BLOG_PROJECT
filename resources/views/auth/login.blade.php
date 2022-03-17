@extends('layouts.auth-app')

@section('title', 'User Login')

@section('content')

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                    <div class="card-body pt-5">

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h4 class="text-center">User Login</h4>

                        <form method="POST" action="{{ route('login') }}" class="mt-5 mb-5 login-input">
                            @csrf

                            <div class="form-group">
                                <input 
                                    name="email" 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') {{ "is-invalid" }} @enderror"  
                                    placeholder="Email" 
                                    value="{{ old('email') }}"
                                    required>

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
                            </div>

                            <div class="form-group">
                                <input 
                                    name="password" 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') {{ "is-invalid" }} @enderror"  
                                    placeholder="Password" 
                                    required>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
                            </div>

                            <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                        </form>

                        <p class="mt-5 login-form__footer">Need an Account? <a href="{{ route('register') }}" class="text-primary">Sign Up </a> Now</p>
                        @if (Route::has('password.request'))
                        <p class="mt-1 login-form__footer">Reset Your Password? <a href="{{ route('password.request') }}" class="text-primary">Click </a> Here</p>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
    
