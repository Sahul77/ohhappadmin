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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Send Mail</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Crafted & Tools</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Send Mail</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{ route('crafted_tools.mailing.manage') }}" class="btn btn-sm btn-light-dark">Old Mails</a>
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
            <div class="container-fluid p-0">
                <div class="row mt-5">
                    {{-- Email Send --}}
                    <div class="col-md-7">
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
                                    <button class="btn btn-sm btn-primary me-4">SEND</button>
                                    <div>OR</div>
                                    <button class="btn btn-sm btn-light-google border border-google ms-4">SCHEDULE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
@endsection

@section('scripts')
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
    </script>
@endsection
