@extends('layouts.auth-app')

@section('title', 'Two Factor Challenge')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <h4 class="text-center">Two Factor Challenge</h4>
                            <p class="text-primary mt-4">✅Please enter your authentication code before login...</p>

                            <form method="POST" action="{{ route('two-factor.login') }}" class="mt-5 mb-5 login-input">
                                @csrf

                                <div class="form-group">
                                    <input 
                                        name="code" 
                                        id="code" 
                                        type="text" 
                                        class="form-control @error('code') {{ "is-invalid" }} @enderror"  
                                        placeholder="Enter QR Code" 
                                        value="{{ old('code') }}"
                                        required
                                        autofocus>

                                    @error('code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            @if (session()->has('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="text-center">Two Factor Recovery Code</h4>
                            <p class="text-primary mt-4">✅Please enter your authentication code before login...</p>

                            <form method="POST" action="{{ route('two-factor.login') }}" class="mt-5 mb-5 login-input">
                                @csrf

                                <div class="form-group">
                                    <input 
                                        name="recovery_code" 
                                        id="recovery_code" 
                                        type="text" 
                                        class="form-control @error('recovery_code') {{ "is-invalid" }} @enderror"  
                                        placeholder="Enter Recovery Code" 
                                        value="{{ old('recovery_code') }}"
                                        required
                                        autofocus>

                                    @error('recovery_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection