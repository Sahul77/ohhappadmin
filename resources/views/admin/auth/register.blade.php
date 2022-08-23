@extends('admin.auth.layout')

@section('main_content')
    <!--begin::Signup Form-->
    <form method="GET" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Create an Account') }}
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">
                {{ __('Already have an account?') }}

                <a href="{{ route('login') }}" class="link-primary fw-bolder">
                    {{ __('Sign in here') }}
                </a>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="row fv-row mb-7">
            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">{{ __('First Name') }} <span
                        class="text-danger">*</span></label>
                <input class="form-control form-control-solid text-dark" type="text" name="first_name" autocomplete="off"
                    value="{{ old('first_name') }}" />
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">{{ __('Last Name') }} <span
                        class="text-danger">*</span></label>
                <input class="form-control form-control-solid text-dark" type="text" name="last_name" autocomplete="off"
                    value="{{ old('last_name') }}" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Country') }} <span
                    class="text-danger">*</span></label>
            <select class="form-select form-select-solid" aria-label="Select example">
                <option disabled>Select Country</option>
                <option value="101" selected>India</option>
                <option value="105">USA</option>
                <option value="106">New Zealand</option>
            </select>
        </div>
        <!--end::Input group-->

        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Phone') }} <span
                    class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <span class="input-group-text border-0 bg-secondary text-dark" id="basic-phoneNumber">+91</span>
                <input type="text" class="form-control form-control-solid text-dark" aria-label="phone"
                    aria-describedby="basic-phoneNumber" value="{{ old('phone') }}">
            </div>
        </div>

        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Username') }} <span
                    class="text-danger">*</span></label>
            <input class="form-control form-control-solid text-dark" type="text" name="username" autocomplete="off"
                value="{{ old('username') }}" />
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Email') }} <span
                    class="text-danger">*</span></label>
            <input class="form-control form-control-solid text-dark" type="email" name="email" autocomplete="off"
                value="{{ old('email') }}" />
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">
                    {{ __('Password') }} <span class="text-danger">*</span>
                </label>
                <!--end::Label-->

                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control form-control-solid text-dark" type="password" name="password"
                        autocomplete="new-password" />

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->

                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3">
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
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Confirm Password') }} <span
                    class="text-danger">*</span></label>
            <input class="form-control form-control-solid text-dark" type="password" name="password_confirmation"
                autocomplete="off" />
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">
                    {{ __('I Agree with') }} <a href="#"
                        class="ms-1 link-primary">{{ __('Terms and conditions') }}</a>.
                </span>
            </label>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="text-center">
            <button type="submit" id="sign_up_submit" class="login_signup_btn btn btn-lg btn-primary">
                {{ __('Continue') }}
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Signup Form-->
@endsection
