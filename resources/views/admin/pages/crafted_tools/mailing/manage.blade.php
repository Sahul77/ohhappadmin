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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Old Mail Manage</h1>
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
                        <li class="breadcrumb-item text-gray-500">Old Mail Manage</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('crafted_tools.mailing.create') }}" class="btn btn-sm btn-primary"><i
                            class="fa-regular fa-plus"></i> Compose</a>
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
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Inbox" />
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
                                <div class="px-7 pb-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="my-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold mb-2">To:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <div class="input-group mb-5">
                                                <input type="text" class="form-control" placeholder="Enter Email Address"/>
                                            </div>
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="my-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold mb-2">Subject:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <div class="input-group mb-5">
                                                <input type="text" class="form-control" placeholder="Enter Subject"/>
                                            </div>
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="my-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold mb-2">Has the words:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <div class="input-group mb-5">
                                                <input type="text" class="form-control" placeholder="Enter Here.."/>
                                            </div>
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="my-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold mb-2">Doesn't have:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <div class="input-group mb-5">
                                                <input type="text" class="form-control" placeholder="Enter Here.."/>
                                            </div>
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="my-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold mb-2">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="account_status"
                                                    value="1" />
                                                <span class="form-check-label">Sent</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="account_status"
                                                    value="2" />
                                                <span class="form-check-label">Failed</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="mt-5 d-flex justify-content-around">
                                        <a href="#" class="btn btn-sm btn-light-dark"> Clear Filter</a>
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa-regular fa-magnifying-glass fs-4 me-2"></i> Search</a>
                                    </div>
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
                                    <th class="w-10px">S. No.</th>
                                    <th class="min-w-150px">Recipients</th>
                                    <th class="min-w-150px">Message</th>
                                    <th class="min-w-65px">Status</th>
                                    <th class="min-w-125px">Date</th>
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
    <script
        src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/export-users.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/user-management/users/list/add.js">
    </script>
    <script src="https://preview.keenthemes.com/metronic8/demo22/assets/js/custom/apps/contacts/edit-contact.js"></script>
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


        $(document).ready(function() {
            let i = 1;
            var table = $('#kt_table_users').DataTable({
                ajax: "{{ route('ajax.mail.json') }}",
                columns: [
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${i++}</div>`;
                        }
                    },
                    {
                        data: 'recipients',
                        render: function(data, type, row, meta) {
                            let recipients = '';
                            if(data.length > 1){
                                recipients += `<span class="text-dark fs-8">+ ${data.length} More</span>`;
                            }
                            return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-40px overflow-hidden me-3">
                                            <a href="{{ route('crafted_tools.mailing.reply') }}">
                                                <div class="symbol symbol-35px me-3">
                                                    <img src="{{ asset('admin/media/avatars/${data[0].profile_img}') }}"
                                                        alt="" class="symbol-label" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('crafted_tools.mailing.reply') }}"
                                                class="text-gray-800 fw-semibold text-hover-primary mb-1">${data[0].name}</a>
                                                ${recipients}
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'message',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold fs-6"><a href="{{ route('crafted_tools.mailing.reply') }}" class="text-dark">${row.subject}</a></div>`;
                        }
                    },
                    {
                        data: 'status',
                        render: function(data, type, row, meta) {
                            let status_class = (row.status == 'sent') ? 'badge-light-primary' :
                                'badge-light-danger';
                            return `<div class="badge ${status_class} fw-bolder">${row.status}</div>`;
                        }
                    },
                    {
                        data: 'created_at',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.created_at}</div>`;
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<div class="btn-group">
                                        <button class="btn btn-light btn-active-light-primary text-end btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li class="text-center"><a class="dropdown-item" href="{{ route('management.user_management.view') }}">Reply</a></li>
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
