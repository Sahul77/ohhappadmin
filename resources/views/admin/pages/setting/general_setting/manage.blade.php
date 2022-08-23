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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">General Setting</h1>
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
                        <li class="breadcrumb-item text-gray-500">General Setting</li>
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
                    {{-- General Setting --}}
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Site Information</h1>
                                <label for="inputPassword6" class="col-form-label text-gray-600">Information of your website
                                    for customer and google</label>
                                {{-- <p class="mt-md-4 mb-3">Search On Click Redirect</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Site Title</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <input type="text" class="form-control" placeholder="OOHAP" minlength="30" maxlength="60">
                                    </div>
                                    {{-- site desc --}}

                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Site Desc</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <textarea class="form-control" id="site_desc" data-kt-autosize="true" maxlength="160" minlength="50"></textarea>
                                    </div>
                                    {{-- end site desc --}}

                                    {{-- Date Format --}}

                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Date Format</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <input type="date" class="form-control" placeholder="DD/MM/YYYY">
                                    </div>

                                    {{-- end Date Format --}}

                                    {{-- TimeZone --}}

                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Timezone</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2" data-placeholder="--Deafult--">
                                            <option></option>
                                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago (UTC-11:00)</option>
                                            <option value="Pacific/Niue">Pacific/Niue (UTC-11:00)</option>
                                            <option value="Pacific/Midway">Pacific/Midway (UTC-11:00)</option>
                                            <option value="Pacific/Honolulu">Pacific/Honolulu (UTC-10:00)</option>
                                            <option value="Pacific/Tahiti">Pacific/Tahiti (UTC-10:00)</option>
                                            <option value="Pacific/Rarotonga">Pacific/Rarotonga (UTC-10:00)</option>
                                            <option value="Pacific/Marquesas">Pacific/Marquesas (UTC-09:30)</option>
                                            <option value="America/Adak">America/Adak (UTC-09:00)</option>
                                            <option value="Pacific/Gambier">Pacific/Gambier (UTC-09:00)</option>
                                            <option value="America/Yakutat">America/Yakutat (UTC-08:00)</option>
                                            <option value="Pacific/Pitcairn">Pacific/Pitcairn (UTC-08:00)</option>
                                            <option value="America/Juneau">America/Juneau (UTC-08:00)</option>
                                            <option value="America/Nome">America/Nome (UTC-08:00)</option>
                                            <option value="America/Sitka">America/Sitka (UTC-08:00)</option>
                                            <option value="America/Anchorage">America/Anchorage (UTC-08:00)</option>
                                            <option value="America/Metlakatla">America/Metlakatla (UTC-08:00)</option>
                                            <option value="America/Whitehorse">America/Whitehorse (UTC-07:00)</option>
                                            <option value="America/Creston">America/Creston (UTC-07:00)</option>
                                            <option value="America/Los_Angeles">America/Los_Angeles (UTC-07:00)</option>
                                            <option value="America/Tijuana">America/Tijuana (UTC-07:00)</option>
                                            <option value="America/Fort_Nelson">America/Fort_Nelson (UTC-07:00)</option>
                                        </select>
                                    </div>

                                    {{-- end timezone --}}

                                    {{-- Calender Format --}}

                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Change the first day of week for the
                                                calendars</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">Sunday </option>
                                            <option value="2">Monday </option>
                                        </select>
                                    </div>

                                    {{-- end Calender Format --}}
                                </div>

                            </div>


                        </div>
                    </div> {{-- end site information --}}


                    <div class="col-12 mt-4">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4"> Langauge</h1>
                                <label for="inputPassword6" class="col-form-label text-gray-600">Change language of your
                                    websites</label>

                                {{-- <p class="mt-md-4 mb-3">Search On Click Redirect</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Select default language</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="General Options"></i> --}}
                                        </label>
                                    </div>

                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value=""></option>
                                            <option selected value="en">English - (en)</option>
                                            <option value="ja">Japanese - (ja)</option>
                                            <option value="he">עברית - (he)</option>
                                        </select>
                                    </div>
                                    {{-- end selet lang --}}
                                    {{-- start multi lamg --}}
                                    <div class="form-group">
                                        <div class="px-4">
                                            <div class="form-check mt-6">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="multiLang">
                                                <label class="form-check-label" for="multiLang">
                                                    Enable Multi Languages
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end multi select lang --}}
                                </div>
                            </div>
                        </div>
                    </div> {{-- end  language --}}

                    {{-- start homepage --}}

                    <div class="col-12 mt-5">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Homepage</h1>
                                <label for="inputPassword6" class="col-form-label text-gray-600">Change your homepage
                                    content</label>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Page for Homepage </span>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option>Home Page</option>
                                            <option selected value="en">Home Event</option>
                                            <option value="ja">Home Space</option>
                                            <option value="he">Home Car</option>
                                            <option value="he">Home v2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end homepage --}}

                    {{-- End: General setting --}}

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
        $('input, textarea').maxlength({
            showOnReady: false,
            alwaysShow: true,
            threshold: 0,
            warningClass: "small form-text text-muted",
            limitReachedClass: "small form-text text-danger",
            separator: " / ",
            preText: "",
            postText: " characters",
            showMaxLength: true,
            placement: "bottom-right-inside",
            message: null,
            showCharsTyped: true,
            validate: false,
            utf8: false,
            appendToParent: false,
            twoCharLinebreak: false,
            customMaxAttribute: null,
            allowOverMax: false,
            zIndex: 1099,
        });
    </script>
@endsection
