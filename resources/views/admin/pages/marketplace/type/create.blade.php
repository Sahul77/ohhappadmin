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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New Type</h1>
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
                        <li class="breadcrumb-item text-gray-500">Create Type</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('marketplace.type.list') }}" class="btn btn-sm btn-primary">Manage Type</a>
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
                            <div class="row gy-5 pb-8">
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Title</span>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark"
                                            placeholder="Ex. Bulletin" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-1">
                                            <span class="required">Image</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                        </label>
                                        <div class="mt-2">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="symbol symbol-40px w-40px">
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
                                            <span class="">Description</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Description is shown under Type of Hoarding Title. It's Optional"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <textarea class="form-control fs-6 text-dark" id="type_desc" data-kt-autosize="true" maxlength="160"></textarea>
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
