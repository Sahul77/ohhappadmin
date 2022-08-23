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
            <div class="flex-lg-row-fluid">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-header align-items-center py-5 gap-5">
                        <!--begin::Actions-->
                        <div class="d-flex">
                            <!--begin::Back-->
                            <a href="{{ route('crafted_tools.mailing.manage') }}"
                                class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-kt-initialized="1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                <span class="">
                                    <i class="fa-duotone fa-arrow-left fs-3"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--end::Back-->
                            <!--begin::Delete-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-kt-initialized="1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                <span class="">
                                    <i class="fa-duotone fa-trash-can fs-3"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--end::Delete-->

                        </div>
                        <!--end::Actions-->
                        <!--begin::Pagination-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pages info-->
                            <span class="fw-semibold text-muted me-2">1 - 50 of 235</span>
                            <!--end::Pages info-->
                            <!--begin::Prev page-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-kt-initialized="1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                                <span class="">
                                    <i class="fa-regular fa-angle-left fs-3"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--end::Prev page-->
                            <!--begin::Next page-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-kt-initialized="1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="">
                                    <i class="fa-regular fa-angle-right fs-3"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--end::Next page-->
                        </div>
                        <!--end::Pagination-->
                    </div>
                    <div class="card-body">
                        <!--begin::Title-->
                        <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Heading-->
                                <h2 class="fw-semibold me-3 my-1">Your Order #224820998666029 has been Confirmed</h2>
                                <!--begin::Heading-->
                                <!--begin::Badges-->
                                <span class="badge badge-light-info my-1 me-2">inbox</span>
                                <span class="badge badge-light-primary my-1">sent</span>
                                <!--end::Badges-->
                            </div>
                            <div class="d-flex">
                                <!--begin::Print-->
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-kt-initialized="1">
                                    <i class="bi bi-printer-fill fs-2"></i>
                                </a>
                                <!--end::Print-->
                            </div>
                        </div>
                        <!--end::Title-->
                        <!--begin::Message accordion-->
                        <div data-kt-inbox-message="message_wrapper">
                            <!--begin::Message header-->
                            <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50 me-4">
                                        <span class="symbol-label"
                                            style="background-image:url(/admin/media/avatars/300-17.jpg);"></span>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="pe-5">
                                        <!--begin::Author details-->
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <a href="#" class="fw-bold text-dark text-hover-primary">Sagar
                                                Choudhary</a>
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-success mx-3">
                                                <i class="fa-solid fa-circle-small text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-muted fw-bold">1 day ago</span>
                                        </div>
                                        <!--end::Author details-->
                                        <!--begin::Message details-->
                                        <div data-kt-inbox-message="details">
                                            <span class="text-muted fw-semibold">to me</span>
                                            <!--begin::Menu toggle-->
                                            <a href="#" class="me-1" data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-start">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="">
                                                    <i class="fa-regular fa-angle-down fs-6"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Menu toggle-->
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4"
                                                data-kt-menu="true" style="">
                                                <!--begin::Table-->
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <!--begin::Date-->
                                                        <tr>
                                                            <td class="text-muted">Date</td>
                                                            <td>25 Oct 2022, 6:05 pm</td>
                                                        </tr>
                                                        <!--end::Date-->
                                                        <!--begin::Subject-->
                                                        <tr>
                                                            <td class="text-muted">Subject</td>
                                                            <td>Your Order #224820998666029 has been Confirmed</td>
                                                        </tr>
                                                        <!--end::Subject-->
                                                        <!--begin::Reply-to-->
                                                        <tr>
                                                            <td class="text-muted">To:</td>
                                                            <td>sc40421@gmail.com</td>
                                                        </tr>
                                                        <!--end::Reply-to-->
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Message details-->
                                        <!--begin::Preview message-->
                                        <div class="text-muted fw-semibold mw-450px d-none" data-kt-inbox-message="preview">
                                            With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                            important part....</div>
                                        <!--end::Preview message-->
                                    </div>
                                </div>
                                <!--end::Author-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!--begin::Date-->
                                    <span class="fw-semibold text-muted text-end me-3">05 May 2022, 11:30 am</span>
                                    <!--end::Date-->
                                    
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Message header-->
                            <!--begin::Message content-->
                            <div class="collapse fade show" data-kt-inbox-message="message">
                                <div class="py-5">
                                    <p>Hi Bob,</p>
                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                        important part of any article is the title.Without a compelleing title, your reader
                                        won't even get to the first sentence.After the title, however, the first few
                                        sentences of your article are certainly the most important part.</p>
                                    <p>Jornalists call this critical, introductory section the "Lede," and when bridge
                                        properly executed, it's the that carries your reader from an headine try at
                                        attention-grabbing to the body of your blog post, if you want to get it right on of
                                        these 10 clever ways to omen your next blog posr with a bang</p>
                                    <p>Best regards,</p>
                                    <p class="mb-0">Jason Muller</p>
                                </div>
                            </div>
                            <!--end::Message content-->
                        </div>
                        <!--end::Message accordion-->
                        <div class="separator my-6"></div>
                        <!--begin::Message accordion-->
                        <div data-kt-inbox-message="message_wrapper">
                            <!--begin::Message header-->
                            <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50 me-4">
                                        <span class="symbol-label"
                                            style="background-image:url(/admin/media/avatars/300-1.jpg);"></span>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="pe-5">
                                        <!--begin::Author details-->
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <a href="#" class="fw-bold text-dark text-hover-primary">Max Smith</a>
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-success mx-3">
                                                <i class="fa-solid fa-circle-small text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-muted fw-bold">2 days ago</span>
                                        </div>
                                        <!--end::Author details-->
                                        <!--begin::Message details-->
                                        <div class="d-none" data-kt-inbox-message="details">
                                            <span class="text-muted fw-semibold">to me</span>
                                            <!--begin::Menu toggle-->
                                            <a href="#" class="me-1" data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-start">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="">
                                                    <i class="fa-regular fa-angle-down fs-6"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Menu toggle-->
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4"
                                                data-kt-menu="true">
                                                <!--begin::Table-->
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <!--begin::Date-->
                                                        <tr>
                                                            <td class="text-muted">Date</td>
                                                            <td>10 Nov 2022, 11:05 am</td>
                                                        </tr>
                                                        <!--end::Date-->
                                                        <!--begin::Subject-->
                                                        <tr>
                                                            <td class="text-muted">Subject</td>
                                                            <td>Trip Reminder. Thank you for flying with us!</td>
                                                        </tr>
                                                        <!--end::Subject-->
                                                        <!--begin::Reply-to-->
                                                        <tr>
                                                            <td class="text-muted">To</td>
                                                            <td>emma@intenso.com</td>
                                                        </tr>
                                                        <!--end::Reply-to-->
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Message details-->
                                        <!--begin::Preview message-->
                                        <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">
                                            Jornalists call this critical, introductory section the "Lede," and when bridge
                                            properly executed....</div>
                                        <!--end::Preview message-->
                                    </div>
                                </div>
                                <!--end::Author-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!--begin::Date-->
                                    <span class="fw-semibold text-muted text-end me-3">25 Oct 2022, 6:43 am</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Message header-->
                            <!--begin::Message content-->
                            <div class="collapse fade" data-kt-inbox-message="message">
                                <div class="py-5">
                                    <p>Hi Bob,</p>
                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                        important part of any article is the title.Without a compelleing title, your reader
                                        won't even get to the first sentence.After the title, however, the first few
                                        sentences of your article are certainly the most important part.</p>
                                    <p>Jornalists call this critical, introductory section the "Lede," and when bridge
                                        properly executed, it's the that carries your reader from an headine try at
                                        attention-grabbing to the body of your blog post, if you want to get it right on of
                                        these 10 clever ways to omen your next blog posr with a bang</p>
                                    <p>Best regards,</p>
                                    <p class="mb-0">Jason Muller</p>
                                </div>
                            </div>
                            <!--end::Message content-->
                        </div>
                        <!--end::Message accordion-->
                        <div class="separator my-6"></div>
                        <!--begin::Message accordion-->
                        <div data-kt-inbox-message="message_wrapper">
                            <!--begin::Message header-->
                            <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50 me-4">
                                        <span class="symbol-label"
                                            style="background-image:url(/admin/media/avatars/300-16.jpg);"></span>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="pe-5">
                                        <!--begin::Author details-->
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <a href="#" class="fw-bold text-dark text-hover-primary">Sean Bean</a>
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-success mx-3">
                                                <i class="fa-solid fa-circle-small text-success"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-muted fw-bold">3 days ago</span>
                                        </div>
                                        <!--end::Author details-->
                                        <!--begin::Message details-->
                                        <div class="d-none" data-kt-inbox-message="details">
                                            <span class="text-muted fw-semibold">to me</span>
                                            <!--begin::Menu toggle-->
                                            <a href="#" class="me-1" data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-start">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="">
                                                    <i class="fa-regular fa-angle-down fs-6"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Menu toggle-->
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4"
                                                data-kt-menu="true">
                                                <!--begin::Table-->
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <!--begin::Date-->
                                                        <tr>
                                                            <td class="text-muted">Date</td>
                                                            <td>24 Jun 2022, 11:05 am</td>
                                                        </tr>
                                                        <!--end::Date-->
                                                        <!--begin::Subject-->
                                                        <tr>
                                                            <td class="text-muted">Subject</td>
                                                            <td>Trip Reminder. Thank you for flying with us!</td>
                                                        </tr>
                                                        <!--end::Subject-->
                                                        <!--begin::Reply-to-->
                                                        <tr>
                                                            <td class="text-muted">To</td>
                                                            <td>emma@intenso.com</td>
                                                        </tr>
                                                        <!--end::Reply-to-->
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Message details-->
                                        <!--begin::Preview message-->
                                        <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">
                                            Jornalists call this critical, introductory section the "Lede," and when bridge
                                            properly executed....</div>
                                        <!--end::Preview message-->
                                    </div>
                                </div>
                                <!--end::Author-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!--begin::Date-->
                                    <span class="fw-semibold text-muted text-end me-3">19 Aug 2022, 10:30 am</span>
                                    <!--end::Date-->
                                    
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Message header-->
                            <!--begin::Message content-->
                            <div class="collapse fade" data-kt-inbox-message="message">
                                <div class="py-5">
                                    <p>Hi Bob,</p>
                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                        important part of any article is the title.Without a compelleing title, your reader
                                        won't even get to the first sentence.After the title, however, the first few
                                        sentences of your article are certainly the most important part.</p>
                                    <p>Jornalists call this critical, introductory section the "Lede," and when bridge
                                        properly executed, it's the that carries your reader from an headine try at
                                        attention-grabbing to the body of your blog post, if you want to get it right on of
                                        these 10 clever ways to omen your next blog posr with a bang</p>
                                    <p>Best regards,</p>
                                    <p class="mb-0">Jason Muller</p>
                                </div>
                            </div>
                            <!--end::Message content-->
                        </div>
                        <!--end::Message accordion-->
                        <!--begin::Form-->
                        <form id="kt_inbox_reply_form" class="rounded border mt-10">
                            <div class="row mt-5">
                                {{-- Email Send --}}
                                <div class="col">
                                    <div class="bg-white rounded shadow-sm">
                                        <div class="row gy-5 pb-6">
                                            <div class="col-12">
                                                <div class="form-group px-4">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="fs-6 mb-3">
                                                            <div class="required">To</div>
                                                        </label>
                                                        <div>
                                                            <button class="btn btn-sm btn-light-dark py-1 px-3"
                                                                onclick="openCopyMail('email_send_cc', this)">Cc</button>
                                                            <button class="btn btn-sm btn-light-primary py-1 px-3"
                                                                onclick="openCopyMail('email_send_bcc', this)">Bcc</button>
                                                        </div>
                                                    </div>
                                                    <input class="rounded px-2" name="email_send_to"
                                                        onclick="emailSend('email_send_to')" placeholder='Recipients'>
                                                </div>
                                            </div>
                                            <div class="col-12 d-none" id="email_send_cc">
                                                <div class="form-group px-4">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Cc</span>
                                                    </label>
                                                    <input class="rounded px-2" name="email_send_cc"
                                                        onclick="emailSend('email_send_cc')" placeholder='Cc Recipients'>
                                                </div>
                                            </div>
                                            <div class="col-12 d-none" id="email_send_bcc">
                                                <div class="form-group px-4">
                                                    <label class="fs-6 mb-3">
                                                        <span class="">Bcc</span>
                                                    </label>
                                                    <input class="rounded px-2" name="email_send_bcc"
                                                        onclick="emailSend('email_send_bcc')" placeholder='Bcc Recipients'>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group px-4">
                                                    <label class="fs-6 mb-3">
                                                        <span class="required">Subject</span>
                                                    </label>
                                                    <input type="text" class="form-control fw-normal length_check fs-6 text-dark"
                                                        placeholder="E-mail Subject" maxlength="900">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-white rounded shadow-sm p-0">
                                                    <div class="form-group border border-bottom-2 px-4">
                                                        <label class="fs-6 py-4">
                                                            <span class="required">Message</span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <textarea class="tinymce_basic">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center my-3">
                                                <button class="btn btn-sm btn-primary me-4"><i class="fa-regular fa-paper-plane me-1"></i> SEND</button>
                                                {{-- <div>OR</div> --}}
                                                {{-- <button class="btn btn-sm btn-light-google border border-google ms-4">SCHEDULE</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/custom/apps/inbox/reply.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"></script>
    <script>

        $(window).ready(function() {
            var options = {
                selector: ".tinymce_basic"
            };
            tinymce.init(options);

            emailSend('email_send_to');

        });

        const openCopyMail = (name, e) => {
            $("#"+name).removeClass('d-none');
            $(`input[name='${name}']`).click();
            $(e).remove();
        }

        const emailSend = (inputName) => {
            // Email Send
            var inputElm = document.querySelector(`input[name="${inputName}"]`);

            const usersList = [{
                    value: 1,
                    name: 'Emma Smith',
                    avatar: '{{ asset('admin/media/avatars/150-1.jpg') }}',
                    email: 'e.smith@kpmg.com.au'
                },
                {
                    value: 2,
                    name: 'Max Smith',
                    avatar: '{{ asset('admin/media/avatars/150-2.jpg') }}',
                    email: 'max@kt.com'
                },
                {
                    value: 3,
                    name: 'Sean Bean',
                    avatar: '{{ asset('admin/media/avatars/150-3.jpg') }}',
                    email: 'sean@dellito.com'
                },
                {
                    value: 4,
                    name: 'Brian Cox',
                    avatar: '{{ asset('admin/media/avatars/150-4.jpg') }}',
                    email: 'brian@exchange.com'
                },
                {
                    value: 5,
                    name: 'Francis Mitcham',
                    avatar: '{{ asset('admin/media/avatars/150-5.jpg') }}',
                    email: 'f.mitcham@kpmg.com.au'
                },
                {
                    value: 6,
                    name: 'Dan Wilson',
                    avatar: '{{ asset('admin/media/avatars/150-6.jpg') }}',
                    email: 'dam@consilting.com'
                },
                {
                    value: 7,
                    name: 'Ana Crown',
                    avatar: '{{ asset('admin/media/avatars/150-7.jpg') }}',
                    email: 'ana.cf@limtel.com'
                },
                {
                    value: 8,
                    name: 'John Miller',
                    avatar: '{{ asset('admin/media/avatars/150-8.jpg') }}',
                    email: 'miller@mapple.com'
                }
            ];

            function tagTemplate(tagData) {
                return `<tag title="${(tagData.title)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
                    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                    <div class="d-flex align-items-center">
                        <div class='tagify__tag__avatar-wrap ps-0'>
                            <img onerror="this.style.visibility='hidden'" class="rounded-circle w-20px me-2" src="${tagData.avatar}">
                        </div>
                        <span class='tagify__tag-text'>${tagData.name}</span>
                    </div>
                </tag>`
            }

            function suggestionItemTemplate(tagData) {
                return `<div ${this.getAttributes(tagData)} class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}' tabindex="0" role="option"> ${tagData.avatar ? `<div class='tagify__dropdown__item__avatar-wrap me-2'><img onerror="this.style.visibility='hidden'"  class="rounded-circle w-40px me-2" src="${tagData.avatar}"></div>` : ''
            }

                    <div class="d-flex flex-column">
                        <strong>${tagData.name}</strong>
                        <span>${tagData.email}</span>
                    </div>
                </div>`
            }

            // initialize Tagify on the above input node reference
            var tagify = new Tagify(inputElm, {
                tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
                enforceWhitelist: true,
                skipInvalid: true, // do not remporarily add invalid tags
                dropdown: {
                    closeOnSelect: false,
                    enabled: 0,
                    classname: 'users-list',
                    searchKeys: ['name',
                        'email'
                    ] // very important to set by which keys to search for suggesttions when typing
                },
                templates: {
                    tag: tagTemplate,
                    dropdownItem: suggestionItemTemplate
                },
                whitelist: usersList
            })

            tagify.on('dropdown:show dropdown:updated', onDropdownShow)
            tagify.on('dropdown:select', onSelectSuggestion)

            var addAllSuggestionsElm;

            function onDropdownShow(e) {
                var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

                if (tagify.suggestedListItems.length > 1) {
                    addAllSuggestionsElm = getAddAllSuggestionsElm();

                    // insert "addAllSuggestionsElm" as the first element in the suggestions list
                    dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
                }
            }

            function onSelectSuggestion(e) {
                if (e.detail.elm == addAllSuggestionsElm)
                    tagify.dropdown.selectAll.call(tagify);
            }

            // create a "add all" custom suggestion element every time the dropdown changes
            function getAddAllSuggestionsElm() {
                // suggestions items should be based on "dropdownItem" template
                return tagify.parseTemplate('dropdownItem', [{
                    class: "addAll",
                    name: "Add all",
                    email: tagify.settings.whitelist.reduce(function(remainingSuggestions, item) {
                        return tagify.isTagDuplicate(item.value) ? remainingSuggestions :
                            remainingSuggestions + 1
                    }, 0) + " Members"
                }])
            }
        }
        
        $('.length_check').maxlength({
            showOnReady: false,
            alwaysShow: true,
            threshold: 0,
            warningClass: "small form-text text-muted",
            limitReachedClass: "small form-text text-danger",
            separator: " / ",
            preText: "",
            postText: " characters",
            showMaxLength: true,
            placement: "bottom-right-inside",
            message: null,
            showCharsTyped: true,
            validate: false,
            utf8: false,
            appendToParent: false,
            twoCharLinebreak: false,
            customMaxAttribute: null,
            allowOverMax: false,
            zIndex: 1099,
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
