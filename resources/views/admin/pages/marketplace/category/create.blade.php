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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Create New Category</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="{{ route('index') }}" class="text-gray-600 text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Marketplace</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Create Category</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create_new_admin_vendor">Create New</a>
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
                <div class="row mt-5">
                    {{-- Advanced Setting --}}
                    <div class="col-12">
                        <div class="bg-white rounded shadow-sm">
                            <div class="row gy-5 pb-6">
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Category Name</span>
                                        </label>
                                        <input type="text" class="form-control fs-6 text-dark"
                                            placeholder="Ex. Airport Media">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Category Image</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Only PNG or JPG Allow. Max Size 4MB."></i>
                                        </label>
                                        <div class="mt-2">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="symbol symbol-80px w-50px">
                                                    <img src="{{ asset('admin/media/extra/upload.png') }}" alt="">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Add Photos">
                                                    <i class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                    <input id="file-input" type="file" />
                                                </label>
                                                <!--end::Edit-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ps-md-5 pe-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Status</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status" type="radio"
                                                    value="1" id="doc_status_active" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="doc_status_active">
                                                    <div class="text-gray-800">Active</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="status" type="radio"
                                                    value="2" id="doc_status_inactive" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="doc_status_inactive">
                                                    <div class="text-gray-800">In Active</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pe-md-5 ps-md-2 px-4">
                                        <label class="fs-6 mb-3">
                                            <span class="required">Want to Add Sub-Category</span>
                                        </label>
                                        <div class="d-flex flex-row">
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="add_sub_category" type="radio"
                                                    value="1" id="add_sub_category_yes" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="add_sub_category_yes">
                                                    <div class="text-gray-800">Yes</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mt-2 me-10">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-2" name="add_sub_category" type="radio"
                                                    value="0" id="add_sub_category_no" checked />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="add_sub_category_no">
                                                    <div class="text-gray-800">No</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-none" id="sub_category">
                                    <div class="form-group px-md-5 px-4">
                                        <div class="bg-light-dark text-center d-block">
                                            <label class="fs-6 my-2">
                                                <span class="required fw-bold">Sub-Category Details</span>
                                            </label>
                                        </div>
                                        <div class="row targetDiv" id="div0">
                                            <div class="col-md-12">
                                                <div id="group1" class="fvrduplicate">
                                                    <div class="mt-4 entry">
                                                        <div class="row form-group mt-4">
                                                            <div class="col-4">
                                                                <label class="form-label required">Name</label>
                                                                <input type="text" class="form-control mb-2 mb-md-0"
                                                                    placeholder="Enter Sub Category Name"
                                                                    name="fields[]" />
                                                            </div>
                                                            <div class="col-3 d-flex justify-content-center">
                                                                <div>
                                                                    <label class="form-label required">Image</label>
                                                                    <div class="">
                                                                        <div class="image-input image-input-outline"
                                                                            data-kt-image-input="true">
                                                                            <!--begin::Preview existing avatar-->
                                                                            <div class="symbol symbol-40px w-40px">
                                                                                <img src="{{ asset('admin/media/extra/upload.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <!--end::Preview existing avatar-->
                                                                            <!--begin::Edit-->
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary mt-3 w-20px h-20px bg-transparent shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Add Photos">
                                                                                <i
                                                                                    class="fa-solid fa-circle-plus text-success fs-2"></i>
                                                                                <input name="sub_cat_img[]" type="file" />
                                                                            </label>
                                                                            <!--end::Edit-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group mt-8">
                                                                    <button class="btn btn-light-primary btn-add">
                                                                        <i class="la la-plus"></i>Add
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-12">
                                        <div class="form-group border border-top-0 border-bottom-2 ps-5">
                                            <label class="fs-6 mb-2">
                                                <span class="">Document Description</span>
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="tinymce_basic">
                                                <h1 style="text-align: center;">OOHAP COMPANY</h1>
                                            </textarea>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end mt-4">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    @endsection

    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
        <script>
            $(window).ready(function() {
                var options = {
                    selector: ".tinymce_basic"
                };
                tinymce.init(options);

                $("[name=add_sub_category]").on("change", add_sub_category);

                function add_sub_category(e){
                    if(e.currentTarget.value == 1){
                        $("#sub_category").removeClass('d-none');
                    }else{
                        if(confirm('All Sub Category Removes on this action.')){
                            $("#sub_category").addClass('d-none');
                            $(".fvrduplicate div.entry").not(':last').remove();
                        }else{
                            e.currentTarget.checked = false;
                            $("#add_sub_category_yes").prop("checked", true);
                        }
                    }
                }
                $(document).on('click', '.btn-add', function(e) {
                    e.preventDefault();
                    var controlForm = $(this).closest('.fvrduplicate'),
                        currentEntry = $(this).parents('.entry:first'),
                        newEntry = $(currentEntry.clone()).appendTo(controlForm);
                    console.log(newEntry);

                    newEntry.find('input').val('');
                    controlForm.find('.entry:not(:last) .btn-add')
                        .removeClass('btn-add').addClass('btn-remove')
                        .removeClass('btn-success').addClass('btn-light-danger fs-7')
                        .html('<i class="la la-trash-o fw-bolder"></i>Delete');
                }).on('click', '.btn-remove', function(e) {
                    $(this).closest('.entry').remove();
                    return false;
                });
            });

            // Doc type
            var input_doc_type = document.querySelector('input[name=doc_type]');

            new Tagify(input_doc_type, {
                whitelist: ['Identity Doc.', 'Address Doc.', 'Company/Entity Doc.'],
                maxTags: 3,
                dropdown: {
                    maxItems: 3, // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                },
                userInput: false
            })

            // Doc Format
            var input_doc_format = document.querySelector('input[name=doc_format]');

            new Tagify(input_doc_format, {
                whitelist: ['PNG', 'JPG/JPEG', 'PDF'],
                maxTags: 3,
                dropdown: {
                    maxItems: 3, // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                },
                userInput: false
            })

            // Doc Country
            var inputElm = document.querySelector('#doc_country');

            const usersList = [{
                    value: 1,
                    name: 'India',
                    avatar: '{{ asset('admin/media/flags/india.svg') }}',
                    email: 'e.smith@kpmg.com.au'
                },
                {
                    value: 2,
                    name: 'Afghanistan',
                    avatar: '{{ asset('admin/media/flags/afghanistan.svg') }}',
                    email: 'max@kt.com'
                },
                {
                    value: 3,
                    name: 'Albania',
                    avatar: '{{ asset('admin/media/flags/albania.svg') }}',
                    email: 'sean@dellito.com'
                },
                {
                    value: 4,
                    name: 'Algeria',
                    avatar: '{{ asset('admin/media/flags/algeria.svg') }}',
                    email: 'sean@dellitoa.com'
                },
                {
                    value: 5,
                    name: 'Andorra',
                    avatar: '{{ asset('admin/media/flags/andorra.svg') }}',
                    email: 'brian@exchangae.com'
                },
                {
                    value: 6,
                    name: 'Australia',
                    avatar: '{{ asset('admin/media/flags/australia.svg') }}',
                    email: 'f.mitcham@kpmg.com.au'
                },
                {
                    value: 7,
                    name: 'Iraq',
                    avatar: '{{ asset('admin/media/flags/iraq.svg') }}',
                    email: 'brian@exchangae.com'
                },
                {
                    value: 8,
                    name: 'Kuwait',
                    avatar: '{{ asset('admin/media/flags/kuwait.svg') }}',
                    email: 'f.mitcham@kpmg.com.au'
                }
            ];

            function tagTemplate(tagData) {
                return `
        <tag title="${(tagData.title)}"
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
        </tag>
    `
            }

            function suggestionItemTemplate(tagData) {
                return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">

            ${tagData.avatar ? `
                                                                                                                                                                        <div class='tagify__dropdown__item__avatar-wrap me-2'>
                                                                                                                                                                            <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-25px me-2" src="${tagData.avatar}">
                                                                                                                                                                        </div>` : ''
                }

            <div class="d-flex flex-column">
                <span>${tagData.name}</span>
            </div>
        </div>
    `
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
                    searchKeys: ['name'] // very important to set by which keys to search for suggesttions when typing
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

            // Doc Image Ranger
            var slider = document.querySelector("#kt_slider_basic");
            var valueMin = document.querySelector("#kt_slider_basic_min");
            var valueMax = document.querySelector("#kt_slider_basic_max");

            noUiSlider.create(slider, {
                start: [5, 60],
                behaviour: 'smooth-steps',
                step: 1,
                format: {
                    to: (v) => v | 0,
                    from: (v) => v | 0
                },
                connect: true,
                range: {
                    "min": 1,
                    "max": 80
                }
            });

            slider.noUiSlider.on("update", function(values, handle) {
                if (handle) {
                    valueMax.innerHTML = values[handle];
                } else {
                    valueMin.innerHTML = values[handle];
                }
            });
            
        </script>
    @endsection