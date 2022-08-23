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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">User Settings</h1>
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
                        <li class="breadcrumb-item text-gray-500">User Settings</li>
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
                <div class="row">
                    {{-- Advanced Setting --}}

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Inbox System</h1>
                                <p class="mt-md-4 mb-3">Config inbox option</p>
                            </div>
                            <div class="col-md-9">
                                <div class="px-4 bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group pt-4">
                                        <label class="fs-6 mb-3">
                                            <span class="">Allow customer can send message to the vendor
                                                on detail page</span>
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerToVendor">
                                            <label class="form-check-label" for="customerToVendor">
                                                Yes, Please
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Google reCapcha Options</h1>
                                <p class="mt-md-4 mb-3">Config google recapcha for system</p>
                            </div>
                            <div class="col-md-9">
                                <div class="px-4 bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group pt-4">
                                        <label class="fs-6 mb-3">
                                            <span class="">Enable reCapcha Login Form</span>
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="recapchaLogin">
                                            <label class="form-check-label" for="recapchaLogin">
                                                On
                                            </label>

                                        </div>
                                        <small class="form-text text-muted ">Turn on the mode for login form</small>
                                    </div>

                                    <div class="form-group pt-6">
                                        <label class="fs-6 mb-3">
                                            <span class="">Enable reCapcha Register Form</span>
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="recapchaRegister">
                                            <label class="form-check-label" for="recapchaRegister">
                                                On
                                            </label>
                                        </div>
                                        <small class="form-text text-muted mt-4">Turn on the mode for register form</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Disable verification feature?</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Disable verification feature</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Disable verification feature"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="verification">
                                            <label class="form-check-label" for="verification">
                                                Yes, please disable it
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Two Factor Authentication</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Two Factor Authentication</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Two Factor Authentication"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="authentication">
                                            <label class="form-check-label" for="authentication">
                                                Yes, please enable it
                                            </label>
                                        </div>
                                        <p class="mt-4 mb-2 text-muted">When two factor authentication feature is enabled,
                                            the user is required to input a six digit numeric token during the
                                            authentication process. This token is generated using a time-based one-time
                                            password (TOTP) that can be retrieved from any TOTP compatible mobile
                                            authentication application such as Google Authenticator.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Permanently delete account</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Permanently delete account</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="ReCaptcha Enable/Disable"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="permanentlyDelete">
                                            <label class="form-check-label" for="permanentlyDelete">
                                                Yes, please enable it
                                            </label>
                                        </div>
                                        <p class="mt-4 mb-2 text-muted">
                                            Permanently delete account will delete all services of that user and that user.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End: Advanced setting --}}
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-success me-5">Reset Form</button>
                        <button class="btn btn-primary">Save Settings</button>
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
