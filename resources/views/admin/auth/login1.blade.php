@extends('admin.auth.layout')

@section('main_content')

    <!--begin::Signin Form-->
    <form method="GET" action="{{ route('index') }}" class="form w-100" novalidate="novalidate" id="sign_in_form">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Sign In to Admin Panel') }}
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            {{-- <div class="text-gray-400 fw-bold fs-4">
                {{ __('New Here?') }}

                <a href="{{ route('register') }}" class="link-primary fw-bolder">
                    {{ __('Create an Account') }}
                </a>
            </div> --}}
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        {{-- <div class="mb-10 bg-light-info p-8 rounded"><div class="text-info"> Use account <strong>admin@demo.com</strong> and password <strong>demo</strong> to continue. </div></div> --}}

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid border-dark text-dark" type="email" name="email" autocomplete="off"
                value="{{ old('email', 'admin@gmail.com') }}" required autofocus />
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</label>
                <!--end::Label-->

                <!--begin::Link-->
                @if (Route::has('forgot-password'))
                    <a href="{{ route('forgot-password') }}" class="link-primary fs-6 fw-bolder">
                        {{ __('Forgot Password ?') }}
                    </a>
                @endif
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid border-dark text-dark" type="password" name="password"
                autocomplete="off" value="demo" required />
            <!--end::Input-->
            
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" name="remember" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">{{ __('Remember me') }}
                </span>
            </label>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="sign_in_submit" class="login_signup_btn btn btn-lg rounded-pill w-100 mb-5">{{ __('Continue') }}
            </button>
            <!--end::Submit button-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Signin Form-->

@endsection
