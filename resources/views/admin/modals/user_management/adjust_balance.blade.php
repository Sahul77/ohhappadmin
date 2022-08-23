<div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Adjust Balance</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Balance preview-->
                <div class="d-flex text-center mb-9">
                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                        <div class="fs-6 fw-bold mb-2 text-muted">Current Balance</div>
                        <div class="fs-2 fw-bolder" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
                    </div>
                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                        <div class="fs-6 fw-bold mb-2 text-muted">New Balance
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Enter an amount to preview the new balance."
                                aria-label="Enter an amount to preview the new balance."></i>
                        </div>
                        <div class="fs-2 fw-bolder" kt-modal-adjust-balance="new_balance">--</div>
                    </div>
                </div>
                <!--end::Balance preview-->
                <!--begin::Form-->
                <form id="kt_modal_adjust_balance_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">Adjustment type</label>
                        <!--end::Label-->
                        <!--begin::Dropdown-->
                        <select class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                            name="adjustment" aria-label="Select an option" data-control="select2"
                            data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option"
                            data-hide-search="true" data-select2-id="select2-data-13-3l3h" tabindex="-1"
                            aria-hidden="true">
                            <option data-select2-id="select2-data-15-ybth"></option>
                            <option value="1">Credit</option>
                            <option value="2">Debit</option>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">Amount</label>
                        <!--end::Label-->
                        <div class="input-group">
                            <!--begin::Input-->
                            <span class="input-group-text border-0" id="basic-addon1">$</span>
                            <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid"
                                name="amount" value="" inputmode="text" aria-describedby="basic-addon1" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Add adjustment note</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Disclaimer-->
                    <div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited
                        by the financial team every fortnight. Please maintain your invoices and receipts until then.
                        Thank you.</div>
                    <!--end::Disclaimer-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_adjust_balance_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
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
