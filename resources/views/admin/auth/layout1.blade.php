@extends('admin.base.base')

@section('content')
    <div class="d-flex flex-column flex-root" style="background-image: linear-gradient(to top, rgb(255, 56, 92), rgb(193, 14, 47));">
        <!--begin::Authentication-->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('admin/media/illustrations/sigma-1/14.png') }})">

            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="#" class="mb-12">
                    <img alt="Logo" src="{{ asset('admin/media/logos/logo.png') }}" class="h-45px" />
                </a>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="w-sm-350px w-md-500px w-xs-350px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    @yield('main_content')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto pb-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="#" class="text-white text-hover-primary px-2">{{ __('About') }}</a>

                    <a href="#" class="text-white text-hover-primary px-2">{{ __('Contact Us') }}</a>

                    <a href="#" class="text-white text-hover-primary px-2">{{ __('Purchase') }}</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication-->
    </div>

@endsection
