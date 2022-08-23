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
                        <li class="breadcrumb-item text-gray-500">Referrals</li>
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
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('security') }}">Security</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('referrals') }}">Referrals</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        {{-- Basic Info --}}
        <!--begin::Referral program-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Body-->
            <div class="card-body py-10">
                <h2 class="mb-9">Referral Program</h2>
                <!--begin::Overview-->
                <div class="row mb-10">
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                        <h4 class="mb-0">How to use Referral Program</h4>
                        <p class="fs-6 fw-bold text-gray-600 py-4 m-0">Use images to enhance your post, improve its flow, add humor 
                        <br />and explain complex topics</p>
                        <a href="#" class="btn btn-light btn-active-light-primary fw-bolder">Get Started</a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <h4 class="text-gray-800 mb-0">Your Referral Link</h4>
                        <p class="fs-6 fw-bold text-gray-600 py-4 m-0">Plan your blog post by choosing a topic, creating an outline conduct 
                        <br />research, and checking facts</p>
                        <div class="d-flex">
                            <input id="kt_referral_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="https://oohap.in/admin/reffer/?refid=345re66787k8" />
                            <button id="kt_referral_program_link_copy_btn" class="btn btn-light btn-active-light-primary fw-bolder flex-shrink-0" data-clipboard-target="#kt_referral_link_input">Copy Link</button>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Overview-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Referral program-->
        <!--begin::Referred users-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header card-header-stretch">
                <!--begin::Title-->
                <div class="card-title">
                    <h3>Referred Users</h3>
                </div>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_tab_1" class="nav-link text-active-gray-800 me-4 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">Month</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_tab_2" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">2020</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_tab_3" class="nav-link text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">2019</a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Tab content-->
            <div id="kt_referred_users_tab_content" class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-flush align-middle gy-6">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-6 fw-bolder bg-lighten">
                                <tr>
                                    <th class="min-w-125px ps-9">Order ID</th>
                                    <th class="min-w-125px px-0">User</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="min-w-125px">Bonus</th>
                                    <th class="min-w-125px ps-0">Profit</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                    </td>
                                    <td>Nov 24, 2020</td>
                                    <td>26%</td>
                                    <td class="text-success">$1,200.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">578433345</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                    </td>
                                    <td>Aug 10, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$2,400.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                    </td>
                                    <td>May 06, 2020</td>
                                    <td>18%</td>
                                    <td class="text-success">$940.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">098669322</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                    </td>
                                    <td>Apr 30, 2020</td>
                                    <td>43%</td>
                                    <td class="text-success">$200.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">245899092</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                    </td>
                                    <td>Feb 29, 2020</td>
                                    <td>21%</td>
                                    <td class="text-success">$380.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">505432578</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                    </td>
                                    <td>Jan 08, 2020</td>
                                    <td>47%</td>
                                    <td class="text-success">$2,050.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">256899235</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                    </td>
                                    <td>Jan 02, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$820.00</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_referrals_2" class="card-body p-0 tab-pane fade" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-flush align-middle gy-6">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-6 fw-bolder bg-lighten">
                                <tr>
                                    <th class="min-w-125px ps-9">Order ID</th>
                                    <th class="min-w-125px px-0">User</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="min-w-125px">Bonus</th>
                                    <th class="min-w-125px ps-0">Profit</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">256899235</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                    </td>
                                    <td>Jan 02, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$820.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">245899092</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                    </td>
                                    <td>Feb 29, 2020</td>
                                    <td>21%</td>
                                    <td class="text-success">$380.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">505432578</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                    </td>
                                    <td>Jan 08, 2020</td>
                                    <td>47%</td>
                                    <td class="text-success">$2,050.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                    </td>
                                    <td>May 06, 2020</td>
                                    <td>18%</td>
                                    <td class="text-success">$940.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">578433345</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                    </td>
                                    <td>Aug 10, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$2,400.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">098669322</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                    </td>
                                    <td>Apr 30, 2020</td>
                                    <td>43%</td>
                                    <td class="text-success">$200.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                    </td>
                                    <td>Nov 24, 2020</td>
                                    <td>26%</td>
                                    <td class="text-success">$1,200.00</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_referrals_3" class="card-body p-0 tab-pane fade" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-flush align-middle gy-6">
                            <!--begin::Thead-->
                            <thead class="border-bottom border-gray-200 fs-6 fw-bolder bg-lighten">
                                <tr>
                                    <th class="min-w-125px ps-9">Order ID</th>
                                    <th class="min-w-125px px-0">User</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="min-w-125px">Bonus</th>
                                    <th class="min-w-125px ps-0">Profit</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">578433345</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                    </td>
                                    <td>Aug 10, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$2,400.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                    </td>
                                    <td>May 06, 2020</td>
                                    <td>18%</td>
                                    <td class="text-success">$940.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">256899235</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                    </td>
                                    <td>Jan 02, 2020</td>
                                    <td>35%</td>
                                    <td class="text-success">$820.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">245899092</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                    </td>
                                    <td>Feb 29, 2020</td>
                                    <td>21%</td>
                                    <td class="text-success">$380.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">505432578</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                    </td>
                                    <td>Jan 08, 2020</td>
                                    <td>47%</td>
                                    <td class="text-success">$2,050.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">098669322</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                    </td>
                                    <td>Apr 30, 2020</td>
                                    <td>43%</td>
                                    <td class="text-success">$200.00</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">678935899</td>
                                    <td class="ps-0">
                                        <a href="#" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                    </td>
                                    <td>Nov 24, 2020</td>
                                    <td>26%</td>
                                    <td class="text-success">$1,200.00</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Referred users-->
    </div>
    <!--end::Content wrapper-->
@endsection
