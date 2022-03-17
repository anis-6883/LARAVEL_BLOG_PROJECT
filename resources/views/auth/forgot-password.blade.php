@extends('layouts.auth-app')

@section('title', 'Reset Password')

@section('content')

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                    <div class="card-body pt-5">

                        @if (session()->has('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4 class="text-center">Reset Password</h4>

                        <form method="POST" action="{{ route('password.email') }}" class="mt-5 mb-5 login-input">
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

                            <button type="submit" class="btn login-form__btn submit w-100">Send Password Reset Link</button>
                            <p class="mt-5 login-form__footer">Have an Account? <a href="{{ route('login') }}" class="text-primary">Sign In </a> Now</p>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

    