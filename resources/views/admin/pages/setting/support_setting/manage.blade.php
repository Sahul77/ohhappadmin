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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Support Settings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Support Settings</li>
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
                    {{-- Mobile App Setting --}}
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">General Setting</h1>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">

                                    <div class="px-4">
                                        <div class="row">

                                            <div class="col-md-12">
                                               
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Support Phone Number</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter phone number" value="8721377634">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Toll-Free Number  </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter toll-free number" value="1800-3254-8712">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Support email address</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter email address" value="oohapp@gmail.com ">
                                                            
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Default sender email address</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="Enter sender email address" value="oohapp@gmail.com">
                                                            
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Social Link Setting</h1>
                                {{-- <p class="mt-md-4 mb-3">Change your APK Download Setting</p> --}}
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">Social Link Config</span>
                                        </label>
                                    </div>
                                    
                                    <div class="mt-6">
                                        <div class="px-4">
                                            <div class="form-check d-inline-block">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="apk_download_setting_section_toggle">
                                                <label class="form-check-label" for="apk_download_setting_section_toggle">
                                                    Social Media Links 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-none" id="apk_download_setting_section">
                                            <div class="px-4 mt-5">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Facebook  Link</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Enter Package Name (e.g com.oohapp.web)"></i>
                                                </label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text"><i
                                                            class="fa-brands fa-facebook text-success fs-4"></i></span>
                                                    <span
                                                        class="input-group-text">https://www.facebook.com/</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Package Name" value="oohapp" />
                                                </div>
                                            </div>
                                            <div class="px-4 mt-5">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Youtube
                                                        Link</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Play Store Application Link (App Name Ex.: oohapp-market-place & Store ID Ex.: 1404871703)"></i>
                                                </label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text"><i
                                                            class="fa-brands fa-youtube text-danger fs-1"></i></span>
                                                    <span class="input-group-text">https://www.youtube.com/</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="App Name" value="oohapp-hoardings">
                                                    {{-- <span class="input-group-text">/id</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Store ID" value="1404871703"> --}}
                                                </div>
                                            </div>
                                            <div class="px-4 mt-5">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Twitter  Link</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Enter Package Name (e.g com.oohapp.web)"></i>
                                                </label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text"><i class="fa-brands fa-twitter text-success fs-4"></i></span>
                                                    <span
                                                        class="input-group-text">https://twitter.com/</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Package Name" value="oohapp" />
                                                </div>
                                            </div>
                                            <div class="px-4 mt-5">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Pinterest  Link</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Enter Package Name (e.g com.oohapp.web)"></i>
                                                </label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text"><i class="fa-brands fa-pinterest text-danger fs-1"></i>  </span>
                                                    <span
                                                        class="input-group-text">https://www.pinterest.com/</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Package Name" value="oohapp" />
                                                </div>
                                            </div>
                                            <div class="px-4 mt-5">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Facebook  Link</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Enter Package Name (e.g com.oohapp.web)"></i>
                                                </label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text"><i
                                                            class="fa-brands fa-instagram text-danger fs-4"></i></span>
                                                    <span
                                                        class="input-group-text">https://www.instagram.com/</span>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="Package Name" value="oohapp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End: Mobile APP setting --}}
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-success me-5">Reset Form</button>
                        <button class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
            <!--end::Row-->
                
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('scripts')
    <script>
        const apk_download_checkbox = document.getElementById('apk_download_setting_section_toggle');
        apk_download_checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                $("#apk_download_setting_section").removeClass("d-none");
            } else {
                $("#apk_download_setting_section").addClass("d-none");
            }
        })
    </script>
@endsection
