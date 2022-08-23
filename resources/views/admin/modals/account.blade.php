
<!--begin::Modal - Offer A Deal-->
<div class="modal fade" id="create_new_admin_vendor" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header py-5 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2 class="fs-4">Create New Admin/Vendor</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <i class="fa-solid fa-xmark fs-2"></i>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                    <!--begin::Form-->
                    <div class="mx-auto mw-500px w-100 pb-10">
                        <!--begin::Type-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="mb-8">
                                    <!--begin::Title-->
                                    <h2 class="mb-3">Choose Options Below</h2>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-6">If you need more info, please check out
                                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-15" data-kt-buttons="true">
                                    <!--begin::Option-->
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_admin">
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-user-gear fs-1"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Sub
                                                        Admin</span>
                                                    <span class="fw-bold fs-6 text-muted">Create a new account for
                                                        Sub Admins</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                    </a>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <a href="{{ route('index') }}" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_vendor">
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span
                                                    class="svg-icon svg-icon-3hx d-flex align-items-center justify-content-center">
                                                    <i class="fa fa-user-plus fs-1 fw-normal"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span
                                                        class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Vendor</span>
                                                    <span class="fw-bold fs-6 text-muted">Create a new account for
                                                        vendors</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                    </a>
                                    <!--end::Option-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Type-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>
