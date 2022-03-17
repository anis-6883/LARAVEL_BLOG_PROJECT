@extends('layouts.auth-app')

@section('title', 'User Registration')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <h4 class="text-center">User Registration</h4>

                            <form method="POST" action="{{ route('register') }}" class="mt-5 mb-5 login-input">
                                @csrf

                                <div class="form-group">
                                    <input 
                                        name="username" 
                                        id="username" 
                                        type="text" 
                                        class="form-control @error('username') {{ "is-invalid" }} @enderror"  
                                        placeholder="Username"
                                        value="{{ old('username') }}"
                                        required>

                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>

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

                                <div class="form-group">
                                    <input 
                                        name="password_confirmation" 
                                        id="password" 
                                        type="password" 
                                        class="form-control @error('password_confirmation') {{ "is-invalid" }} @enderror"  
                                        placeholder="Password Confirm" 
                                        required>

                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>

                                <button type="submit" class="btn login-form__btn submit w-100">Sign Up</button>
                            </form>

                            <p class="mt-5 login-form__footer">Have an Account? <a href="{{ route('login') }}" class="text-primary">Sign In </a> Now</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection