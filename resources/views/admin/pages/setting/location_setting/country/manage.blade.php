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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Country Lists</h1>
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
                        <li class="breadcrumb-item text-gray-600">Location Setting</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">List Countries</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('setting.location_setting.country.create') }}" class="btn btn-sm btn-primary"><i
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
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Country" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
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
                                    <th class="min-w-100px">Country Name</th>
                                    <th class="min-w-20px">ISO-3</th>
                                    <th class="min-w-20px">ISO-2</th>
                                    <th class="min-w-40px">Phone Code</th>
                                    <th class="min-w-100px">Latitude</th>
                                    <th class="min-w-100px">Longitude</th>
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
    <script>
        $(document).ready(function() {
            let i = 1;
            var table = $('#kt_table_users').DataTable({
                ajax: "{{ route('ajax.location.country.json') }}",
                columns: [{
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${i++}</div>`;
                        }
                    },
                    {
                        data: 'name',
                        render: function(data, type, row, meta) {
                            return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-circle symbol-30px overflow-hidden me-3">
                                            <a href="javascript:;">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('admin/media/flags/${row.img}') }}"
                                                        alt="${row.name}" class="w-100 rounded-pill"  />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="javascript:;"
                                                class="text-gray-800 fw-bolder text-hover-primary mb-1">${row.name}</a>
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'iso3',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-info fs-7">${row.iso3}</div>`;
                        }
                    }, 
                    {
                        data: 'iso2',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.iso2}</div>`;
                        }
                    },
                    {
                        data: 'phonecode',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.phonecode}</div>`;
                        }
                    },
                    {
                        data: 'latitude',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.latitude}</div>`;
                        }
                    },
                    {
                        data: 'longitude',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.longitude}</div>`;
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
                                            <li class="text-center"><a class="dropdown-item" href="{{ route('setting.location_setting.country.create') }}">Edit</a></li>
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
