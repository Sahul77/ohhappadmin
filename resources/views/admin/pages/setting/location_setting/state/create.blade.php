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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New State</h1>
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
                        <li class="breadcrumb-item text-gray-500">Create State</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('setting.location_setting.state.manage') }}" class="btn btn-sm btn-primary">Manage
                        States</a>
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
                                    <div class="form-group ps-md-5 pe-md-2 px-4" onload="initialize()">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Country</span>
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
                                            <span class="required">State</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Enter Country State Name.."></i>
                                        </label>
                                        <input type="text" id="state_name" class="form-control fs-6 text-dark"
                                            placeholder="Ex. New Delhi">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_first">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">ISO-2 Name</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Short 2 Character Name of State (Ex. Delhi as DL)"></i>
                                        </label>
                                        <input type="text" id="iso_2" class="form-control fs-6 text-dark"
                                            placeholder="Ex. IN" maxlength="2"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none lat_lng">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Latitute</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Automatically Fetch Latitude by Entering State Name"></i>
                                        </label>
                                        <input type="text" id="latitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter State Name First" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none lat_lng">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Longitude</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Automatically Fetch Longitude by Entering State Name"></i>
                                        </label>
                                        <input type="text" id="longitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter State Name First" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none sel_country_first">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">State Image</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                        </label>
                                        <div class="mt-2">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="symbol symbol-80px w-50px">
                                                    <img src="{{ asset('admin/media/extra/upload.png') }}" alt="">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Add Photos">
                                                    <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                    <input id="file-input" type="file" />
                                                </label>
                                                <!--end::Edit-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
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
        <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjNd5-n0m0NtT1qA4iKmgM3ahD2Podpas&libraries=places&callback=initialize">
        </script>
        <script>
            var country_iso2;
            $("#country_name").on("change", function() {
                $(".sel_country_first").removeClass("d-none");
                country_iso2 = this.value;
            });

            var state_name, iso_2;
            $("#state_name").on("keypress", function() {
                var input = document.getElementById('state_name');
                var autocomplete = new google.maps.places.Autocomplete(input, {
                    types: ['(cities)'],
                    componentRestrictions: {
                        country: country_iso2
                    }
                });
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var place = autocomplete.getPlace();
                    console.log(place.address_components);
                    var address_list = place.address_components;
                    $(address_list).each(function(i, e) {
                        if (e.types.indexOf("administrative_area_level_1") !== -1) {
                            state_name = e.long_name;
                            iso_2 = e.short_name;
                            $("#iso_2").val(iso_2);
                            $("#state_name").val(state_name);
                            codeAddress(state_name);
                            return false;
                        } else if (e.types.indexOf("administrative_area_level_1") === -1) {
                            $("#iso_2").val('');
                            $("#state_name").val('');
                            $(".lat_lng, .map_container").addClass('d-none');
                            $("#latitude, #longitude").val('');
                        }
                    });
                });
            });

            function checkCountryInput() {
                $("#state_name").val(state_name);
                $("#iso_2").val(iso_2);
            }

            var geocoder, map;

            function initialize() {
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(0, 0);
                var mapOptions = {
                    zoom: 4,
                    center: latlng,
                    disableDefaultUI: true,
                    zoomControl: true,
                    mapTypeControl: true
                }
                map = new google.maps.Map(document.getElementById('map'), mapOptions);
                map.clear();
                codeAddress('india');
            }

            var marker;

            function codeAddress(data) {
                // var address = document.getElementById('country_name').value;
                var address = data;
                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        $(".lat_lng, .map_container").removeClass('d-none');
                        $("#latitude").val(results[0].geometry.location.lat());
                        $("#longitude").val(results[0].geometry.location.lng());
                        if (marker) {
                            marker.setPosition(results[0].geometry.location);
                        } else {
                            marker = new google.maps.Marker({
                                position: results[0].geometry.location,
                                map: map
                            });
                        }
                    } else {
                        $(".lat_lng, .map_container").addClass('d-none');
                        $("#latitude, #longitude").val('');
                        toastr.error('Enter a valid State name..');
                    }
                });
            }
        </script>
    @endsection
