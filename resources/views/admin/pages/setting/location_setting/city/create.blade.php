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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New City</h1>
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
                        <li class="breadcrumb-item text-gray-600">Location</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Create City</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('setting.location_setting.city.manage') }}" class="btn btn-sm btn-primary">Manage
                        Cities</a>
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
                <div class="row mt-5">
                    {{-- Advanced Setting --}}
                    <div class="col-12">
                        <div class="bg-white rounded shadow-sm">
                            <div class="row gy-5 pb-6">
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Select Country</span>
                                        </label>
                                        <select class="form-select" id="country_name" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="IN">India</option>
                                            <option value="NZ">New Zealand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_first">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Select State</span>
                                        </label>
                                        <select class="form-select" id="state_name" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="DL">New Delhi</option>
                                            <option value="UP">Uttar Pradesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_state_first">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">City</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Ener City of Selected States"></i>
                                        </label>
                                        <input type="text"  class="form-control fs-6 text-dark"
                                            placeholder="Ex. Ghaziabad">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_state_first">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Latitute</span>
                                        </label>
                                        <input type="text" id="latitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter City Name First">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_state_first">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Longitude</span>
                                        </label>
                                        <input type="text" id="longitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter City Name First">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_state_first">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Status</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status_radio" type="radio"
                                                    value="1" id="status_active" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="status_active">
                                                    <div class="text-gray-800">Active</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status_radio" type="radio"
                                                    value="2" id="status_inactive" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="status_inactive">
                                                    <div class="text-gray-800">In Active</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 map_container d-none">
                                    <div id="map" class="w-100" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end mt-4">
                            <button class="btn btn-success">Submit</button>
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
        {{-- <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjNd5-n0m0NtT1qA4iKmgM3ahD2Podpas&libraries=places&callback=initialize">
        </script> --}}
        <script>
            $("#country_name").on("change", function() {
                $(".sel_country_first").removeClass("d-none");
            });
            $("#state_name").on("change", function() {
                $(".sel_country_state_first").removeClass("d-none");
            });
        </script>
    @endsection
