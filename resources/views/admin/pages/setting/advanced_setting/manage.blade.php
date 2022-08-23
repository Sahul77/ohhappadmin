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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Advanced Setting</h1>
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
                        <li class="breadcrumb-item text-gray-500">Advanced Setting</li>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Search Options</h1>
                                {{-- <p class="mt-md-4 mb-3">Search On Click Redirect</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Search open tab</span>
                                            {{-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="General Options"></i> --}}
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">Current Tab</option>
                                            <option value="2">Open New Tab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Size Unit</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Size Unit</span>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <select class="form-select" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">Feet</option>
                                            <option value="2">Meter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Google Map Provider</h1>
                                <p class="mt-md-4 mb-3">Change Map API of your Website/App</p>
                            </div>
                            <div class="col-md-9">
                                <div class="px-4 bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group pt-4">
                                        <label class="fs-6 mb-3">
                                            <span class="">Google Map API Key</span>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                        <a href="https://developers.google.com/maps/documentation/javascript/get-api-key"
                                            target="_blank"><i>Learn how to get an api key</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Google Map Settings</h1>
                                <p class="mt-md-4 mb-3">Change Map Setting of your Website/App</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Map Options Default</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Map Options Default"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Map Latitude Default</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="21.030513">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Map Longitude Default</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="105.840565">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <i><a href="https://www.latlong.net/" target="_blank">Get lat - lng in here
                                                https://www.latlong.net</a></i>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group">
                                            <label class="fs-6 p-4">
                                                <span class="">Map Clustering</span>
                                            </label>
                                        </div>
                                        <div class="px-4">
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Off</option>
                                                <option value="2">On</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group">
                                            <label class="fs-6 p-4">
                                                <span class="">Map fitBounds</span>
                                            </label>
                                        </div>
                                        <div class="px-4">
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Off</option>
                                                <option value="2">On</option>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Social Login</h1>
                                <p class="mt-md-4 mb-3">Change social login information for your website</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Facebook</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Facebook Login Enable/Disable"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value="" id="FacebookLogin">
                                            <label class="form-check-label" for="FacebookLogin">
                                                Enable Facebook Login?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded shadow-sm p-0 pb-7 mt-5">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Google</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Google Login Enable/Disable"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value="" id="googleLogin">
                                            <label class="form-check-label" for="googleLogin">
                                                Enable Google Login?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded shadow-sm p-0 pb-7 mt-5">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">iOS</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="iOS Login Enable/Disable"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value="" id="iOSLogin">
                                            <label class="form-check-label" for="iOSLogin">
                                                Enable iOS Login?
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Captcha</h1>
                                <p class="mt-md-4 mb-3">Change Setting of Captcha Verification</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">ReCaptcha Config</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="ReCaptcha Enable/Disable"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="form-check mt-6">
                                            <input class="form-check-input" type="checkbox" value="" id="reCaptchaLogin">
                                            <label class="form-check-label" for="reCaptchaLogin">
                                                Enable ReCaptcha?
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Custom Scripts for all languages</h1>
                                <p class="mt-md-4 mb-3">Add custom HTML script before and after the content, like
                                    tracking code</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Custom Scripts</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Custom Scripts in JS"></i>
                                        </label>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Head Script</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Head Script"></i>
                                        </label>
                                        <div class="form-group">
                                            <textarea class="form-control fs-6 text-dark" placeholder="" rows="10" data-kt-autosize="true"></textarea>
                                        </div>
                                        <i>scripts before closing head tag</i>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Body Script</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Body Script"></i>
                                        </label>
                                        <div class="form-group">
                                            <textarea class="form-control fs-6 text-dark" placeholder="" rows="10" data-kt-autosize="true"></textarea>
                                        </div>
                                        <i>scripts after open of body tag</i>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Footer Script</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Footer Script"></i>
                                        </label>
                                        <div class="form-group">
                                            <textarea class="form-control fs-6 text-dark" placeholder="" rows="10" data-kt-autosize="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Pusher API</h1>
                                <p class="mt-md-4 mb-3">Change your API for pusher here. It will use for
                                    chat plugin and notification</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Pusher API Information</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Pusher API Information for Chat"></i>
                                        </label>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">API KEY</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="API KEY"></i>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">API Secret</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="API Secret"></i>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">APP ID</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="APP ID"></i>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                        </div>
                                    </div>
                                    <div class="px-4 mt-5">
                                        <label class="fs-6 mb-3">
                                            <span class="">Cluster</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Cluster"></i>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control fs-6 text-dark" placeholder="">
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
