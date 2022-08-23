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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">SMS Setting</h1>
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
                        <li class="breadcrumb-item text-gray-500">SMS Setting</li>
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
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Config SMS</h1>
                                <p class="mt-md-4 mb-3">SMS Driver</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">SMS Driver</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Select SMS Driver for Configuration"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option" id="sms_driver_config">
                                            <option></option>
                                            <option value="twilio">TWILIO</option>
                                            <option value="infobip">INFOBIP</option>
                                            <option value="2factor">2FACTOR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Config 2Factor --}}
                    <div class="col-12 mt-5 d-none" id="two_factor_config">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Config 2Factor Driver</h1>
                                {{-- <p class="mt-md-4 mb-3">SMS Driver</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Configuration</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Configuration for 2Factor"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="mt-3">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">API KEY</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="API of 2Factor"></i>
                                                </label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text" id="app-version"><i
                                                            class="fa-solid fa-key fs-5 text-dark"></i></span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Enter API Key" aria-describedby="app-version"
                                                        value="cjd7fdff-dbe5-11e9-ade6-0200cd930055" />
                                                </div>
                                                <i><a href="https://2factor.in" target="_blank">For API Key Click Here
                                                        https://2factor.in</a></i>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Template Name</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Template Name e.g. OOHAPP"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Template Name" value="OOHAPP">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="d-inline-flex align-item flex-stack">
                                                <div class="me-5 mt-1">
                                                    <label class="fs-6 fw-bold form-label">Activate SMS Provider
                                                    </label>
                                                </div>
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

                    {{-- Config Twilio --}}

                    <div class="col-12 mt-5 d-none" id="twilio_config">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Config Twilio Driver</h1>
                                {{-- <p class="mt-md-4 mb-3">SMS Driver</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Configuration</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Configuration for Twilio"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="mt-3">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Twilio Account SID</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Twilio Account SID e.g. 53457234673458"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Account SID" value="">
                                            </div>
                                            <i><a href="https://www.twilio.com/" target="_blank">For Token & SID Click Here
                                                    https://www.twilio.com/</a></i>
                                        </div>
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Twilio Account Token</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Twilio Account Token e.g. 32asd434-345568-234gsdf68"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Token" value="">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">From</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="From Template Name e.g OOHAPP"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="e.g. OOHAPP" value="">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Twilio Phone Number</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Twilio Phone Number e.g. 8763081327"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Twilio Phone Number" value="">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="d-inline-flex align-item flex-stack">
                                                <div class="me-5 mt-1">
                                                    <label class="fs-6 fw-bold form-label">Activate SMS Provider
                                                    </label>
                                                </div>
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

                    {{-- Config Infobip --}}

                    <div class="col-12 mt-5 d-none" id="infobip_config">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Config Infobip Driver</h1>
                                {{-- <p class="mt-md-4 mb-3">SMS Driver</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Configuration</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Configuration for Infobip"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="mt-3">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Username</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Infobip Username e.g. rubi562346"></i>
                                                </label>
                                                <input type="text" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Infobip Username" value="">
                                            </div>
                                            <i><a href="https://www.infobip.com/sms" target="_blank">For Username & Password
                                                    Click Here https://www.infobip.com/sms</a></i>
                                        </div>
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 fw-bold mb-3">
                                                    <span class="">Password</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Infobip Password"></i>
                                                </label>
                                                <input type="password" class="form-control fs-6 text-dark"
                                                    placeholder="Enter Infobip Password" value="">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="d-inline-flex align-item flex-stack">
                                                <div class="me-5 mt-1">
                                                    <label class="fs-6 fw-bold form-label">Activate SMS Provider
                                                    </label>
                                                </div>
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

                    <div class="col-12 mt-5">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">SMS Testing</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Country</span>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">India</option>
                                            <option value="2">United States</option>
                                            <option value="3">United Kingdom</option>
                                        </select>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">To (Phone Number)</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter Phone Number Without Country Code (e.g 8287110840)" aria-label="Enter Phone Number (e.g com.oohapp.web)"></i>
                                        </label>
                                        <div class="input-group mb-5">
                                            <span class="input-group-text">+91</span>
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="Enter Phone Number" value="">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Message</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Message (For Testing Only)"></i>
                                        </label>
                                        <div class="form-group">
                                            <textarea class="form-control fs-6 text-dark" placeholder="" rows="5" data-kt-autosize="true"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-start mt-4">
                                                <button class="btn btn-primary btn-sm">Send Message</button>
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
    <script>
        const sms_driver_config = document.getElementById('sms_driver_config');

        function showDriver() {
            let sel_driver = sms_driver_config.options[sms_driver_config.selectedIndex].value;
            if (sel_driver == '2factor') {
                $("#two_factor_config").removeClass("d-none");
                $("#twilio_config").addClass("d-none");
                $("#infobip_config").addClass("d-none");
            } else if (sel_driver == 'twilio') {
                $("#twilio_config").removeClass("d-none");
                $("#two_factor_config").addClass("d-none");
                $("#infobip_config").addClass("d-none");
            } else if (sel_driver == 'infobip') {
                $("#infobip_config").removeClass("d-none");
                $("#twilio_config").addClass("d-none");
                $("#two_factor_config").addClass("d-none");
            } else{
                $("#infobip_config").addClass("d-none");
                $("#twilio_config").addClass("d-none");
                $("#two_factor_config").addClass("d-none");
            }
        }
        sms_driver_config.onchange = showDriver;
        showDriver();
    </script>
@endsection
