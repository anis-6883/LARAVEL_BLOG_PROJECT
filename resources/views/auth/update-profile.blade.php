@extends('layouts.auth-app')

@section('title', 'Update Profile')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <h4 class="text-center">Update Profile</h4>

                            <form method="POST" action="{{ route('user-profile-information.update') }}" class="mt-5 mb-5 login-input">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <input 
                                        name="username" 
                                        id="username" 
                                        type="text" 
                                        class="form-control @error('username') {{ "is-invalid" }} @enderror"  
                                        placeholder="Username"
                                        value="{{ old('username') ?? auth()->user()->username }}"
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
                                        value="{{ old('email') ?? auth()->user()->email }}"
                                        required>

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>

                                <button type="submit" class="btn login-form__btn submit w-100">Update Profile</button>
                                <p class="mt-5 login-form__footer">Go to Home? <a href="{{ url('/') }}" class="text-primary">Click </a> Here</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection