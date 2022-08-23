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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Announcement</h1>
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
                        <li class="breadcrumb-item text-gray-600">Communication</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Announcement</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-light-primary">Create New Announcement List</a>
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
                    <div class="col-12 p-0">
                        <div class="mb-3 hover-scroll-x">
                            <div class="d-grid">
                                <ul class="nav nav-tabs flex-nowrap text-nowrap">
                                    <li class="nav-item me-2" onclick="loadTable('users')">
                                        <a class="nav-link btn btn-active-primary btn-color-primary-600 btn-active-color-white rounded-bottom-0 active"
                                            data-bs-toggle="tab" href="#kt_tab_pane_1">Filtered User Lists (34)</a>
                                    </li>
                                    <li class="nav-item me-2" onclick="loadTable('delete')">
                                        <a class="nav-link btn btn-active-danger btn-color-danger btn-active-color-white rounded-bottom-0"
                                            data-bs-toggle="tab" href="#kt_tab_pane_2">Deleted Filtered User Lists (14)</a>
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
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-user-table-filter="search"
                                                    class="form-control form-control-solid w-250px ps-14"
                                                    placeholder="Search Filtered User Lists" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end flex-row-fluid me-5"
                                                style="width: 220px">
                                                <!--begin::Daterangepicker-->
                                                <input class="form-control form-control-solid" placeholder="Pick date range"
                                                    id="kt_daterangepicker_4" />
                                            </div>
                                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                                <!--end::Filter-->
                                                <!--begin::Export-->
                                                <button type="button" class="btn btn-light-primary me-3"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
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
                                                    <span class="me-2"
                                                        data-kt-user-table-select="selected_count"></span>Selected
                                                </div>
                                                <button type="button" class="btn btn-danger"
                                                    data-kt-user-table-select="delete_selected">Delete
                                                    Selected</button>
                                            </div>
                                            <!--end::Group actions-->
                                            <!--begin::Modal - Adjust Balance-->
                                            <div class="modal fade" id="kt_modal_export_users" tabindex="-1"
                                                aria-hidden="true">
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                                            width="16" height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor" />
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
                                                            <form id="kt_modal_export_users_form" class="form"
                                                                action="#">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">Select
                                                                        Export
                                                                        Format:</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <select name="format" data-control="select2"
                                                                        data-placeholder="Select a format"
                                                                        data-hide-search="true"
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
                                </div>
                                <div class="table-responsive">

                                    <table class="table display nowrap align-middle table-row-dashed fs-6 gy-5"
                                        id="kt_table_users">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr
                                                class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0 bg-secondary text-dark text-gray-800">
                                                <th class="w-40px">SR.NO</th>
                                                <th class="min-w-100px">USER LIST NAME</th>
                                                <th class="min-w-150px">FILTERED USERS</th>
                                                <th class="min-w-125px">CREATED BY</th>
                                                <th class="min-w-65px">CREATED DATE & TIME</th>
                                                <th class="min-w-65px">SEND ANNOUNCEMENT</th>
                                                <th class="min-w-100px">ACTIONS</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                <div class="card bg-transparent">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 p-0">
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
                                                    class="form-control form-control-solid w-250px ps-14"
                                                    placeholder="Search Filtered User Lists" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end flex-row-fluid me-5"
                                                style="width: 220px">
                                                <!--begin::Daterangepicker-->
                                                <input class="form-control form-control-solid" placeholder="Pick date range"
                                                    id="kt_daterangepicker_5" />
                                            </div>
                                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                                <!--end::Filter-->
                                                <!--begin::Export-->
                                                <button type="button" class="btn btn-light-primary me-3"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
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
                                                    <span class="me-2"
                                                        data-kt-user-table-select="selected_count"></span>Selected
                                                </div>
                                                <button type="button" class="btn btn-danger"
                                                    data-kt-user-table-select="delete_selected">Delete
                                                    Selected</button>
                                            </div>
                                            <!--end::Group actions-->
                                            <!--begin::Modal - Adjust Balance-->
                                            <div class="modal fade" id="kt_modal_export_users1" tabindex="-1"
                                                aria-hidden="true">
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                                            width="16" height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor" />
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
                                                            <form id="kt_modal_export_users_form1" class="form"
                                                                action="#">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">Select
                                                                        Export
                                                                        Format:</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <select name="format" data-control="select2"
                                                                        data-placeholder="Select a format"
                                                                        data-hide-search="true"
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
                                </div>
                                <div class="table-responsive">

                                    <table class="table display nowrap align-middle table-row-dashed fs-6 gy-5"
                                        id="kt_table_users_deleted">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr
                                                class="text-start text-muted fw-bolder fs-8 text-uppercase gs-0 bg-secondary text-dark text-gray-800 px-3">
                                                <th class="w-40px">SR.NO</th>
                                                <th class="min-w-100px">USER LIST NAME</th>
                                                <th class="min-w-80px">FILTERED USERS</th>
                                                <th class="min-w-125px">CREATED BY</th>
                                                <th class="min-w-125px">DELETED BY</th>
                                                <th class="min-w-110px">CREATED AT</th>
                                                <th class="min-w-110px">DELETED AT</th>
                                                <th class="min-w-110px">DELETE REGION</th>
                                                <th class="min-w-100px">ACTIONS</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                    </table>
                                    <!--end::Table-->
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


            // custom Date Range
            var start1 = moment().subtract(29, "days");
            var end1 = moment();

            // function cb(start, end) {
            //     $("#kt_daterangepicker_4").html(start.format("YYYY-MM-DD") + " - " + end.format("YYYY-MM-DD"));
            // }

            $("#kt_daterangepicker_5").daterangepicker({
                locale: {
                    format: 'DD/MM/YYYY',
                    "separator": " - "
                },
                startDate: start1,
                endDate: end1,
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
            function loadTable(data) {

                if (data == 'users') {
                    let i = 1;
                    var table = $('#kt_table_users').DataTable({
                        ajax: "{{ route('ajax.communication.announcement.filter.json') }}",
                        columns: [{
                                data: 'id',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${i++}</div>`;
                                }
                            },
                            {
                                data: 'users',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${row.users}<button class="ms-2 btn btn-sm btn-light-primary">View All</button></div>`;
                                }
                            },
                            {
                                data: 'filtered_users',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-info fs-7">${row.filtered_users} Users</div>`;
                                }
                            },
                            {
                                data: 'created_by',
                                render: function(data, type, row, meta) {
                                    return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                            <a href="javascript:;">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('admin/media/avatars/${data.img}') }}"
                                                        alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="javascript:;"
                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-7">${data.name}</a>
                                                <span class="text-primary fs-7">${data.country}</span>
                                        </div>
                                    </div>`;
                                }
                            },
                            {
                                data: 'created_at',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${row.created_at}</div>`;
                                }
                            },
                            {
                                render: function(data, type, row, meta) {
                                    return `<a href="{{ route('crafted_tools.communication.send_announcement') }}"><button class="btn btn-sm btn-primary fw-bolder py-1 px-2">Send Notification</button></a>`;
                                }
                            },
                            {
                                render: function(data, type, row, meta) {
                                    return `<div class="btn-group">
                                        <button class="btn btn-light btn-active-light-primary text-end btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li class="text-center"><a class="dropdown-item" href="{{ route('management.user_management.view') }}">Edit</a></li>
                                            <li class="text-center"><a class="dropdown-item" role="button" onclick="onDelete()">Delete</a></li>
                                        </ul>
                                    </div>`;
                                }
                            },
                        ],
                        order: [
                            [1, 'asc']
                        ],
                    });
                } else if (data == 'delete') {
                    let j = 1;
                    var table = $('#kt_table_users_deleted').DataTable({
                        ajax: "{{ route('ajax.communication.announcement.filter.json') }}",
                        columns: [{
                                data: 'id',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${j++}</div>`;
                                }
                            },
                            {
                                data: 'users',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${row.users}<button class="ms-2 btn btn-sm btn-light-primary py-1 px-2">View All</button></div>`;
                                }
                            },
                            {
                                data: 'filtered_users',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-info fs-7">${row.filtered_users} Users</div>`;
                                }
                            },
                            {
                                data: 'created_by',
                                render: function(data, type, row, meta) {
                                    return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                            <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                                <a href="javascript:;">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset('admin/media/avatars/${data.img}') }}"
                                                            alt="${data.name}" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:;"
                                                    class="text-gray-800 fw-bolder text-hover-primary fs-7 mb-1">${data.name}</a>
                                                    <span class="text-primary fs-7">${data.country}</span>
                                            </div>
                                        </div>`;
                                }
                            },
                            {
                                data: 'deleted_by',
                                render: function(data, type, row, meta) {
                                    return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                            <a href="javascript:;">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('admin/media/avatars/${data.img}') }}"
                                                        alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="javascript:;"
                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-7">${data.name}</a>
                                                <span class="text-primary fs-7">${data.country}</span>
                                        </div>
                                    </div>`;
                                }
                            },
                            {
                                data: 'created_at',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${row.created_at}</div>`;
                                }
                            },
                            {
                                data: 'deleted_by',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${data.deleted_at}</div>`;
                                }
                            },
                            {
                                data: 'deleted_by',
                                render: function(data, type, row, meta) {
                                    return `<div class="fw-bold text-dark fs-7">${data.region}</div>`;
                                }
                            },
                            {
                                render: function(data, type, row, meta) {
                                    return `<div class="btn-group">
                                            <button class="btn btn-light btn-active-light-primary text-end btn-sm" onclick="onRestore()">
                                                <i class="fa-regular fa-rotate-right"></i> Restore
                                            </button>
                                        </div>`;
                                }
                            },
                        ],
                        order: [
                            [1, 'asc']
                        ],
                    });
                }
                $('#kt_table_users').DataTable().clear().destroy();
                $('#kt_table_users_deleted').DataTable().clear().destroy();
            }

            loadTable('users');

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

            // Restore
            function onRestore() {
                Swal.fire({
                    text: "Are you sure you want to restore ?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, restore!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function(result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have restored this Data!.",
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
                            text: "Data not restored.",
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
