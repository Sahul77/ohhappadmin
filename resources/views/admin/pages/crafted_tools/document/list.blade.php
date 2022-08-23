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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Documents Lists</h1>
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
                        <li class="breadcrumb-item text-gray-500">List Documents</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('crafted_tools.document.create') }}" class="btn btn-sm btn-primary"><i
                            class="fa-regular fa-plus"></i> Add New</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="app-content flex-column-fluid" id="kt_app_content">
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
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Document" />
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
                                        <label class="form-label fw-bold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="account_status"
                                                    value="1" checked />
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
                                        <label class="form-label fw-bold">Document Side: </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex flex-row">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="checkbox_input" type="checkbox"
                                                    value="1" id="front_side" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="front_side">
                                                    <div class="text-gray-800">Front Side</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->

                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mt-2">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="checkbox_input" type="checkbox"
                                                    value="2" id="back_side" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="back_side">
                                                    <div class="text-gray-800">Back Side</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <label class="form-label fs-6 fw-bold">Country:</label>
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="two-step" data-hide-search="true">
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
                            <button type="button" class="btn btn-danger"
                                data-kt-user-table-select="delete_selected">Delete
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
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                        height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                        fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2"
                                                        rx="1" transform="rotate(45 7.41422 6)"
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
                                    <th class="min-w-150px">Doc. Name</th>
                                    <th class="min-w-125px">IP Address</th>
                                    <th class="min-w-125px">Created At</th>
                                    <th class="min-w-65px">Status</th>
                                    <th class="min-w-100px">Actions</th>
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
            let countries = '';
            $(d.countries).each(function(index, value) {
                countries += `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="{{ route('management.user_management.view') }}">
                                        <div class="symbol symbol-25px">
                                            <img src="{{ asset('admin/media/flags/${this.img}') }}"
                                                alt="${this.name}" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('management.user_management.view') }}"
                                        class="text-gray-800 text-hover-primary mb-1">${this.name}</a>
                                </div>
                            </div>`;
            });

            let doc_type = '';
            $(d.document_type).each(function(index, value) {
                doc_type += `<span class="badge badge-light-dark me-3">${this.name}</span>`;
            });

            let doc_format = '';
            $(d.document_format).each(function(index, value) {
                doc_format += `<span class="badge badge-light-dark me-3">${this.name}</span>`;
            });

            let doc_side = '';
            $(d.document_side).each(function(index, value) {
                doc_side += `<span class="badge badge-light-dark me-3">${this.name}</span>`;
            });

            let doc_validation = '';
            $(d.document_validation_input).each(function(index, value) {
                doc_validation += `<span class=" me-3">${this.name}</span>`;
            });

            // `d` is the original data object for the row
            return (`<div class="row">
                        <div class="col-12 text-start fw-bold pb-4 border-bottom"><span class="fw-normal fs-6">Type : </span>${doc_type}</div>
                        <div class="col-12 text-start fw-bold py-4 border-bottom"><span class="fw-normal fs-6">Format : </span>${doc_format}</div>
                        <div class="col-12 text-start fw-bold py-4 border-bottom"><span class="fw-normal fs-6">Side : </span>${doc_side}</div>
                        <div class="col-12 text-start fw-bold py-4 border-bottom"><span class="fw-normal fs-6">Min. Length : </span>${d.document_min_input}<span class="fw-normal fs-6"> ||  Max. Length : </span>${d.document_max_input}</div>
                        <div class="col-12 text-start fw-bold py-4 border-bottom"><span class="fw-normal fs-6">Input Validation : </span>${doc_validation}</div>
                        <div class="col-12 text-start fw-bold pt-4">Country</div>
                        <div class="row row-cols-3 row-cols-lg-5 g-3 g-lg-3 mx-5">
                            ${countries}
                        </div>
                    </div>`);
        }

        $(document).ready(function() {
            var table = $('#kt_table_users').DataTable({
                ajax: "{{ route('ajax.document.json') }}",
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
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('management.user_management.view') }}"
                                                class="text-gray-800 text-hover-primary mb-1">${row.name}</a>
                                                <!--<span class="text-primary">desc.</span>-->
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'ip_address',
                        render: function(data, type, row, meta) {
                            return `<div class="badge badge-light fw-bolder">
                                        ${row.ip_address}
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
