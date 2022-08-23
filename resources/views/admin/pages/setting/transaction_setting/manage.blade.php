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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Transactions Settings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Transactions Settings</li>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Deposit Setting</h1>

                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">

                                    <div class="px-4">
                                        <div class="row">

                                            <div class="col-md-12">
                                               
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Deposit Prefix </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="DEP">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Deposit start no </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="1">
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Deposit start no </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark"
                                                            placeholder="" value="[DEP][yyyy][mm][dd][number]">
                                                            <small class="mt-md-4 mb-3 text-muted">ex [DEP] = Deposit Prefix,[yyyy] =
                                                                'Current Year (2022)'[yy] ='Current Year (22)',[mm] =
                                                                'Current Month(Jun)',[m] =
                                                                'Current Month(06)',[dd] = 'Current Date (13)',[number] =
                                                                'Invoice Number (0001)'
                                                            </small>
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
                                <h1 class="text-dark fw-bolder m-0 fs-4">Expense Setting</h1>
                            </div>
                            <div class="col-md-9">
                                <div class="bg-white rounded shadow-sm p-0 pb-7">
                                   
                                    <div class="px-4">
                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Expense Prefix  </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="EX">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Expense start no </span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="1">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-6">
                                                    <div class="form-group">
                                                        <label class="fs-6 mb-3">
                                                            <span class="">Expense Number Format</span>
                                                        </label>
                                                        <input type="text" class="form-control fs-6 text-dark" value="[EX][yyyy][mm][dd][number]">
                                                        <small class="mt-md-4 mb-3 text-muted">ex [DEP] = Deposit Prefix,[yyyy] =
                                                            'Current Year (2022)'[yy] ='Current Year (22)',[mm] =
                                                            'Current Month(Jun)',[m] =
                                                            'Current Month(06)',[dd] = 'Current Date (13)',[number] =
                                                            'Invoice Number (0001)'
                                                        </small>
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
