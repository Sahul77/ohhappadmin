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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Users Lists</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Management</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">List Users</li>
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
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-users fs-1 text-success"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-5">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">50,000</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">Total Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->2.1%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-user-check fs-1 text-primary"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">25,300</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">Active Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->2.1%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-user-xmark fs-1 text-danger"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">24,500</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">In-Active Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-danger fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-down fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->0.47%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-person fs-1 text-info"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">26,300</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">Male Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->0.47%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-person-dress fs-1 text-success"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">22,800</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">Female Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->0.47%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <i class="fa-solid fa-transporter fs-1 text-dark"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">908</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-bold fs-6 text-gray-400">Others Users</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                    <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                </span>
                                <!--end::Svg Icon-->0.47%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <div class="card pt-2 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>New users</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_year_tab" class="nav-link text-active-primary active"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">Daily</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">Weekly</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">Monthly</a>
                                </li>
    
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-users fs-1 text-success"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-5">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">89,900</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">Total Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->2.1%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-user-check fs-1 text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-7">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">25,300</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">Active Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->2.1%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-user-xmark fs-1 text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-7">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">24,500</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">In-Active Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-down fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->0.47%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-person fs-1 text-info"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-7">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">26,300</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">Male Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->0.47%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-person-dress fs-1 text-success"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-7">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">22,800</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">Female Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->0.47%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 col-xl-2 mb-xl-10">
                            <!--begin::Card widget 2-->
                            <div class="card h-lg-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                    <!--begin::Icon-->
                                    <div class="m-0">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                            <i class="fa-solid fa-transporter fs-1 text-dark"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column my-7">
                                        <!--begin::Number-->
                                        <span class="fw-bold fs-2x text-gray-800 lh-1 ls-n2">908</span>
                                        <!--end::Number-->
                                        <!--begin::Follower-->
                                        <div class="m-0">
                                            <span class="fw-bold fs-6 text-gray-400">Others Users</span>
                                        </div>
                                        <!--end::Follower-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <i class="fa-solid fa-arrow-up fs-9 me-2 text-white"></i>
                                        </span>
                                        <!--end::Svg Icon-->0.47%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 2-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <div class="row gx-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-12 mb-5">
                    <!--begin::Chart widget 15-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Users Stats</span>
                                <span class="text-gray-400 pt-2 fw-bold fs-6">Statistics by Countries</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-100px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Remove</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Mute</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Chart container-->
                            <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-300px"></div>
                            <!--end::Chart container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 15-->
                </div>
                <!--end::Col-->
            </div>
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Users" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end flex-row-fluid me-5" style="width: 220px">
                            <!--begin::Daterangepicker-->
                            <input class="form-control form-control-solid" placeholder="Pick date range"
                                id="kt_daterangepicker_4" />
                        </div>
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <i class="fa-solid fa-filter"></i>
                                </span>
                                <!--end::Svg Icon-->Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">A/c Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="account_type"
                                                    value="1" />
                                                <span class="form-check-label">User</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="account_type"
                                                    value="2" />
                                                <span class="form-check-label">Vendor</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Account Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="account_status"
                                                    value="1" />
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="account_status"
                                                    value="2" />
                                                <span class="form-check-label">In-active</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">KYC Verified:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="kyc_status" value="1" />
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="kyc_status" value="2" />
                                                <span class="form-check-label">No</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Gender:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="gender_type"
                                                    value="1" />
                                                <span class="form-check-label">Male</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="gender_type"
                                                    value="2" />
                                                <span class="form-check-label">Female</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="gender_type"
                                                    value="3" />
                                                <span class="form-check-label">Other</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <label class="form-label fs-6 fw-bold">Country:</label>
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select a Country">
                                            <option></option>
                                            <option value="india">India</option>
                                            <option value="usa">USA</option>
                                            <option value="australia">Australia</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-bold px-6"
                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_export_users">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <i class="fa-solid fa-down-to-line"></i>
                                </span>
                                <!--end::Svg Icon-->Export
                            </button>
                            <!--end::Export-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete
                                Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Export Users</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Select Export
                                                    Format:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2"
                                                    data-placeholder="Select a format" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bolder">
                                                    <option></option>
                                                    <option value="excel">Excel</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="cvs">CVS</option>
                                                    <option value="zip">ZIP</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Card-->
                        <!--begin::Modal - Add task-->

                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">

                        <table class="table display nowrap align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                    </th>
                                    <th class="min-w-150px">Users</th>
                                    <th class="min-w-100px">Type</th>
                                    <th class="min-w-100px">Last Login</th>
                                    <th class="min-w-125px">IP Address</th>
                                    <th class="min-w-125px">KYC</th>
                                    <th class="min-w-125px">Joined Date</th>
                                    <th class="min-w-65px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('scripts')
    {{-- <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/table.js">
    </script> --}}
    <script src="{{ asset('admin/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/user-management/users/list/add.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/contacts/edit-contact.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script>
        // custom Date Range
        var start = moment().subtract(29, "days");
        var end = moment();

        // function cb(start, end) {
        //     $("#kt_daterangepicker_4").html(start.format("YYYY-MM-DD") + " - " + end.format("YYYY-MM-DD"));
        // }

        $("#kt_daterangepicker_4").daterangepicker({
            locale: {
                format: 'DD/MM/YYYY',
                "separator": " - "
            },
            startDate: start,
            endDate: end,
            ranges: {
                "Today": [moment(), moment()],
                "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                "Last 7 Days": [moment().subtract(6, "days"), moment()],
                "Last 30 Days": [moment().subtract(29, "days"), moment()],
                "This Month": [moment().startOf("month"), moment().endOf("month")],
                "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf(
                    "month")],
                "Last Year": [moment().startOf('month').subtract(1, 'year'), moment().startOf('month').subtract(1,
                        'days') // 2017-03-31
                ]
            }
        });

        // cb(start, end);

        /* Formatting function for row details - modify as you need */
        function format(d) {
            // `d` is the original data object for the row
            return (`<div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <div class="row row-cols-2 row-cols-lg-2 g-4 g-lg-5">
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Member since</span>
                                    <span class="text-dark">${d.created_at}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Email</span>
                                    <span class="text-dark">${d.email}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Gender</span>
                                    <span class="text-dark">${d.gender}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Address</span>
                                    <span class="text-dark">${d.address}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Country</span>
                                    <div class="text-dark d-flex align-items-center">
                                        <img src="{{ asset('admin/media/flags/${d.flag_icon}') }}"
                                            class="w-25px me-3 rounded-circle" alt="">
                                        <div class="d-flex flex-column">
                                            <span class="text-gray-800 fw-bolder text-hover-primary">${d.country}</span>
                                                <span class="text-dark">${d.state}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Phone</span>
                                    <span class="text-dark">+${d.country_code} ${d.phone}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="row row-cols-2 row-cols-lg-2 g-4 g-lg-5">
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Booked Hoardings</span>
                                    <span class="text-dark">${d.booked_hoardings}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Sold Hoardings</span>
                                    <span class="text-dark">${d.sold_hoardings}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Request Hoardings</span>
                                    <span class="text-dark">${d.request_hoardings}</span>
                                </div>
                                
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Approved Hoardings</span>
                                    <span class="text-dark">${d.approved_hoardings}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Declined Hoardings</span>
                                    <span class="text-dark">${d.declined_hoardings}</span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">New Hoardings</span>
                                    <span class="text-dark">${d.new_hoardings}</span>
                                </div>
                            </div>
                        </div>
                    </div>`);
        }

        $(document).ready(function() {
            var table = $('#kt_table_users').DataTable({
                ajax: "{{ route('ajax.user_management.json') }}",
                columns: [{
                        className: 'dt-control',
                        orderable: false,
                        data: null,
                        defaultContent: '',
                    },
                    {
                        data: 'name',
                        render: function(data, type, row, meta) {
                            return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="{{ route('management.user_management.view') }}">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('admin/media/avatars/${row.profile_img}') }}"
                                                        alt="${row.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('management.user_management.view') }}"
                                                class="text-gray-800 text-hover-primary mb-1">${row.name}</a>
                                            <span class="text-primary">${row.email}</span>
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'user_type',
                        render: function(data, type, row, meta) {
                            let user_type_class = (row.user_type == 'vendor') ? 'badge-primary' :
                                'badge-success';
                            return `<div class="badge ${user_type_class} fw-bolder">
                                        ${row.user_type}
                                    </div>`;
                        }
                    },
                    {
                        data: 'last_login',
                        render: function(data, type, row, meta) {
                            return `<div class="badge badge-light fw-bolder">
                                        ${row.last_login}
                                    </div>`;
                        }
                    },
                    {
                        data: 'ip_address',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.ip_address}</div>`;
                        }
                    },
                    {
                        data: 'kyc',
                        render: function(data, type, row, meta) {
                            let kyc_class = (row.kyc == 'Not Verified') ? 'badge-danger' :
                                'badge-primary';
                            return `<div class="badge ${kyc_class} fw-bolder"><i class="fa-solid fa-octagon-exclamation text-white me-1"></i>${row.kyc}
                                    </div>`;
                        }
                    },
                    {
                        data: 'created_at',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.created_at}</div>`;
                        }
                    },
                    {
                        data: 'status',
                        render: function(data, type, row, meta) {
                            let status_class = (row.status == 'active') ? 'badge-light-primary' :
                                'badge-light-danger';
                            return `<div class="badge ${status_class} fw-bolder">${row.status}</div>`;
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<div class="btn-group">
                                        <button class="btn btn-light btn-active-light-primary text-end btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{ route('management.user_management.view') }}">Edit</a></li>
                                            <li><a class="dropdown-item" role="button" onclick="onDelete()">Delete</a></li>
                                        </ul>
                                    </div>`;
                        }
                    },
                ],
                order: [
                    [1, 'asc']
                ],
            });

            // Add event listener for opening and closing details
            $('#kt_table_users tbody').on('click', 'td.dt-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
        });

        // Delete
        function onDelete() {
            Swal.fire({
                text: "Are you sure you want to delete ?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function(result) {
                if (result.value) {
                    Swal.fire({
                        text: "You have deleted this Data!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function() {
                        // Remove current row
                        datatable.row($(parent)).remove().draw();
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Data not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    });
                }
            });
        }
    </script>
@endsection
