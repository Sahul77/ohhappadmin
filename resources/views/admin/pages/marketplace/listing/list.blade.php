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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Hoarding Listings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Manage Listing</li>
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
            <div class="row g-6 g-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <div class="card border-hover-primary">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px w-100px">
                                    <img src="{{ asset('admin/media/listing/hoarding/hoarding.png') }}" alt="image"
                                        class="p-5" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Active</span>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end:: Card header-->
                        <!--begin:: Card body-->
                        <div class="card-body px-9 py-5">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bolder text-dark">Types of Hoarding</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Create a new type for hoarding or manage existing one.</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.type.list') }}"><button type="button"
                                            class="btn btn-dark btn-sm">Manage</button></a>
                                </div>
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.type.create') }}">
                                        <button type="button" class="btn btn-sm btn-success">Create New</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end:: Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <div class="card border-hover-primary">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px w-100px">
                                    <img src="{{ asset('admin/media/listing/hoarding/category.png') }}" alt="image"
                                        class="p-5" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Active</span>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end:: Card header-->
                        <!--begin:: Card body-->
                        <div class="card-body px-9 py-5">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bolder text-dark">Hoarding Categories</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Create a new category for hoarding or manage existing one.</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.category.list') }}"><button type="button"
                                            class="btn btn-dark btn-sm">Manage</button></a>
                                </div>
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.category.create') }}">
                                        <button type="button" class="btn btn-sm btn-success">Create New</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end:: Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <div class="card border-hover-primary">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px w-100px">
                                    <img src="{{ asset('admin/media/listing/hoarding/attribute.png') }}" alt="image"
                                        class="p-5" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Active</span>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end:: Card header-->
                        <!--begin:: Card body-->
                        <div class="card-body px-9 py-5">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bolder text-dark">Hoarding Attributes</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Create a new attribute for hoarding or manage existing one.</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.attribute.list') }}"><button type="button"
                                            class="btn btn-dark btn-sm">Manage</button></a>
                                </div>
                                <div class="py-2 px-4 mb-3">
                                    <a href="{{ route('marketplace.attribute.create') }}">
                                        <button type="button" class="btn btn-sm btn-success">Create New</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end:: Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

