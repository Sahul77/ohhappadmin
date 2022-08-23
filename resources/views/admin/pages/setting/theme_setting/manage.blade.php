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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Theme Settings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Theme Settings</li>
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
                                                            <span class="">Sitename</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="OOHAP">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group">
                                            <label class="fs-6 p-4">
                                                <span class="">Logo</span>
                                            </label>
                                        </div>
                                        <div class="px-4">
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Logo</option>
                                                <option value="2">Logo & Sitename</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group ">
                                            <label class="fs-6 fw-bold p-4">
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="googleLogin">
                                                    <label class="form-check-label" for="googleLogin">
                                                        Active Pre-loader
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-group ">
                                            <label class="fs-6 fw-bold p-4">
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="customcolor">
                                                    <label class="form-check-label" for="customcolor">
                                                        Active custom color
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row ">
                            <div class="col-md-3 my-md-5">
                                <h1 class="text-dark fw-bolder m-0 fs-4">Logo & Fevicon Setting</h1>
                                <p class="mt-md-4 mb-3"> Change logo & fevicon Images</p>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">Company Logo</span>
                                        </label>
                                        <div class="mt-2 px-4 ">
                                            <div class="image-input image-input-outline"
                                                data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="symbol symbol-80px w-50px">
                                                    <img src="{{ asset('admin/media/listing/item/upload.png') }}"
                                                        alt="">
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
                                    <div class="form-group">
                                        <label class="fs-6 p-4">
                                            <span class="">favicon</span>
                                        </label>
                                        <div class="mt-2 px-4 ">
                                            <div class="image-input image-input-outline"
                                                data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="symbol symbol-80px w-50px">
                                                    <img src="{{ asset('admin/media/listing/item/upload.png') }}"
                                                        alt="">
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
