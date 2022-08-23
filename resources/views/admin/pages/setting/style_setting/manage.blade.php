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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Style Setting</h1>
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
                        <li class="breadcrumb-item text-gray-500">Style Setting</li>
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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">General Style Setting</h1>
                                <p class="mt-md-4 mb-3">Change main color, typography</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">General Options</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="General Options"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="mt-6">
                                            <div class="form-group">
                                                <label class="fs-6 mb-3">
                                                    <span class="">Main Color</span>
                                                </label>
                                                <input type="color" class="form-control p-2 rounded fs-6 text-dark"
                                                    placeholder="" style="width: 40px; height: 35px" value="#0011FF">
                                            </div>
                                        </div>
                                        <div class="form-group mt-6">
                                            <label class="fs-6 fw-bold">
                                                <span class="">Typography</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Typography"></i>
                                            </label>
                                        </div>
                                        <div class="row row-cols-1 row-cols-lg-2 g-3 g-lg-5">
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Color</span>
                                                    </label>
                                                    <input type="color" class="form-control p-2 rounded fs-6 text-dark"
                                                        placeholder="" style="width: 45px; height: 40px" value="#cccccc">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Font Size</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Line Height</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Font Weight</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark"
                                                        placeholder="bold or 400">
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Headings Fonts Family</h1>
                                <p class="mt-md-4 mb-3">H1, H2, H3, H4, H5 & H6 </p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group border border-bottom-2">
                                        <label class="fs-6 fw-bold p-4">
                                            <span class="">H1,H2,H3 Options</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="H1,H2,H3 Options"></i>
                                        </label>
                                    </div>
                                    <div class="px-4">
                                        <div class="row row-cols-1 row-cols-lg-2 g-3 g-lg-5">
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H1 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H2 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H3 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H4 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H5 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mt-8">
                                                <div class="form-group">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">H6 Font Family</span>
                                                    </label>
                                                    <input type="text" class="form-control fs-6 text-dark" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- custom css for all language --}}
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Custom CSS for all languages</h1>
                                <p class="mt-md-4 mb-3">Custom CSS for all languages</p>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0">
                                    <textarea class="form-control fs-6 text-dark" placeholder="Enter CSS Code Here.." rows="20" data-kt-autosize="true"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-success me-5">Reset Form</button>
                        <button class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
                {{-- end custom css for all language --}}
            </div>
        </div>
    </div>
    <!--end::Row-->
    <!--end::Content-->
    <!--end::Content wrapper-->
@endsection
@section('scripts')
@endsection
