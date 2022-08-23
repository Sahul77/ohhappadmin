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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Company Details</h1>
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
                        <li class="breadcrumb-item text-gray-500">Company Details</li>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Company Profile</h1>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">

                                    <div class="px-4">
                                        <div class="row">

                                            <div class="col-md-12">
                                               
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company Name</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="OOHAP">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Legal Name </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="OOHAP">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Contact Person</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="OOHAP">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company Email</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="OOHAP@gmail.com">
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Company Address</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                   
                                    <div class="px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Country </span>
                                                        </label>
                                                    </div>
                                                    <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an option">
                                                    <option></option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">India</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company Address </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="123, XYZ street">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">City </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="kolkata">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Zip Code </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="153588">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company Phone </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="2564786">
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Additional Information</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                   
                                    <div class="px-4">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company Website</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="https://www.oohap.com">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Company VAT </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="">
                                                       
                                                    </div>
                                                </div>
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
