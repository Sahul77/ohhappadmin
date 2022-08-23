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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Notification Templates</h1>
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
                        <li class="breadcrumb-item text-gray-600">Notification</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Templates</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center py-2"> --}}
                <!--begin::Button-->
                {{-- <a href="{{ route('setting.location_setting.country.manage') }}" class="btn btn-sm btn-primary">Manage
                        Countries</a> --}}
                <!--end::Button-->
                {{-- </div> --}}
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
                    <div class="col-12 p-0">
                        <div class="mb-3 hover-scroll-x">
                            <div class="d-grid">
                                <ul class="nav nav-tabs flex-nowrap text-nowrap">
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 active"
                                            data-bs-toggle="tab" href="#kt_tab_pane_1">Login/Signup</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                            data-bs-toggle="tab" href="#kt_tab_pane_2">Vendor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                <div class="card bg-transparent">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 p-0">
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                                <h5>Login/Signup Templates</h5>
                                            </div>
                                        </div>
                                        <!--end::Card toolbar-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex justify-content-end align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute me-6">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-user-table-filter="search"
                                                    class="form-control form-control-solid w-400px ps-4" placeholder="Search Login/Signup Templates" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped gy-4 gs-7">
                                        <thead class="">
                                            <tr
                                                class="bg-secondary text-dark fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                <th class="min-w-500px">Description</th>
                                                <th class="min-w-40px text-center">Push</th>
                                                <th class="min-w-40px text-center">In-App</th>
                                                <th class="min-w-40px text-center">SMS</th>
                                                <th class="min-w-40px text-center">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Signup with Email (Email Verification)</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fw-bold fst-italic">Signup with Number (Mobile Number Verification)</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Login Using Email (First Time)</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fw-bold fst-italic">Login Using Number (First Time)</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Login With a New Device</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Welcome Message (on Successfull Registration)</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                <div class="card bg-transparent">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 p-0">
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                                <h5>Vendor Templates</h5>
                                            </div>
                                        </div>
                                        <!--end::Card toolbar-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex justify-content-end align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute me-6">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-user-table-filter="search"
                                                    class="form-control form-control-solid w-400px ps-4" placeholder="Search Vendor Templates" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped gy-4 gs-7">
                                        <thead class="">
                                            <tr
                                                class="bg-secondary text-dark fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                <th class="min-w-500px">Description</th>
                                                <th class="min-w-40px text-center">Push</th>
                                                <th class="min-w-40px text-center">In-App</th>
                                                <th class="min-w-40px text-center">SMS</th>
                                                <th class="min-w-40px text-center">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Vendor Registration Request</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fw-bold fst-italic">Vendor Approved</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-6 border-bottom border-secondary">
                                                <td>
                                                    <div>
                                                        <a href="{{ route('setting.notification_setting.view_template') }}" class="text-info fst-italic fw-bold">Vendor Rejected</a>
                                                        <h6 class="fs-8 mt-2 fw-bold text-gray-500">last modified on 2022-06-25</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg1" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg2" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg3" checked/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check w-100 d-flex justify-content-center form-check-custom form-check-sm pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexRadioLg4" checked/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    @endsection

    @section('scripts')
    @endsection
