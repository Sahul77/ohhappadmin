@extends('admin.layout.main')

@section('main_content')
    {{-- Content Wrapper --}}
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div class="app-toolbar align-items-center justify-content-between">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="d-flex flex-column align-items-start me-3 gap-2">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">View Vendor Details</h1>
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
                        <li class="breadcrumb-item text-gray-600"><a href="{{ route('management.vendor.list') }}"
                                class="text-gray-600 text-hover-primary">List Vendors</a></li>
                        <li class="breadcrumb-item text-gray-500">View User</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor" id="kt_toolbar_primary_button">Create New</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="app-content flex-column-fluid" id="kt_app_content">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <img src="{{ asset('admin/media/avatars/300-6.jpg') }}" alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">Emma
                                    Smith</a>
                                <!--end::Name-->
                                <!--begin::Rating-->
                                <div class="text-end pe-0 mb-3" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-solid fa-star text-warning me-1"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-solid fa-star text-warning me-1"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-solid fa-star text-warning me-1"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-solid fa-star me-1"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-solid fa-star me-1"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-light-primary d-inline">Vendor</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <!--begin::Info heading-->
                                <div class="fw-bolder mb-3">Assigned Tickets
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                        data-bs-trigger="hover" data-bs-html="true"
                                        data-bs-content="Number of support tickets assigned, closed and pending this week."></i>
                                </div>
                                <!--end::Info heading-->
                                <div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bolder text-gray-700">
                                            <span class="w-75px">243</span>
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="fw-bold text-muted">Total</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                        <div class="fs-4 fw-bolder text-gray-700">
                                            <span class="w-50px">56</span>
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                <i class="fa-solid fa-arrow-down text-danger"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="fw-bold text-muted">Solved</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bolder text-gray-700">
                                            <span class="w-50px">188</span>
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success">
                                                <i class="fa-solid fa-arrow-up text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="fw-bold text-muted">Open</div>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                    href="#kt_user_view_details" role="button" aria-expanded="false"
                                    aria-controls="kt_user_view_details">Details
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-angle-up"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                    <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_update_details">Edit</a>
                                </span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>
                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Account ID</div>
                                    <div class="text-gray-600">ID-45453423</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">subAdmin@gmail.com</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Phone</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">+91-8287110840</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Referred By</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">melody@altbox.com</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Address</div>
                                    <div class="text-gray-600">101 Collin Street,
                                        <br />Melbourne 3000 VIC
                                        <br />Australia
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Language</div>
                                    <div class="text-gray-600">English</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Last Login</div>
                                    <div class="text-gray-600">22 Sep 2022, 5:30 pm</div>
                                    <!--begin::Details item-->
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true"
                                data-bs-toggle="tab" href="#kt_user_view_overview_product_viewed">Products</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_sales">Sales</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_returns">Returns</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_orders">Orders</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_shipping">Shipping</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_security">Security</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_user_view_overview_product_viewed" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Products Report</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="">
                                    <!--begin::Table wrapper-->
                                    <div class="card card-flush">
                                        <!--begin::Card header-->
                                        <div
                                            class="card-header align-items-center justify-content-between py-5 gap-1 gap-md-3">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223"
                                                                width="8.15546" height="2" rx="1"
                                                                transform="rotate(45 17.0365 15.1223)"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-ecommerce-order-filter="search"
                                                        class="form-control form-control-solid w-250px ps-14"
                                                        placeholder="Search Report" />
                                                </div>
                                                <!--end::Search-->
                                                <!--begin::Export buttons-->
                                                <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                                                <!--end::Export buttons-->
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Filter-->
                                            <div class="w-150px">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Rating"
                                                    data-kt-ecommerce-order-filter="rating">
                                                    <option></option>
                                                    <option value="all">All</option>
                                                    <option value="rating-5">5 Stars</option>
                                                    <option value="rating-4">4 Stars</option>
                                                    <option value="rating-3">3 Stars</option>
                                                    <option value="rating-2">2 Stars</option>
                                                    <option value="rating-1">1 Stars</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                            <!--end::Filter-->

                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
                                                <!--begin::Daterangepicker-->
                                                <input class="form-control form-control-solid w-100 mw-250px"
                                                    placeholder="Pick date range"
                                                    id="kt_ecommerce_report_views_daterangepicker" />
                                                <!--end::Daterangepicker-->
                                                <!--begin::Export dropdown-->
                                                <button type="button" class="btn btn-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="12.75" y="4.25"
                                                                width="12" height="2" rx="1"
                                                                transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                            <path
                                                                d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                                fill="#C4C4C4" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Export Report
                                                </button>
                                                <!--begin::Menu-->
                                                <div id="kt_ecommerce_report_views_export_menu"
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-export="excel">Export as Excel</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-export="csv">Export as CSV</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-export="pdf">Export as PDF</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::Export dropdown-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">

                                                <table class="table display nowrap align-middle table-row-dashed fs-6 gy-5"
                                                    id="kt_table_users">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <!--begin::Table row-->
                                                        <tr
                                                            class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                            <th class="w-10px">S. No.</th>
                                                            <th class="min-w-150px">Product</th>
                                                            <th class="min-w-100px">Rating</th>
                                                            <th class="min-w-100px">Price</th>
                                                            <th class="min-w-100px">Action</th>
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
                                    <!--end::Products-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_sales" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Sales Reports</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-ecommerce-order-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="Search Report" />
                                        </div>
                                        <!--end::Search-->
                                        <!--begin::Export buttons-->
                                        <div id="kt_ecommerce_report_sales_export" class="d-none"></div>
                                        <!--end::Export buttons-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Daterangepicker-->
                                        <input class="form-control form-control-solid w-100 mw-250px"
                                            placeholder="Pick date range"
                                            id="kt_ecommerce_report_sales_daterangepicker" />
                                        <!--end::Daterangepicker-->
                                        <!--begin::Export dropdown-->
                                        <button type="button" class="btn btn-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="12.75" y="4.25"
                                                        width="12" height="2" rx="1"
                                                        transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                    <path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Export Report
                                        </button>
                                        <!--begin::Menu-->
                                        <div id="kt_ecommerce_report_sales_export_menu"
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="excel">Export as Excel</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="csv">Export as CSV</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="pdf">Export as PDF</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Export dropdown-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_report_sales_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date</th>
                                                    <th class="text-end min-w-75px">No. Orders</th>
                                                    <th class="text-end min-w-75px">Products Sold</th>
                                                    <th class="text-end min-w-75px">Tax</th>
                                                    <th class="text-end min-w-100px">Total</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">16</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$60.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$402.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">16</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$47.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$312.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">23</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$243.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$53.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$350.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$35.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$234.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$52.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$349.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$37.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$248.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$44.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$295.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$83.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$553.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$50.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$333.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$28.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$186.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$83.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$553.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$23.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$154.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$86.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$573.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$237.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">16</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$47.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$311.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">13</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$38.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$250.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$20.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$131.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">13</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$5.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$31.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">24</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$71.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$476.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$56.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$376.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$22.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$148.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$40.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$267.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$34.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$229.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">18</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$44.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$294.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$67.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$446.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$13.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$89.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$41.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$275.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">16</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$80.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$531.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$83.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$554.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$61.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$408.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$24.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$158.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$19.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$128.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$32.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$214.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$13.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$86.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$40.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$264.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">22</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$5.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$32.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$2.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$16.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$51.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$337.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$243.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">23</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$65.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$434.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$61.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$408.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$21.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$139.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$14.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$96.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">13</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$56.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$376.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$29.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$192.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$44.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$290.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$89.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$591.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">24</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$50.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$336.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No Orders=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No Orders=-->
                                                    <!--begin::Products sold=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::Products sold=-->
                                                    <!--begin::Tax=-->
                                                    <td class="text-end pe-0">$83.00</td>
                                                    <!--end::Tax=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$550.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_returns" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Returns</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-ecommerce-order-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="Search Report" />
                                        </div>
                                        <!--end::Search-->
                                        <!--begin::Export buttons-->
                                        <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                        <!--end::Export buttons-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Daterangepicker-->
                                        <input class="form-control form-control-solid w-100 mw-250px"
                                            placeholder="Pick date range"
                                            id="kt_ecommerce_report_returns_daterangepicker" />
                                        <!--end::Daterangepicker-->
                                        <!--begin::Export dropdown-->
                                        <button type="button" class="btn btn-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="12.75" y="4.25"
                                                        width="12" height="2" rx="1"
                                                        transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                    <path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Export Report
                                        </button>
                                        <!--begin::Menu-->
                                        <div id="kt_ecommerce_report_returns_export_menu"
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="excel">Export as Excel</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="csv">Export as CSV</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="pdf">Export as PDF</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Export dropdown-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_report_returns_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date</th>
                                                    <th class="text-end min-w-75px">No. Orders Returned</th>
                                                    <th class="text-end min-w-75px">No. Orders Refunded</th>
                                                    <th class="text-end min-w-75px">No. Orders Replaced</th>
                                                    <th class="text-end min-w-100px">Total Refunded</th>
                                                    <th class="text-end min-w-100px">Total Replaced</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$75.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$103.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$79.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$179.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$34.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$111.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$25.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$105.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Aug 19, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$66.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$40.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$77.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$91.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$90.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$183.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$97.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$131.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$67.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$145.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$64.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$57.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$66.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$72.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Aug 19, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$64.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$149.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$94.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$143.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$56.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Aug 19, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$61.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$110.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$40.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$139.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$23.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$39.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$53.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$22.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$52.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$70.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$140.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$84.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$143.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$22.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$58.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$89.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$161.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$63.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$108.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$29.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$35.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$120.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$60.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$136.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$36.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$93.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$55.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$134.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$100.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$38.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$115.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$45.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$53.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$150.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$30.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$130.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$66.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$38.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$114.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$80.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$144.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$61.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$137.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$39.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$125.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$97.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$126.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$21.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">4</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$59.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$99.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$67.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$157.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$0.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$48.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">0</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$87.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$127.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::No products returned=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No products returned=-->
                                                    <!--begin::No orders refunded=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders refunded=-->
                                                    <!--begin::No orders replaced=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No orders replaced=-->
                                                    <!--begin::Total refunded=-->
                                                    <td class="text-end pe-0">$80.00</td>
                                                    <!--end::Total refunded=-->
                                                    <!--begin::Total replaced=-->
                                                    <td class="text-end">$166.00</td>
                                                    <!--end::Total replaced=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_orders" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Orders</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card header-->
                                <div class="card-header align-items-center justify-content-between py-5 gap-1 gap-md-3">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-ecommerce-order-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="Search Report" />
                                        </div>
                                        <!--end::Search-->
                                        <!--begin::Export buttons-->
                                        <div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
                                        <!--end::Export buttons-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Status"
                                            data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">All</option>
                                            <option value="active">Active</option>
                                            <option value="locked">Locked</option>
                                            <option value="disabled">Disabled</option>
                                            <option value="banned">Banned</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
                                        <!--begin::Daterangepicker-->
                                        <input class="form-control form-control-solid w-100 mw-250px"
                                            placeholder="Pick date range"
                                            id="kt_ecommerce_report_customer_orders_daterangepicker" />
                                        <!--end::Daterangepicker-->

                                        <!--begin::Export dropdown-->
                                        <button type="button" class="btn btn-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="12.75" y="4.25"
                                                        width="12" height="2" rx="1"
                                                        transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                    <path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Export Report
                                        </button>
                                        <!--begin::Menu-->
                                        <div id="kt_ecommerce_report_customer_orders_export_menu"
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="excel">Export as Excel</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="csv">Export as CSV</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="pdf">Export as PDF</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Export dropdown-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_report_customer_orders_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Customer Name</th>
                                                    <th class="min-w-100px">Email</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-100px">Date Joined</th>
                                                    <th class="text-end min-w-75px">No. Orders</th>
                                                    <th class="text-end min-w-75px">No. Products</th>
                                                    <th class="text-end min-w-100px">Total</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Nov 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1395.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Melody Macy</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Mar 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">57</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">67</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2321.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Max Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">max@kt.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">30</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">42</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$441.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Sean Bean</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">sean@dellito.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Nov 2022, 6:05 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">62</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">70</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$3999.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Brian Cox</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">brian@exchange.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>25 Oct 2022, 6:05 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">95</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">108</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1428.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Mikaela Collins</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">mik@pex.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>24 Jun 2022, 11:05 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">23</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">28</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2234.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Francis Mitcham</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>21 Feb 2022, 11:30 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">83</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">95</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2025.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Olivia Wild</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 10:10 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">44</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">55</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4211.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Neil Owen</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-warning">Locked</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 6:05 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">37</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">50</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2233.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Dan Wilson</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">dam@consilting.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 10:10 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">16</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">24</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$55.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Bold</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">emma@intenso.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Mar 2022, 10:10 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1865.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ana Crown</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 10:30 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">24</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">35</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1331.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Robert Doe</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">robert@benko.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>25 Oct 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">43</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">53</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$488.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">John Miller</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">miller@mapple.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">95</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">109</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2262.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Lucy Kunic</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>05 May 2022, 9:23 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">84</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">92</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$161.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ethan Wilder</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 10:10 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">100</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">110</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4590.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Mar 2022, 9:23 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2958.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>19 Aug 2022, 11:05 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">90</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">103</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$558.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Melody Macy</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Nov 2022, 6:43 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">55</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">68</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1463.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Max Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">max@kt.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>19 Aug 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">62</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">69</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$937.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Sean Bean</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">sean@dellito.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>05 May 2022, 5:30 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">89</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">95</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2507.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Brian Cox</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">brian@exchange.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">29</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">37</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$3489.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Mikaela Collins</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">mik@pex.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">28</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1186.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Francis Mitcham</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>25 Oct 2022, 11:05 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">55</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">61</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1894.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Olivia Wild</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>05 May 2022, 5:30 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">82</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">89</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$511.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Neil Owen</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>15 Apr 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">36</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">47</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2511.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Dan Wilson</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">dam@consilting.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>21 Feb 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">69</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">74</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$867.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Bold</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">emma@intenso.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 6:05 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">56</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">63</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$728.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ana Crown</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">93</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">98</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2623.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Robert Doe</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">robert@benko.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 6:43 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">83</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">97</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4609.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">John Miller</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">miller@mapple.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-warning">Locked</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>24 Jun 2022, 6:43 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">48</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">57</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1435.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Lucy Kunic</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>25 Oct 2022, 6:43 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">49</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">60</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1526.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ethan Wilder</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4111.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Dan Wilson</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">dam@consilting.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Mar 2022, 11:30 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">98</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">103</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1142.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-danger">Banned</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>21 Feb 2022, 8:43 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">88</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">100</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1037.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Melody Macy</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>19 Aug 2022, 10:10 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">99</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">111</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4606.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Max Smith</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">max@kt.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-warning">Locked</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Mar 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">33</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$3786.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Sean Bean</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">sean@dellito.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-danger">Banned</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>15 Apr 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">30</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">36</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2773.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Brian Cox</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">brian@exchange.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 5:20 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">90</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">98</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$3817.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Mikaela Collins</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">mik@pex.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-danger">Banned</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 11:30 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">69</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">79</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1934.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Francis Mitcham</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-info">Disabled</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">40</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">46</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$536.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Olivia Wild</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>15 Apr 2022, 11:05 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">94</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">109</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2185.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Neil Owen</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Dec 2022, 11:05 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">37</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">44</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$2497.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Dan Wilson</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">dam@consilting.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>25 Jul 2022, 5:30 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">38</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">52</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$3015.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Emma Bold</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">emma@intenso.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>10 Nov 2022, 9:23 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">72</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">86</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4233.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ana Crown</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>05 May 2022, 6:05 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">61</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">66</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4133.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Robert Doe</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">robert@benko.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4305.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">John Miller</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">miller@mapple.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>22 Sep 2022, 9:23 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">78</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">83</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4497.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Lucy Kunic</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>20 Jun 2022, 11:30 am</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">31</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$1044.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Customer name=-->
                                                    <td>
                                                        <a href="../customers/details.html"
                                                            class="text-dark text-hover-primary">Ethan Wilder</a>
                                                    </td>
                                                    <!--end::Customer name=-->
                                                    <!--begin::Email=-->
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                                    </td>
                                                    <!--end::Email=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <!--begin::Status=-->
                                                    <!--begin::Status=-->
                                                    <td>21 Feb 2022, 2:40 pm</td>
                                                    <!--begin::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">36</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::No products=-->
                                                    <td class="text-end pe-0">51</td>
                                                    <!--end::No products=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$4088.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_shipping" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Shipping Report</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card header-->
                                <div class="card-header align-items-center justify-content-between py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-ecommerce-order-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="Search Report" />
                                        </div>
                                        <!--end::Search-->
                                        <!--begin::Export buttons-->
                                        <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                        <!--end::Export buttons-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Status"
                                            data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">All</option>
                                            <option value="Completed">Completed</option>
                                            <option value="In Transit">In Transit</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
                                        <!--begin::Daterangepicker-->
                                        <input class="form-control form-control-solid w-100 mw-250px"
                                            placeholder="Pick date range"
                                            id="kt_ecommerce_report_shipping_daterangepicker" />
                                        <!--end::Daterangepicker-->

                                        <!--begin::Export dropdown-->
                                        <button type="button" class="btn btn-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="12.75" y="4.25"
                                                        width="12" height="2" rx="1"
                                                        transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                    <path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Export Report
                                        </button>
                                        <!--begin::Menu-->
                                        <div id="kt_ecommerce_report_shipping_export_menu"
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="excel">Export as Excel</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="csv">Export as CSV</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-export="pdf">Export as PDF</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Export dropdown-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_report_shipping_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date</th>
                                                    <th class="min-w-100px">Shipping Type</th>
                                                    <th class="min-w-100px">Shipping ID</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="text-end min-w-75px">No. Orders</th>
                                                    <th class="text-end min-w-100px">Total</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0029582</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$371.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0058870</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$271.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0029374</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$388.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0028289</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$438.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0048325</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">13</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$442.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0044122</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$320.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0060264</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$395.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0046895</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$386.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Aug 19, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0058445</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$502.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0061712</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$52.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0034732</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$561.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0055249</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">15</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$486.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0029121</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$124.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0034760</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$484.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0041975</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$328.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0033197</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$313.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0038209</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$472.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0038074</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">18</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$240.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0030228</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$23.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0065754</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$29.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0058817</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$54.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0042230</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$128.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0053171</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$197.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0039678</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$93.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0047874</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$556.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0038027</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$226.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0039774</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$150.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0058406</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$334.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0048463</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">1</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$192.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0039974</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$490.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0027752</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">18</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$122.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0044607</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Cancelled</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">9</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$565.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0061766</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$139.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Sep 22, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0048377</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Cancelled</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$533.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>May 05, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0067819</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">5</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$210.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0065989</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$556.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0056126</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Cancelled</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">3</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$423.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0051351</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">20</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$597.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0051494</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Cancelled</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">19</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$221.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0034578</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">6</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$543.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0036915</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">8</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$535.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Dec 20, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0051281</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">14</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$52.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Oct 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0039129</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">17</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$256.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Nov 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0064903</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">In Transit</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">10</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$141.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Mar 10, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0028190</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$137.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jul 25, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0025063</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">7</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$260.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Jun 24, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0033510</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">2</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$475.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0044795</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">18</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$306.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Apr 15, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0051487</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Cancelled</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">11</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$466.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Date=-->
                                                    <td>Feb 21, 2022</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Shipping Type=-->
                                                    <td>Flat Shipping Rate</td>
                                                    <!--end::Shipping Type=-->
                                                    <!--begin::Shipping ID=-->
                                                    <td>
                                                        <a href="../sales/details.html"
                                                            class="text-dark text-hover-primary">#SHP-0028554</a>
                                                    </td>
                                                    <!--end::Shipping ID=-->
                                                    <!--begin::Status=-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status=-->
                                                    <!--begin::No orders=-->
                                                    <td class="text-end pe-0">12</td>
                                                    <!--end::No orders=-->
                                                    <!--begin::Total=-->
                                                    <td class="text-end">$273.00</td>
                                                    <!--end::Total=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Security</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5"
                                            id="kt_table_users_login_session">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <td>Email</td>
                                                    <td>smith@kpmg.com</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_email">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td>******</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_password">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td>Administrator</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_role">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Login Sessions</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Filter-->
                                        <button type="button" class="btn btn-sm btn-flex btn-light-primary"
                                            id="kt_modal_sign_out_sesions">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="4" y="11"
                                                        width="12" height="2" rx="1"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Sign out all sessions
                                        </button>
                                        <!--end::Filter-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5"
                                            id="kt_table_users_login_session">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted text-uppercase gs-0">
                                                    <th class="min-w-100px">Location</th>
                                                    <th>Device</th>
                                                    <th>IP Address</th>
                                                    <th class="min-w-125px">Time</th>
                                                    <th class="min-w-70px">Actions</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <!--begin::Invoice=-->
                                                    <td>Australia</td>
                                                    <!--end::Invoice=-->
                                                    <!--begin::Status=-->
                                                    <td>Chome - Windows</td>
                                                    <!--end::Status=-->
                                                    <!--begin::Amount=-->
                                                    <td>207.43.12.89</td>
                                                    <!--end::Amount=-->
                                                    <!--begin::Date=-->
                                                    <td>23 seconds ago</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Action=-->
                                                    <td>Current session</td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Invoice=-->
                                                    <td>Australia</td>
                                                    <!--end::Invoice=-->
                                                    <!--begin::Status=-->
                                                    <td>Safari - iOS</td>
                                                    <!--end::Status=-->
                                                    <!--begin::Amount=-->
                                                    <td>207.35.33.134</td>
                                                    <!--end::Amount=-->
                                                    <!--begin::Date=-->
                                                    <td>3 days ago</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Action=-->
                                                    <td>
                                                        <a href="#" data-kt-users-sign-out="single_user">Sign
                                                            out</a>
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Invoice=-->
                                                    <td>Australia</td>
                                                    <!--end::Invoice=-->
                                                    <!--begin::Status=-->
                                                    <td>Chrome - Windows</td>
                                                    <!--end::Status=-->
                                                    <!--begin::Amount=-->
                                                    <td>207.40.24.151</td>
                                                    <!--end::Amount=-->
                                                    <!--begin::Date=-->
                                                    <td>last week</td>
                                                    <!--end::Date=-->
                                                    <!--begin::Action=-->
                                                    <td>Expired</td>
                                                    <!--end::Action=-->
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Events</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-sm btn-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Download Report
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5"
                                        id="kt_table_customers_events">
                                        <!--begin::Table body-->
                                        <tbody>
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">Invoice
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has
                                                    been
                                                    <span class="badge badge-light-danger">Declined</span>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 11:05 am
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 10:10 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary me-1">Brian
                                                        Cox</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 10:10 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">Invoice
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status
                                                    has changed from
                                                    <span class="badge badge-light-warning me-1">Pending</span>to
                                                    <span class="badge badge-light-info">In Progress</span>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 2:40 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Emma
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 11:05 am
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary me-1">Melody
                                                        Macy</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 5:20 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 10:30 am
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">Invoice
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                    <span class="badge badge-light-info">In Progress</span>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 10:10 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary me-1">Brian
                                                        Cox</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2022, 5:30 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Event=-->
                                                <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a>
                                                </td>
                                                <!--end::Event=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 5:20 pm
                                                </td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
            <!--begin::Modals-->

            <!--begin::Modal - Add schedule-->
            <div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add an Event</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_modal_add_schedule_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Event Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_name"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Date &amp; Time</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-html="true"
                                            data-bs-content="Select a date &amp; time."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick date &amp; time"
                                        name="event_datetime" id="kt_modal_add_schedule_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Event Organiser</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_org"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Send Event Details To</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="kt_modal_add_schedule_tagify" type="text"
                                        class="form-control form-control-solid" name="event_invitees"
                                        value="smith@kpmg.com, melody@altbox.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
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
            <!--end::Modal - Add schedule-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add a Task</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_modal_add_task_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Task Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="task_name"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Task Due Date</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-html="true"
                                            data-bs-content="Select a due date."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick date"
                                        name="task_duedate" id="kt_modal_add_task_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">Task Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid rounded-3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
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
            <!--end::Modal - Add task-->
            <!--begin::Modal - Update email-->
            <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Update Email Address</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_modal_update_email_form" class="form" action="#">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="10" fill="currentColor" />
                                            <rect x="11" y="14" width="7" height="2"
                                                rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                            <rect x="11" y="17" width="2" height="2"
                                                rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <div class="fs-6 text-gray-700">Please note that a valid email address is
                                                required to complete the email verification.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Email Address</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="profile_email"
                                        value="smith@kpmg.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
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
            <!--end::Modal - Update email-->
            <!--begin::Modal - Update password-->
            <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Update Password</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_modal_update_password_form" class="form" action="#">
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="required form-label fs-6 mb-2">Current Password</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="current_password" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold fs-6 mb-2">New Password</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" placeholder="" name="new_password"
                                                autocomplete="off" />
                                            <span
                                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility">
                                                <i class="bi bi-eye-slash fs-2"></i>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3"
                                            data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers
                                        &amp; symbols.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="confirm_password" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
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
            <!--end::Modal - Update password-->
            <!--begin::Modal - Update role-->
            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Update User Role</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form id="kt_modal_update_role_form" class="form" action="#">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="10" fill="currentColor" />
                                            <rect x="11" y="14" width="7" height="2"
                                                rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                            <rect x="11" y="17" width="2" height="2"
                                                rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <div class="fs-6 text-gray-700">Please note that reducing a user role rank,
                                                that user will lose all priviledges that was assigned to the previous role.
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-5">
                                        <span class="required">Select a user role</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bolder text-gray-800">Administrator</div>
                                                <div class="text-gray-600">Best for website owners and
                                                    company administrators</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                value="1" id="kt_modal_update_role_option_1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bolder text-gray-800">Analyst</div>
                                                <div class="text-gray-600">Best for people who need full
                                                    access to analytics data, but don't need to update
                                                    website settings</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio"
                                                value="2" id="kt_modal_update_role_option_2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bolder text-gray-800">Support</div>
                                                <div class="text-gray-600">Best for employees who
                                                    regularly refund payments, tickets and respond to disputes</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
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
            <!--end::Modal - Update role-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add Authenticator App</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Content-->
                            <div class="fw-bolder d-flex flex-column justify-content-center mb-5">
                                <!--begin::Label-->
                                <div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
                                    <a href="#">Authenticator app</a>, add a new account, then scan this barcode to
                                    set up
                                    your account.
                                </div>
                                <div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download
                                    the
                                    <a href="#">Authenticator app</a>, add a new account, then enter this code to
                                    set up
                                    your account.
                                </div>
                                <!--end::Label-->
                                <!--begin::QR code-->
                                <div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
                                    <img src="../../../assets/media/misc/qr.png" alt="Scan this QR code" />
                                </div>
                                <!--end::QR code-->
                                <!--begin::Text code-->
                                <div class="border rounded p-5 d-flex flex-center d-none"
                                    data-kt-add-auth-action="text-code">
                                    <div class="fs-1">gi2kdnb54is709j</div>
                                </div>
                                <!--end::Text code-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <div class="d-flex flex-center">
                                <div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code
                                    manually</div>
                                <div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan
                                    barcode instead</div>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add task-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Enable One Time Password</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <form class="form" id="kt_modal_add_one_time_password_form">
                                <!--begin::Label-->
                                <div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log
                                    in.</div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Mobile number</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="A valid mobile number is required to receive the one-time password to validate your account login."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="otp_mobile_number" placeholder="+6123 456 789" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator saperator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Email</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="otp_email"
                                        value="smith@kpmg.com" readonly="readonly" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Confirm password</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" class="form-control form-control-solid"
                                        name="otp_confirm_password" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3"
                                        data-kt-users-modal-action="cancel">Cancel</button>
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
            <!--end::Modal - Add task-->
            <!--end::Modals-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

    @include('admin.modals.vendor.update')
