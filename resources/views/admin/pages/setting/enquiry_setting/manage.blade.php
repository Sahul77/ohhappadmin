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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Enquiry Settings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Enquiry Settings</li>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Settings Enquiry for Service
                                </h1>
                                <p class="mt-md-4 mb-3">Change your enquiry options</p>
                            </div>
                            <div class="col-md-9">
                                <div class="px-4 pb-5 bg-white rounded shadow-sm">
                                    <div class="row">
                                        <div class="col-12 mt-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="float-end">
                                                        <label class="fs-6 fw-bold form-label">Enable enquiry for Hoarding
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <span class="form-check-label fw-bold text-muted me-3">
                                                            YES
                                                        </span>
                                                        <input class="form-check-input custom_style_switch" type="checkbox"
                                                            value="1" checked="checked" />
                                                        <span class="form-check-label fw-bold text-muted ms-3">
                                                            NO
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-6">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="float-end">
                                                        <label class="fs-6 fw-bold form-label">Enable enquiry for Item
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <span class="form-check-label fw-bold text-muted me-3">
                                                            YES
                                                        </span>
                                                        <input class="form-check-input custom_style_switch" type="checkbox"
                                                            value="1" checked="checked" />
                                                        <span class="form-check-label fw-bold text-muted ms-3">
                                                            NO
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-6">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="float-end">
                                                        <label class="fs-6 fw-bold form-label">Enable enquiry for Realstate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <span class="form-check-label fw-bold text-muted me-3">
                                                            YES
                                                        </span>
                                                        <input class="form-check-input custom_style_switch" type="checkbox"
                                                            value="1" checked="checked" />
                                                        <span class="form-check-label fw-bold text-muted ms-3">
                                                            NO
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-6">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="float-end">
                                                        <label class="fs-6 fw-bold form-label">Enable enquiry for Vehicle
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <span class="form-check-label fw-bold text-muted me-3">
                                                            YES
                                                        </span>
                                                        <input class="form-check-input custom_style_switch" type="checkbox"
                                                            value="1" checked="checked" />
                                                        <span class="form-check-label fw-bold text-muted ms-3">
                                                            NO
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Settings Enquiry </h1>
                                <p class="mt-md-4 mb-3">Change your enquiry options</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">

                                    <div class="px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Enquiry Type</span>
                                                        </label>
                                                    </div>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Booking Enquiry</option>
                                                        <option value="2">Only Enquiry</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group pt-4">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Enable re-catpcha for enquiry?</span>
                                                </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="iOSLogin">
                                                    <label class="form-check-label" for="iOSLogin">
                                                        Enable re-captcha at enquiry form
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
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
