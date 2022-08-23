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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Account Overview</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Crafted</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Account</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Security</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor" id="">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div class="app-content flex-column-fluid" id="kt_app_content">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{ asset('admin/media/avatars/300-1.jpg') }}" alt="image" />
                            <div
                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-primary rounded-circle border border-4 border-white h-20px w-20px">
                            </div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max
                                        Smith</a>
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                    <span class="">
                                        <i class="fa-solid fa-badge-check fs-3 text-primary"></i>
                                    </span>
                                    <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3">CEO</a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="#"
                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-laptop-code"></i>
                                        </span>
                                        <!--end::Svg Icon-->OOHAP Founder
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <!--end::Svg Icon-->SF, Bay Area
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </span>
                                        <!--end::Svg Icon-->admin@gmail.com
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="6500"
                                                data-kt-countup-prefix="<i class='fa-solid fa-indian-rupee-sign fs-3 text-dark'></i>">
                                                0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Today Earning</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                <i class="fa-solid fa-arrow-down text-danger"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Services Provided (Today)</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60"
                                                data-kt-countup-prefix="%">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
                                    <span class="fw-bolder fs-6">50%</span>
                                </div>
                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('profile') }}">Overview</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('setting') }}">Settings</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('security') }}">Security</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('referrals') }}">Referrals</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        {{-- Basic Info --}}
        <!--begin::Row-->
        <div class="row g-xxl-9">
            <!--begin::Col-->
            <div class="col-xxl-8">
                <!--begin::Security summary-->
                <div class="card card-xxl-stretch mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-900">Security Summary</h3>
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder"
                                id="kt_security_summary_tabs">
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary active" data-kt-countup-tabs="true"
                                        data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours">12 Hours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                        id="kt_security_summary_tab_day" href="#kt_security_summary_tab_pane_day">Day</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                        id="kt_security_summary_tab_week" href="#kt_security_summary_tab_pane_week">Week</a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-7 pb-0 px-0">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row p-0 mb-5 px-9">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-success d-block">User Sign-in</span>
                                            <span class="fs-2hx fw-bolder text-gray-900" data-kt-countup="true"
                                                data-kt-countup-value="36899">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-primary d-block">Admin Sign-in</span>
                                            <span class="fs-2hx fw-bolder text-gray-900" data-kt-countup="true"
                                                data-kt-countup-value="72">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-danger d-block">Failed Attempts</span>
                                            <span class="fs-2hx fw-bolder text-gray-900" data-kt-countup="true"
                                                data-kt-countup-value="291">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row p-0 mb-5 px-9">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-success d-block">User Sign-in</span>
                                            <span class="fs-2hx fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="30467">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-primary d-block">Admin Sign-in</span>
                                            <span class="fs-2hx fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="120">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-danger d-block">Failed Attempts</span>
                                            <span class="fs-2hx fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="23">0</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade" id="kt_security_summary_tab_pane_week" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row p-0 mb-5 px-9">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-lg-4 fs-6 fw-bold text-success d-block">User Sign-in</span>
                                            <span class="fs-lg-2hx fs-2 fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="340">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-lg-4 fs-6 fw-bold text-primary d-block">Admin Sign-in</span>
                                            <span class="fs-lg-2hx fs-2 fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="90">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div
                                            class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-lg-4 fs-6 fw-bold text-danger d-block">Failed Attempts</span>
                                            <span class="fs-lg-2hx fs-2 fw-bolder text-gray-800" data-kt-countup="true"
                                                data-kt-countup-value="230">0</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Security summary-->
            </div>
            <!--end::Col-->
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Heading-->
                    <div class="card-title">
                        <h3>Login Sessions</h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <div class="my-1 me-4">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2"
                                data-placeholder="Select Hours" data-hide-search="true">
                                <option value="1" selected="selected">1 Hours</option>
                                <option value="2">6 Hours</option>
                                <option value="3">12 Hours</option>
                                <option value="4">24 Hours</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-250px">Location</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-150px">Device</th>
                                    <th class="min-w-150px">IP Address</th>
                                    <th class="min-w-150px">Time</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fw-6 fw-bold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                                    </td>
                                    <td>Chrome - Windows</td>
                                    <td>236.125.56.78</td>
                                    <td>2 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                                    </td>
                                    <td>Safari - Mac OS</td>
                                    <td>236.125.56.78</td>
                                    <td>10 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-bolder">ERR</span>
                                    </td>
                                    <td>Firefox - Windows</td>
                                    <td>236.125.56.10</td>
                                    <td>20 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                                    </td>
                                    <td>iOS - iPhone Pro</td>
                                    <td>236.125.56.54</td>
                                    <td>30 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-warning fs-7 fw-bolder">WRN</span>
                                    </td>
                                    <td>Samsung Noted 5- Android</td>
                                    <td>236.100.56.50</td>
                                    <td>40 mins ago</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Login sessions-->
        </div>
        <!--end::Content wrapper-->
    @endsection
