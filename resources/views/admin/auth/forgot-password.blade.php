@extends('admin.auth.layout')

@section('main_content')

    <!--begin::Forgot Password Form-->
    <form method="GET" action="{{ route('verification') }}" class="form w-100" novalidate="novalidate" id="password_reset_form">
        @csrf
    
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">
                    {{ __('Forgot Password ?') }}
                </h1>
                <!--end::Title-->
    
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">
                    {{ __('Enter your email to reset your password.') }}
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
    
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email/Phone') }}</label>
                <input class="form-control form-control-solid text-dark" type="email" name="email" autocomplete="off" value="{{ old('email') }}" required autofocus/>
            </div>
            <!--end::Input group-->
    
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="submit" id="password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4 login_signup_btn">
                    {{ __('Submit') }}
                </button>
    
                <a href="{{ route('login') }}" class="btn btn-lg btn-light-danger border-danger border btn-primary fw-bolder">{{ __('Cancel') }}</a>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Forgot Password Form-->

@endsection