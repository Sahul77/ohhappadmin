@extends('admin.auth.layout')

@section('main_content')

    <!--begin::Reset Password Form-->
    <form method="GET" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="">

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Set Your New Password') }}
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">
                {{ __('Setup Your New Password for Admin Panel') }}
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
            <input class="form-control form-control-solid bg-secondary" type="email" name="email" autocomplete="off"
                value="{{ old('email', 'admin@gmail.com') }}" disabled />
        </div>
        <!--end::Input group-->

        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Phone') }}</label>
            <div class="input-group mb-3">
                <span class="input-group-text border-0 bg-secondary text-dark" id="basic-phoneNumber">+91</span>
                <input type="text" class="form-control form-control-solid bg-secondary text-dark" aria-label="phone"
                    aria-describedby="basic-phoneNumber" value="{{ old('phone', '8287110840') }}" disabled>
            </div>
        </div>

        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">
                    {{ __('Password') }}
                </label>
                <!--end::Label-->

                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                        autocomplete="new-password" />

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->

                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Hint-->
            <div class="text-muted">
                {{ __('Use 8 or more characters with a mix of letters, numbers & symbols.') }}
            </div>
            <!--end::Hint-->
        </div>
        <!--end::Input group--->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Confirm Password') }}</label>
            <input class="form-control form-control-solid" type="password" name="password_confirmation" autocomplete="off"
                required />
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="" class="btn btn-lg btn-primary fw-bolder me-4 login_signup_btn">
                {{ __('Continue') }}
            </button>

            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">{{ __('Cancel') }}</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Reset Password Form-->

@section('scripts')
    <script src="{{ asset('admin/js/custom/authentication/password-reset/new-password.js') }}" type="application/javascript">
    </script>
@endsection

@endsection
