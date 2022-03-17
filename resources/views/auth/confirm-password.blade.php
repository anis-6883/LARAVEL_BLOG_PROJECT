@extends('layouts.auth-app')

@section('title', 'Confirm Password')

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

                        <h4 class="text-center">Confirm Password</h4>
                        <p class="text-primary mt-4">✅Please confirm your password before continuing...</p>

                        <form method="POST" action="{{ route('password.confirm') }}" class="mt-5 mb-5 login-input">
                            @csrf

                            <div class="form-group">
                                <input 
                                    name="password" 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') {{ "is-invalid" }} @enderror"  
                                    placeholder="Enter Confirm Password" 
                                    value="{{ old('password') }}"
                                    required
                                    autofocus>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
                            </div>
                            <button type="submit" class="btn login-form__btn submit w-100">Confirm Password</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

