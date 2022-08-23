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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New Country</h1>
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
                        <li class="breadcrumb-item text-gray-500">Create Country</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('setting.location_setting.country.manage') }}" class="btn btn-sm btn-primary">Manage
                        Countries</a>
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
                                            <span class="required">Country Name</span>
                                        </label>
                                        <input type="text" id="country_name" class="form-control fs-6 text-dark"
                                            placeholder="Ex. India" onblur="checkCountryInput()">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">ISO-3 Name</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Short 3 Character Name of Country (Ex. INDIA as IND)"></i>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark" placeholder="Ex. IND" maxlength="3" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">ISO-2 Name</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Short 2 Character Name of Country (Ex. INDIA as IN)"></i>
                                        </label>
                                        <input type="text" id="iso_2" class="form-control fs-6 text-dark"
                                            placeholder="Ex. IN" maxlength="2" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Phone Code</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Country Phone Number Prefix Code Without (+) Sign (For Ex. INDIA as 91)"></i>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark" placeholder="Ex. 91">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none lat_lng">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Latitute</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Automatically Fetch Latitude by Entering Country Name"></i>
                                        </label>
                                        <input type="text" id="latitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter Country Name First" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none lat_lng">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Longitude</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Automatically Fetch Longitude by Entering Country Name"></i>
                                        </label>
                                        <input type="text" id="longitude" class="form-control fs-6 text-dark"
                                            placeholder="Enter Country Name First" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Country Image</span>
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
                                                    value="1" id="doc_status_active" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="doc_status_active">
                                                    <div class="text-gray-800">Active</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status_radio" type="radio"
                                                    value="2" id="doc_status_inactive" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="doc_status_inactive">
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
                                {{-- <div class="col-12">
                                        <div class="form-group border border-top-0 border-bottom-2 ps-5">
                                            <label class="fs-6 mb-2">
                                                <span class="">Document Description</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <h1 style="text-align: center;">OOHAP COMPANY</h1>
                                            </textarea>
                                        </div>
                                    </div> --}}
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
            var country_name, iso_2;
            $("#country_name").on("keypress", function() {
                var input = document.getElementById('country_name');
                var autocomplete = new google.maps.places.Autocomplete(input, {
                    types: ['(regions)']
                });
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var place = autocomplete.getPlace();
                    // console.log(place.address_components);
                    var address_list = place.address_components;
                    $(address_list).each(function(i, e) {
                        if (e.types.indexOf("country") !== -1) {
                            country_name = e.long_name;
                            iso_2 = e.short_name;
                            $("#iso_2").val(iso_2);
                            $("#country_name").val(country_name);
                            codeAddress(country_name);
                        }
                    });
                });
            });

            function checkCountryInput() {
                $("#country_name").val(country_name);
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
                        toastr.error('Enter a valid country name..');
                    }
                });
            }
        </script>
    @endsection
