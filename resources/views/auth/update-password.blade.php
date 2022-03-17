@extends('layouts.auth-app')

@section('title', 'Change Password')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            @if (session('status') == 'password-updated')
                                <div class="alert alert-success">
                                    Password updated successfully...
                                </div>
                            @endif

                            <h4 class="text-center">Change Password</h4>

                            <form method="POST" action="{{ route('user-password.update') }}" class="mt-5 mb-5 login-input">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <input 
                                        name="current_password" 
                                        id="current_password" 
                                        type="password" 
                                        class="form-control @error('current_password', 'updatePassword') {{ "is-invalid" }} @enderror"  
                                        placeholder="Enter Current Password" 
                                        required
                                        autofocus>

                                    @error('current_password', 'updatePassword')
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
                                        class="form-control @error('password', 'updatePassword') {{ "is-invalid" }} @enderror"  
                                        placeholder="New Password" 
                                        required>

                                    @error('password', 'updatePassword')
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
                                        placeholder="New Password Confirm" 
                                        required>

                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>

                                <button type="submit" class="btn login-form__btn submit w-100">Change Password</button>
                                <p class="mt-5 login-form__footer">Go to Home? <a href="{{ url('/') }}" class="text-primary">Click </a> Here</p>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection