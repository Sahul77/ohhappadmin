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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Login/Signup Templates</h1>
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
                        <li class="breadcrumb-item text-gray-600">Notification</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Templates</li>
                        <li class="breadcrumb-item text-gray-500">View</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center py-2"> --}}
                <!--begin::Button-->
                {{-- <a href="{{ route('setting.location_setting.country.manage') }}" class="btn btn-sm btn-primary">Manage
                        Countries</a> --}}
                <!--end::Button-->
                {{-- </div> --}}
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
                    <div class="col-12 p-0">
                        <div class="mb-3 hover-scroll-x">
                            <div class="d-grid">
                                <ul class="nav nav-tabs flex-nowrap text-nowrap">
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 active"
                                            data-bs-toggle="tab" href="#kt_tab_pane_1">Push</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                            data-bs-toggle="tab" href="#kt_tab_pane_2">In-App</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                            data-bs-toggle="tab" href="#kt_tab_pane_3">SMS</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                            data-bs-toggle="tab" href="#kt_tab_pane_4">Email</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                <div class="bg-white rounded shadow-sm p-0">
                                    <div class="px-4">
                                        <div class="form-check my-4 d-inline-block">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="reg_email_customer" checked>
                                            <label class="form-check-label" for="reg_email_customer">Enable Push Notification
                                            </label>
                                        </div>
                                    </div>
                                    <div class="" id="reg_email_customer_section">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Content for Login/Signup Templates</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <p>Thank you for signing up with OOHAP! We hope you enjoy your time with us.</p>
                                                <p>Regards</p>
                                                <p>OOHAP Company</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                <div class="bg-white rounded shadow-sm p-0">
                                    <div class="px-4">
                                        <div class="form-check my-4 d-inline-block">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="in_app_notification" checked>
                                            <label class="form-check-label" for="in_app_notification">Enable In-App Notification
                                            </label>
                                        </div>
                                    </div>
                                    <div class="" id="in_app_notification_section">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Content for In-App Templates</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <p>In App Template Data Show Here..</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                <div class="bg-white rounded shadow-sm p-0">
                                    <div class="px-4">
                                        <div class="form-check my-4 d-inline-block">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="sms_notification" checked>
                                            <label class="form-check-label" for="sms_notification">Enable SMS Notification
                                            </label>
                                        </div>
                                    </div>
                                    <div class="" id="sms_notification_section">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Content for SMS Templates</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <p>SMS Template Data Show Here..</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                                <div class="bg-white rounded shadow-sm p-0">
                                    <div class="px-4">
                                        <div class="form-check my-4 d-inline-block">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="email_notification" checked>
                                            <label class="form-check-label" for="email_notification">Enable Email Notification
                                            </label>
                                        </div>
                                    </div>
                                    <div class="" id="email_notification_section">
                                        <div class="form-group border border-bottom-2">
                                            <label class="fs-6 fw-bold p-4">
                                                <span class="">Content for Email Templates</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <p>In App Template Data Show Here..</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

            // Regisetred Email to Vendor/User
            const reg_email_customer = document.getElementById('reg_email_customer');
            reg_email_customer.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#reg_email_customer_section").removeClass("d-none");
                } else {
                    $("#reg_email_customer_section").addClass("d-none");
                }
            });

            // in_app_notification
            const in_app_notification = document.getElementById('in_app_notification');
            in_app_notification.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#in_app_notification_section").removeClass("d-none");
                } else {
                    $("#in_app_notification_section").addClass("d-none");
                }
            });

            // sms_notification
            const sms_notification = document.getElementById('sms_notification');
            sms_notification.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#sms_notification_section").removeClass("d-none");
                } else {
                    $("#sms_notification_section").addClass("d-none");
                }
            });

            // sms_notification
            const email_notification = document.getElementById('email_notification');
            email_notification.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#email_notification_section").removeClass("d-none");
                } else {
                    $("#email_notification_section").addClass("d-none");
                }
            });
        </script>
    @endsection
