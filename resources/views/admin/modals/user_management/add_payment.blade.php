<div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true" style="display: none;">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Add a Payment Record</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor"></rect>
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
                <form id="kt_modal_add_payment_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">
                            <span class="required">Invoice Number</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="The invoice number must be unique."
                                aria-label="The invoice number must be unique."></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="invoice" value="">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">Status</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" name="status"
                            data-control="select2" data-placeholder="Select an option" data-hide-search="true"
                            data-select2-id="select2-data-10-wxec" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="select2-data-12-ni0e"></option>
                            <option value="0">Approved</option>
                            <option value="1">Pending</option>
                            <option value="2">Rejected</option>
                            <option value="3">In progress</option>
                            <option value="4">Completed</option>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">Invoice Amount</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="amount" value="">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">
                            <span class="required">Additional Information</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Information such as description of invoice or product purchased."
                                aria-label="Information such as description of invoice or product purchased."></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_add_payment_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
