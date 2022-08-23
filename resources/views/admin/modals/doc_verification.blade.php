<!-- adhar/pan modal -->
<div class="modal fade" tabindex="-1" id="kt_modal_doc_verification"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adhar Card || PAN Card</h5>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">X</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Front Image : <img src="{{ asset('admin/media/document/aadhar-front.jpg') }}" width="250px"></p>
                <p>Back Image : <img src="{{ asset('admin/media/document/aadhar-back.png') }}" width="250px"></p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--end::Content wrapper-->