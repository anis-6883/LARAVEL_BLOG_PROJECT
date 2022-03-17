@extends('layouts.auth-app')

@section('title', 'Verify Email Address')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                @if (session('status') == 'verification-link-sent')
                                    <div class="alert alert-success" role="alert">
                                        A fresh verification link has been sent to your email address.
                                    </div>
                                @endif

                                <h4 class="text-center">Verify Your Email Address</h4>
                                <p class="text-primary mt-4">✅Before Proceeding, Please Check your Email for a Verification Link...</p>
                                <p class="text-primary mt-4">✅If you did not receive the email...</p>

                                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn login-form__btn submit w-100">Click Here for Resend Request!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection