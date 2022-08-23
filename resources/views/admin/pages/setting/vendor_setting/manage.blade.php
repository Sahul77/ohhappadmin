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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Vendor Settings
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
                        <li class="breadcrumb-item text-gray-500">Vendor Settings</li>
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
                    {{-- Vendor Setting --}}
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">General Settings</h1>
                                {{-- <p class="mt-md-4 mb-3">Search On Click Redirect</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Terms & Conditions</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">Privacy Policy</option>
                                            <option value="2">Terms & Conditions</option>
                                            <option value="2">Desclaimer</option>
                                            <option value="2">Refund & Cancellations</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Config Vendor </h1>
                                <p class="mt-md-4 mb-3">Change your config vendor system</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-2">
                                    <div class="form-group">
                                        <div class="p-4">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="vendor_commission" checked>
                                                <label class="form-check-label" for="vendor_commission">
                                                    Vendor Commission Enable?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4" id="vendor_commission_section">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-3">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Vendor Commission Type</span>
                                                        </label>
                                                    </div>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Percent</option>
                                                        <option value="2">Amount</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Vendor commission value</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="">
                                                        <p>
                                                            <i>Example value : 10 or 10.5</i><br>
                                                            <i>Example: 10% commssion. Vendor get 90%, Admin get 10%</i>
                                                        </p>
                                                    </div>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Vendor Register</h1>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-2">
                                    <div class="form-group">
                                        <div class="p-4">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="vendorAutoApproved">
                                                <label class="form-check-label" for="vendorAutoApproved">
                                                    Vendor Auto Approved?
                                                </label>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Vendor Profile</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <div class="p-4">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="vendorEmail">
                                                <label class="form-check-label" for="vendorEmail">
                                                    Show vendor email in profile?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="px-4">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="vendorPhone">
                                                <label class="form-check-label" for="vendorPhone">
                                                    Show vendor phone in profile?
                                                </label>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Content Email Vendor Registered</h1>

                                <div class="form-group-desc mt-md-4 mb-3">
                                    <p>Content email send to Vendor or Administrator when user registered.</p>
                                    <div class="mt-2">
                                        <code>[first_name]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[last_name]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[name]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[email]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[created_at]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[link_approved]</code>
                                    </div>
                                    <div class="mt-2">
                                        <code>[button_verify]</code>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="col-12">
                                    <div class="bg-white rounded shadow-sm p-0">
                                        <div class="px-4">
                                            <div class="form-check my-4 d-inline-block">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="reg_email_customer" checked>
                                                <label class="form-check-label" for="reg_email_customer">Enable
                                                    send email to
                                                    customer when customer registered ?
                                                </label>
                                            </div>
                                        </div>
                                        <div class="" id="reg_email_customer_section">
                                            <div class="form-group border border-bottom-2">
                                                <label class="fs-6 fw-bold p-4">
                                                    <span class="">Email to vendor content</span>
                                                </label>
                                            </div>
                                            <div>
                                                <textarea class="tinymce_basic">
                                                    <h1 style="text-align: center;" data-mce-style="text-align: center;">Welcome!</h1>
                                                    <h3>Hello [first_name] [last_name]</h3>
                                                    <p>Thank you for signing up with OOHAP! We hope you enjoy your time with us.</p>
                                                    <p>Regards</p>
                                                    <p>OOHAP Company</p>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="bg-white rounded shadow-sm p-0">
                                        <div class="px-4">
                                            <div class="form-check my-4 d-inline-block">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="reg_admin_customer" checked>
                                                <label class="form-check-label" for="reg_admin_customer"> Enable send
                                                    email to Administrator when customer registered ?
                                                </label>
                                            </div>
                                        </div>
                                        <div class="" id="reg_admin_customer_section">
                                            <div class="form-group border border-bottom-2">
                                                <label class="fs-6 fw-bold p-4">
                                                    <span class="">Email to admin content</span>
                                                </label>
                                            </div>
                                            <div>
                                                <textarea class="tinymce_basic">
                                                    <h3>Hello Administrator</h3>
                                                    <p>An user has been registered as Vendor. Please check the information bellow:</p>
                                                    <p>Full name: [first_name] [last_name]</p>
                                                    <p>Email: [email]</p>
                                                    <p>Registration date: [created_at]</p>
                                                    <p>You can approved the request here: [link_approved]</p>
                                                    <p>Regards</p>
                                                    <p>OOHAP Company</p>
                                                </textarea>
                                            </div>
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

        // Vendor Commission
        const vendor_commission = document.getElementById('vendor_commission');
        vendor_commission.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                $("#vendor_commission_section").removeClass("d-none");
            } else {
                $("#vendor_commission_section").addClass("d-none");
            }
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

        // Regisetred Email to Admin
        const reg_admin_customer = document.getElementById('reg_admin_customer');
        reg_admin_customer.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                $("#reg_admin_customer_section").removeClass("d-none");
            } else {
                $("#reg_admin_customer_section").addClass("d-none");
            }
        });
    </script>
@endsection
