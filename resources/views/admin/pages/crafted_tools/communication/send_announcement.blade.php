@extends('admin.layout.main')
@section('styles')
    <style>
        div.tox-tinymce {
            height: 300px !important;
            border: none;
        }
    </style>
@endsection
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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Send Announcement</h1>
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
                        <li class="breadcrumb-item text-gray-500">Send Announcement</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-light-primary">Manage Announcement List</a>
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
                    <div class="col-12 mb-5 p-0">
                        <div class="heading_title">
                            <h6>SMS Announcement (234)</h6>
                            <p>Write your message here.</p>
                            <div>
                                <textarea class="tinymce_basic" placeholder="Enter Your Message Here..">
                                    
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 p-0">
                        <div class="heading_title">
                            <h6>Email (234)</h6>
                            <div class="subject py-3">
                                <p class="mb-1">Email Subject</p>
                                <input type="text" class="form-control" placeholder="Enter Subject" name="Subject" />
                            </div>
                            <div class="mt-3">
                                <p class="mb-1">Write Your Email Here</p>
                                <textarea class="tinymce_basic" placeholder="Enter Your Email Here..">

                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 p-0">
                        <div class="heading_title">
                            <h6>In-App/Push (345)</h6>
                            <p>Write your notification message here.</p>
                            <div class="mt-3">
                                <p class="mb-1">Write Your Email Here</p>
                                <textarea class="tinymce_basic" placeholder="Enter Your Email Here..">

                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 p-0">
                        <button class="btn btn-success btn-sm float-end">Submit</button>
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    @endsection

    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"></script>
        <script>
            $(window).ready(function() {
                var options = {
                    selector: ".tinymce_basic"
                };
                tinymce.init(options);
            });
        </script>
    @endsection