@endsection

@section('scripts')
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/contacts/edit-contact.js"></script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/update-details.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/add-schedule.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/add-task.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/update-email.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/update-password.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/update-role.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/view.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/add-auth-app.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/view/add-one-time-password.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/ecommerce/reports/views/views.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/ecommerce/reports/sales/sales.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/ecommerce/reports/returns/returns.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/ecommerce/reports/customer-orders/customer-orders.js">
    </script>
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/ecommerce/reports/shipping/shipping.js">
    </script>

    <script>
        $(document).ready(function() {
            let i = 1;
            var table = $('#kt_table_users').DataTable({
                ajax: "{{ route('ajax.vendor.view.json') }}",
                columns: [{
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${i++}</div>`;
                        }
                    },
                    {
                        data: 'img',
                        render: function(data, type, row, meta) {
                            return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-40px overflow-hidden me-3">
                                            <a href="{{ route('management.vendor.products.edit') }}">
                                                <div class="symbol symbol-35px me-3">
                                                    <img src="{{ asset('admin/media/posts/${row.img[0]}') }}"
                                                        alt="" class="symbol-label" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('management.vendor.products.edit') }}"
                                                class="text-gray-800 fw-semibold text-hover-primary mb-1">${row.name}</a>
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'rating',
                        render: function(data, type, row, meta) {
                            return `<div class="rating">
                                        <div class="rating-label me-1">
                                            <span class="svg-icon"><i class="fa-solid fa-star text-warning"></i></span>
                                        </div>
                                        <div class="rating-label me-1">
                                            <span class="svg-icon"><i class="fa-solid fa-star text-warning"></i></span>
                                        </div>
                                        <div class="rating-label me-1">
                                            <span class="svg-icon"><i class="fa-solid fa-star text-warning"></i></span>
                                        </div>
                                        <div class="rating-label me-1">
                                            <span class="svg-icon"><i class="fa-solid fa-star text-warning"></i></span>
                                        </div>
                                        <div class="rating-label me-1">
                                            <span class="svg-icon"><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'price',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bolder">INR ${row.price}/${row.price_per}</div>`;
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<div class="btn-group">
                                        <button class="btn btn-light btn-active-light-primary text-end btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li class="text-center"><a class="dropdown-item" href="{{ route('management.vendor.products.edit') }}">View</a></li>
                                            <li class="text-center"><a class="dropdown-item" role="button" onclick="onDelete()">Delete</a></li>
                                        </ul>
                                    </div>`;
                        }
                    },
                ],
                order: [
                    [1, 'desc']
                ],
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
