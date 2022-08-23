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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Admin Permissions List</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item text-gray-600">Management</li>
                        <li class="breadcrumb-item text-gray-600"><a href="{{ route('management.sub_admin.list') }}"
                                class="text-gray-600 text-hover-primary">List Admins</a></li>
                        <li class="breadcrumb-item text-gray-500">Permissions</li>
                        <li class="breadcrumb-item text-gray-500">List</li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">

                    <!--begin::Button-->
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
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1 me-5">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-permissions-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Search Permissions" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_permission">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                        transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add Permission
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-250px">Assigned to</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <tr>
                                <!--begin::Name=-->
                                <td>User Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>10 Nov 2022, 2:40 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Content Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                                    <a href="roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                                    <a href="roles/view.html" class="badge badge-light-info fs-7 m-1">Support</a>
                                    <a href="roles/view.html" class="badge badge-light-warning fs-7 m-1">Trial</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>19 Aug 2022, 5:20 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Financial Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>20 Dec 2022, 10:30 am</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Reporting</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>15 Apr 2022, 6:05 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Payroll</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>15 Apr 2022, 6:05 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Disputes Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                                    <a href="roles/view.html" class="badge badge-light-info fs-7 m-1">Support</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>10 Nov 2022, 5:20 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>API Controls</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>05 May 2022, 9:23 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Database Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>20 Dec 2022, 5:20 pm</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Name=-->
                                <td>Repository Management</td>
                                <!--end::Name=-->
                                <!--begin::Assigned to=-->
                                <td>
                                    <a href="roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                    <a href="roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                                </td>
                                <!--end::Assigned to=-->
                                <!--begin::Created Date-->
                                <td>25 Oct 2022, 6:43 am</td>
                                <!--end::Created Date-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <!--begin::Update-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Update-->
                                    <!--begin::Delete-->
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Delete-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            
            <!--end::Modals-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    @include('admin.modals.sub_admin.permissions.create')
    @include('admin.modals.sub_admin.permissions.update')
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/custom/apps/user-management/permissions/list.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/user-management/permissions/add-permission.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/user-management/permissions/update-permission.js') }}"></script>
@endsection
