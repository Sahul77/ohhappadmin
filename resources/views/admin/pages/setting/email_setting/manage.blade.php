@extends('admin.layout.main')
@section('styles')
    <style>
        div.tox-tinymce {
            height: 300px !important;
            border: none;
        }
    </style>
@endsection
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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Email Setting
                    </h1>
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
                        <li class="breadcrumb-item text-gray-500">Email Setting</li>
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
                    {{-- Email Setting --}}
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">SMTP Config Email</h1>
                                <p class="mt-md-4 mb-3">Change your config email site</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">SMTP Email Driver</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="SMTP Email Driver (Gmail)"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Email Host</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            value="smtp.gmail.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Email Port</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="587">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Email Username</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Email Password</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group">
                                            <label class="fs-6 p-4">
                                                <span class="">Email Encryption</span>
                                            </label>
                                        </div>
                                        <div class="px-4">
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1" selected>TLS</option>
                                                <option value="2">SSL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Email From Config</h1>
                                <p class="mt-md-4 mb-3">How your customer can contact to you</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Configuration</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Configuration Email"></i>
                                        </label>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Admin Email</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder=""
                                                value="contact@oohap.com">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Email Name (From)</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder=""
                                                value="OOHAP Company">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Email Address (From)</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder=""
                                                value="contact@oohap.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Email Testing</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Test Your E-mail</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Test Your E-mail"></i>
                                        </label>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Email</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mt-4">
                                                <button class="btn btn-primary btn-sm">Send Email Test</button>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Email Header & Footer</h1>
                                <p class="mt-md-4 mb-3">Change email header and footer</p>
                            </div>
                            <div class="col-md-9">
                                <div class="col-12">
                                    <div class="bg-white rounded shadow-sm p-0">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Header</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <h1 style="text-align: center;">OOHAP COMPANY</h1>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="bg-white rounded shadow-sm p-0">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Footer</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <p style="text-align: center;">&#169; 2022 My MarketPlace - Hoardings. All rights reserved</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End: Email setting --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"></script>
    <script>
        $(window).ready(function() {
            var options = {
                selector: ".tinymce_basic"
            };
            tinymce.init(options);
        });
    </script>
@endsection
