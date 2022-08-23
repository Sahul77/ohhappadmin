@extends('admin.auth.layout')

@section('main_content')
    <form method="GET" action="{{ route('reset-password') }}" class="form w-100 mb-10" novalidate="novalidate" id="">
        @csrf
        <!--begin::Icon-->
        <div class="text-center mb-10">
            <img alt="Logo" class="mh-125px" src="{{ asset('admin/media/svg/misc/smartphone.svg') }}" />
        </div>
        <!--end::Icon-->
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">{{ __('OTP Verification') }}</h1>
            <!--end::Title-->
            <!--begin::Sub-title-->
            <div class="text-muted fw-bold fs-5 mb-5">{{ __('Enter the verification code we sent to') }}</div>
            <!--end::Sub-title-->
            <!--begin::Mobile no-->
            <div class="fw-bolder text-dark fs-6">+91-87****5876 <span class="text-muted">|</span> sc*****@gmail.com</div>
            <!--end::Mobile no-->
        </div>
        <!--end::Heading-->
        <!--begin::Section-->
        <div class="mb-10">
            <!--begin::Label-->
            <div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">{{ __('Type your 6 digit security code') }}</div>
            <!--end::Label-->
            <!--begin::Input group-->
            <div class="row row-cols-6 g-1 g-sm-2 mt-2">
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="3" />
                </div>
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="0" />
                </div>
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="7" />
                </div>
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="5" />
                </div>
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="2" />
                </div>
                <div class="col">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                    class="form-control px-0 text-center border-secondary outline-dark fs-md-3"
                    value="0" />
                </div>
                
            </div>
            <div class="d-flex flex-wrap justify-content-center pb-lg-0" style="margin-top:30px;">
                <span class="text-danger fs-2">04:00 <i class="fs-2 fa-solid fa-alarm-clock"></i></span>
            </div>
            <!--begin::Input group-->
        </div>
        <!--end::Section-->
        <!--begin::Submit-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="" class="btn btn-lg btn-primary fw-bolder me-4 login_signup_btn">
                {{ __('Submit') }}
                {{-- <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
            </button>
            <a href="{{ route('forgot-password') }}"
                class="btn btn-lg btn-light-danger border-danger border btn-primary fw-bolder">{{ __('Cancel') }}</a>
        </div>
        {{-- Submit --}}
    </form>
    <!--end::Form-->
    <!--begin::Notice-->
    <div class="text-center fw-bold fs-5">
        <span class="text-muted me-1">{{ __('Didn’t get the code ?') }}</span>
        <a href="#" class="link-primary fw-bolder fs-5 me-1">{{ __('Resend') }}</a>
        <span class="text-muted me-1">{{ __('or') }}</span>
        <a href="#" class="link-primary fw-bolder fs-5">{{ __('Call Us') }}</a>
    </div>
    <!--end::Notice-->
@endsection
