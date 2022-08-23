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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New Attribute</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Marketplace</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Create Attribute</li>
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
                <div class="row mt-5">
                    {{-- Advanced Setting --}}
                    <div class="col-12">
                        <div class="bg-white rounded shadow-sm">
                            <div class="row gy-5 pb-6">
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Field Title</span>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark" placeholder="Ex. Size">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Field Type</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="Select an option" id="field_type">
                                                <option></option>
                                                <option value="text">Text Field</option>
                                                <option value="select">Select Box</option>
                                                <option value="radio">Radio Button</option>
                                                <option value="checkbox">Checkbox</option>
                                                <option value="textarea">Text Area</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Field Required</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status" type="radio"
                                                    value="1" id="field_req_yes" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="field_req_yes">
                                                    <div class="text-gray-800">Yes</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status" type="radio"
                                                    value="2" id="field_req_no" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="field_req_no">
                                                    <div class="text-gray-800">No</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Status</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="add_sub_category" type="radio"
                                                    value="1" id="status_active" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="status_active">
                                                    <div class="text-gray-800">Yes</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="add_sub_category" type="radio"
                                                    value="0" id="status_inactive" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="status_inactive">
                                                    <div class="text-gray-800">No</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none" id="text_input_fields">
                                    <div class="d-md-flex justify-content-center align-items-center my-5">
                                        <div class="col-md-6">
                                            <div class="form-group ps-md-5 pe-md-2 px-4">
                                                <label class="fs-6 mb-4">
                                                    <span class="required">Input Range</span>
                                                </label>
                                                <div id="kt_slider_basic" class="noUi-sm"></div>
                                                <div class="pt-5 d-flex justify-content-between">
                                                    <div class="fs-7">Min. length : <span
                                                            id="kt_slider_basic_min"></span>
                                                    </div>
                                                    <div class="fs-7">Max. length : <span
                                                            id="kt_slider_basic_max"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ps-md-8 pe-md-2">
                                                <label class="fs-6">
                                                    <span class="required">Input Validation</span>
                                                </label>
                                                <div class="d-flex flex-column">
                                                    <div class="form-check form-check-custom form-check-solid mt-5 me-10">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input me-2" name="radio_input"
                                                            type="radio" value="1"
                                                            id="doc_validation_alphanumeric" checked />
                                                        <!--end::Input-->

                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="doc_validation_alphanumeric">
                                                            <div class="text-gray-800">Allow All <span
                                                                    class="fw-bold">Alpha-Numeric</span> with <span
                                                                    class="fw-bold">Special Characters</span></div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid mt-5 me-10">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input me-2" name="radio_input"
                                                            type="radio" value="1" id="doc_validation_numbers" />
                                                        <!--end::Input-->

                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="doc_validation_numbers">
                                                            <div class="text-gray-800">Allow Only <span
                                                                    class="fw-bold">Numbers (0-9)</span></div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid mt-5 me-10">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input me-2" name="radio_input"
                                                            type="radio" value="1" id="doc_validation_alphabet" />
                                                        <!--end::Input-->

                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="doc_validation_alphabet">
                                                            <div class="text-gray-800">Allow Only <span
                                                                    class="fw-bold">Alphabets(a-z A-Z)</span></div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none" id="field_without_input">
                                    <div class="d-md-flex align-items-center my-5">
                                        <div class="col-md-6">
                                            <div class="form-group ps-md-5 pe-md-2 px-4">
                                                <label class="fs-6 mb-4">
                                                    <span class="required">Field Options</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            id="name" placeholder="Enter a Field Options"
                                                            autocomplete="off">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="javascript:;" id="btnAdd"
                                                            class="btn btn-info w-100 fs-6 mt-3 mt-sm-0"><i
                                                                class="fa-solid fa-plus fs-8"></i> Add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ps-md-8 pe-md-2">
                                                <label class="fs-6 mb-4">
                                                    <span class="required">Lists</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <select id="list" name="list" class="w-100" multiple>
                                                            {{-- Data Goes Here --}}
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="javascript:;" id="btnRemove"
                                                            class="btn btn-danger w-100 fs-6 mt-3 mt-sm-0"><i
                                                                class="fa-regular fa-trash-can fs-8"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
        <script>
            $(window).ready(function() {
                var options = {
                    selector: ".tinymce_basic"
                };
                tinymce.init(options);

                $("#field_type").on("change", field_type);

                function field_type(e) {
                    // console.log(e.currentTarget.value);
                    if ($.inArray(e.currentTarget.value, ['text', 'textarea']) >= 0) {
                        $("#text_input_fields").removeClass('d-none');
                        $("#field_without_input").addClass('d-none');
                    } else {
                        $("#text_input_fields").addClass('d-none');
                    }
                    if ($.inArray(e.currentTarget.value, ['select', 'radio', 'checkbox']) >= 0) {
                        $("#field_without_input").removeClass('d-none');
                        $("#text_input_fields").addClass('d-none');
                    } else {
                        $("#field_without_input").addClass('d-none');
                    }
                }
            });

            //  Ranger
            var slider = document.querySelector("#kt_slider_basic");
            var valueMin = document.querySelector("#kt_slider_basic_min");
            var valueMax = document.querySelector("#kt_slider_basic_max");

            noUiSlider.create(slider, {
                start: [3, 60],
                behaviour: 'smooth-steps',
                step: 1,
                format: {
                    to: (v) => v | 0,
                    from: (v) => v | 0
                },
                connect: true,
                range: {
                    "min": 1,
                    "max": 80
                }
            });

            slider.noUiSlider.on("update", function(values, handle) {
                if (handle) {
                    valueMax.innerHTML = values[handle];
                } else {
                    valueMin.innerHTML = values[handle];
                }
            });

            const btnAdd = document.querySelector('#btnAdd');
            const btnRemove = document.querySelector('#btnRemove');
            const sb = document.querySelector('#list');
            const name = document.querySelector('#name');

            btnAdd.onclick = (e) => {
                e.preventDefault();

                // validate the option
                if (name.value == '') {
                    alert('Please Enter Field Options.');
                    return;
                }
                // create a new option
                const option = new Option(name.value, name.value);
                // add it to the list
                sb.add(option, undefined);

                // reset the value of the input
                name.value = '';
                name.focus();
            };

            // remove selected option
            btnRemove.onclick = (e) => {
                e.preventDefault();

                // save the selected option
                let selected = [];

                for (let i = 0; i < sb.options.length; i++) {
                    selected[i] = sb.options[i].selected;
                }

                // remove all selected option
                let index = sb.options.length;
                while (index--) {
                    if (selected[index]) {
                        sb.remove(index);
                    }
                }
            };
        </script>
    @endsection
