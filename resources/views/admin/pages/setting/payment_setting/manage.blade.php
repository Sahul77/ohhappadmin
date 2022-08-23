@extends('admin.layout.main')

@section('main_content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div class="app-toolbar align-items-center justify-content-between">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="d-flex flex-column align-items-start me-3 gap-2">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Payment Setting</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Setting</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">payment Setting</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor">Create New</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="app-content flex-column-fluid" id="kt_app_content">
            <!--begin::Row-->
            <div class="container-fluid">
                <div class="row gy-5 g-xl-5">
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-3">
                        <!--begin::Card widget 2-->
                        <div class="card h-lg-60 shadow-sm p-0 rounded">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                <!--begin::Icon-->
                                <div class="m-0">
                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                    <span class="svg-icon svg-icon-1hx svg-icon-gray-600">
                                        <i class="fa-light fa-credit-card fs-1 fw-bold text-success"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column my-5">
                                    <!--begin::Follower-->
                                    <div class="mt-2">
                                        <span class="fw-bold fs-6 text-gray-400">Total Payment Gateway</span>
                                    </div>
                                    <!--end::Follower-->
                                    <!--begin::Number-->
                                    <span class="fw-bold fs-2x text-gray-800 text-center">5</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-3">
                        <!--begin::Card widget 2-->
                        <div class="card h-lg-60 shadow-sm p-0 rounded">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                <!--begin::Icon-->
                                <div class="m-0">
                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                    <span class="svg-icon svg-icon-1hx svg-icon-gray-600">
                                        <i class="fa-solid fa-wave-pulse fs-1 fw-bold text-primary"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column my-5">
                                    <!--begin::Follower-->
                                    <div class="mt-2">
                                        <span class="fw-bold fs-6 text-gray-400">Active Payment Gateway</span>
                                    </div>
                                    <!--end::Follower-->
                                    <!--begin::Number-->
                                    <span class="fw-bold fs-2x text-gray-800 text-center">3</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-3">
                        <!--begin::Card widget 2-->
                        <div class="card h-lg-60 shadow-sm p-0 rounded">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                <!--begin::Icon-->
                                <div class="m-0">
                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                    <span class="svg-icon svg-icon-1hx svg-icon-gray-600">
                                        <i class="fa-solid fa-ban fs-1 fw-bold text-danger"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column my-5">
                                    <!--begin::Follower-->
                                    <div class="mt-2">
                                        <span class="fw-bold fs-6 text-gray-400">InActive Payment Gateway</span>
                                    </div>
                                    <!--end::Follower-->
                                    <!--begin::Number-->
                                    <span class="fw-bold fs-2x text-gray-800 text-center">2</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-6 col-xl-3">
                        <!--begin::Card widget 2-->
                        <div class="card h-lg-60 shadow-sm p-0 rounded">
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                <!--begin::Icon-->
                                <div class="m-0">
                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                    <span class="svg-icon svg-icon-1hx svg-icon-gray-600">
                                        <i class="fa-light fa-credit-card fs-1 fw-bold text-success"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column my-5">
                                    <!--begin::Follower-->
                                    <div class="mt-2">
                                        <span class="fw-bold fs-6 text-gray-400">Most Used Payment Gateway</span>
                                    </div>
                                    <!--end::Follower-->
                                    <!--begin::Number-->
                                    <span class="fw-bold fs-2x text-center text-success">PayPal</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card widget 2-->
                    </div>
                    <!--end::Col-->
                    <div class="col-12">
                        <div class="shadow-sm p-0 rounded">

                            <!--begin::Accordion-->
                            <div class="accordion" id="kt_accordion_1">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="kt_accordion_1_header_1">
                                        <button class="accordion-button fs-5 fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1"
                                            aria-expanded="false" aria-controls="kt_accordion_1_body_1">
                                            Offline Payment
                                        </button>
                                    </div>
                                    <div id="kt_accordion_1_body_1" class="accordion-collapse collapse"
                                        aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                                        <div class="accordion-body">
                                            {{-- begin form --}}
                                            <form action="#">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Enable Offline Payment?
                                                    </label>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Custom Name</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Payment Method Name (Ex.COD)"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Custom Name">
                                                    </div>
                                                </div>
                                                {{-- Payment nodes --}}
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Payment Note</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="It Shows While Doing Payment"></i>
                                                        </label>
                                                        <textarea class="form-control fs-6 text-dark" placeholder="Enter Payment Note" rows="5" data-kt-autosize="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Custom Image</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                                    </label>
                                                    <div class="mt-2">
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="symbol symbol-80px w-50px">
                                                                <img src="{{ asset('admin/media/extra/upload.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Edit-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Add Photos">
                                                                <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                                <input id="file-input" type="file" />
                                                            </label>
                                                            <!--end::Edit-->
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- custom html description --}}
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Description</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Description Shows in Payment Gateway"></i>
                                                    </label>
                                                    <div class="form-group">
                                                        <textarea class="form-control fs-6 text-dark" placeholder="Enter Description" rows="5" data-kt-autosize="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center mt-4">
                                                        <button class="btn btn-sm btn-success me-5">Reset Form</button>
                                                        <button class="btn btn-sm btn-primary">Save Settings</button>
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- end form --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="kt_accordion_1_header_2">
                                        <button class="accordion-button fs-5 fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2"
                                            aria-expanded="false" aria-controls="kt_accordion_1_body_2">
                                            Paypal Express Checkout
                                        </button>
                                    </div>
                                    <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                                        aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                                        <div class="accordion-body">
                                            {{-- begin form --}}
                                            <form action="#">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Enable Paypal Payment?
                                                    </label>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Custom Name</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Payment Method Name (Ex.PayPal)"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Custom Name">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Custom Image</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                                    </label>
                                                    <div class="mt-2">
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="symbol symbol-80px w-50px">
                                                                <img src="{{ asset('admin/media/extra/upload.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Edit-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Add Photos">
                                                                <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                                <input id="file-input" type="file" />
                                                            </label>
                                                            <!--end::Edit-->
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- custom html description --}}
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Description</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Description Shows in Payment Gateway"></i>
                                                    </label>
                                                    <div class="form-group">
                                                        <textarea class="form-control fs-6 text-dark" placeholder="Enter Description" rows="5" data-kt-autosize="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">API Username</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="API Username"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter API Username">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">API Password</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="API Password"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter API Password">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Signature</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Signature"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Signature">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center mt-4">
                                                        <button class="btn btn-sm btn-success me-5">Reset Form</button>
                                                        <button class="btn btn-sm btn-primary">Save Settings</button>
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- end form --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="kt_accordion_1_header_3">
                                        <button class="accordion-button fs-5 fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3"
                                            aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                            Stripe Checkout
                                        </button>
                                    </div>
                                    <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                        aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                        <div class="accordion-body">
                                            {{-- begin form --}}
                                            <form action="#">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Enable Stripe Checkout V2?
                                                    </label>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Custom Name</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Payment Method Name (Ex.Stripe)"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Custom Name">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Custom Image</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                                    </label>
                                                    <div class="mt-2">
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="symbol symbol-80px w-50px">
                                                                <img src="{{ asset('admin/media/extra/upload.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Edit-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Add Photos">
                                                                <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                                <input id="file-input" type="file" />
                                                            </label>
                                                            <!--end::Edit-->
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- custom html description --}}
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Description</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Description Shows in Payment Gateway"></i>
                                                    </label>
                                                    <div class="form-group">
                                                        <textarea class="form-control fs-6 text-dark" placeholder="Enter Description" rows="5" data-kt-autosize="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Secret Key</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Secret Key"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Secret Key">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Publishable Key</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Publishable Key"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Publishable Key">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Signature</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Signature"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Signature">
                                                    </div>
                                                </div>
                                                <div class="form-check mt-6">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="sandBoxMode">
                                                    <label class="form-check-label" for="sandBoxMode">
                                                        Enable Sandbox Mode
                                                    </label>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Test Secret Key</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Test Secret Key"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Test Secret Key">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Test Publishable Key</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Test Publishable Key"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Test Publishable Key">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Webhook Secret</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Webhook Secret"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Webhook Secret">
                                                    </div>
                                                    <span class="fs-8 mt-2">Webhook url: <span
                                                            class="text-danger">https://oohap.in/gateway/gateway_callback/stripe</span></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center mt-4">
                                                        <button class="btn btn-sm btn-success me-5">Reset Form</button>
                                                        <button class="btn btn-sm btn-primary">Save Settings</button>
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- end form --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="kt_accordion_1_header_4">
                                        <button class="accordion-button fs-5 fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_4"
                                            aria-expanded="false" aria-controls="kt_accordion_1_body_4">
                                            Two Checkout
                                        </button>
                                    </div>
                                    <div id="kt_accordion_1_body_4" class="accordion-collapse collapse"
                                        aria-labelledby="kt_accordion_1_header_4" data-bs-parent="#kt_accordion_1">
                                        <div class="accordion-body">
                                            {{-- begin form --}}
                                            <form action="#">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Enable Two Checkout?
                                                    </label>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Custom Name</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Payment Method Name (Ex.Two Checkout)"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Custom Name">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Custom Image</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                                    </label>
                                                    <div class="mt-2">
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="symbol symbol-80px w-50px">
                                                                <img src="{{ asset('admin/media/extra/upload.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Edit-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Add Photos">
                                                                <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                                <input id="file-input" type="file" />
                                                            </label>
                                                            <!--end::Edit-->
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- custom html description --}}
                                                <div class="mt-6">
                                                    <label class="fs-6 fw-bold mb-3">
                                                        <span class="">Description</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Description Shows in Payment Gateway"></i>
                                                    </label>
                                                    <div class="form-group">
                                                        <textarea class="form-control fs-6 text-dark" placeholder="Enter Description" rows="5" data-kt-autosize="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Account Number</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Account Number"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Account Number">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 fw-bold mb-3">
                                                            <span class="">Secret Word</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip" title="Secret Word"></i>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter Secret Word">
                                                    </div>
                                                </div>
                                                <div class="form-check mt-6">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="sandBoxModeTwoCheckout">
                                                    <label class="form-check-label" for="sandBoxModeTwoCheckout">
                                                        Enable Sandbox Mode
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center mt-4">
                                                        <button class="btn btn-sm btn-success me-5">Reset Form</button>
                                                        <button class="btn btn-sm btn-primary">Save Settings</button>
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- end form --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Accordion-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('scripts')
@endsection
