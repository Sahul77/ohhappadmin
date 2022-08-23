@extends('admin.layout.main')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">MarketPlace Listings</h1>
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
                        <li class="breadcrumb-item text-gray-500">Manage Listing</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="#kt_contacts_main" class="btn btn-sm btn-secondary">PREVIEW</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="app-content flex-column-fluid" id="kt_app_content">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">
                <div class="col-xl-4">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <span class="symbol symbol-80px w-50px">
                                    <img src="{{ asset('admin/media/listing/item.png') }}" alt="" class="p-3">
                                </span>
                                <!--end::Svg Icon-->
                                <h2>Manage Form</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5 card-scroll" style="height: 70vh;">
                            <!--begin::Form-->
                            <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                                {{-- Photo --}}
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-3">
                                        <span class="required">Photos</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Photos Shows on Service/Products Pages"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mb-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Photo Manage"></i>
                                        </a>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-2">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="symbol symbol-80px w-50px">
                                                <img src="{{ asset('admin/media/listing/item/upload.png') }}" alt="">
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
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                </div>
                                {{-- Title --}}
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Title</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Title of Product/Services"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mb-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Title Manage"></i>
                                        </a>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="title" value=""
                                        placeholder="Enter Title" onkeyup="previewShow('title', this)" />
                                    <!--end::Input-->
                                </div>
                                {{-- Price --}}
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Price</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Price of Product/Services"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mb-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Price Manage"></i>
                                        </a>
                                    </label>
                                    <!--end::Label-->
                                    <div class="input-group mb-5">
                                        <span class="input-group-text border-0" id="basic-addon1">$</span>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid only_digits" name="price"
                                            value="" placeholder="Enter Price" onkeyup="previewShow('price', this)" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                {{-- Category --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Category</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Category Select for items"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mb-3 float-end">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_category">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Category Manage"></i>
                                        </a>
                                    </label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select a Category" name="category"
                                        onchange="previewSelect('category')">
                                        <option></option>
                                        <option value="1">Home & Garden</option>
                                        <option value="2">Entertainment</option>
                                        <option value="3">Clothing & accessories</option>
                                        <option value="4">Family</option>
                                        <option value="5">Electronics</option>
                                        <option value="6">Hobbies</option>
                                        <option value="7">Classifieds</option>
                                    </select>
                                </div>
                                {{-- Sub Category --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Sub Category</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Sub Category Select for items"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mb-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Sub Category Manage"></i>
                                        </a>
                                    </label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select a Sub Category" name="sub_category"
                                        onchange="previewSelect('sub_category')">
                                        <option></option>
                                        <option value="1">Tools</option>
                                        <option value="2">Furniture</option>
                                        <option value="2">Household</option>
                                        <option value="2">Garden</option>
                                        <option value="2">Appliances</option>
                                        <option value="2">Video Games</option>
                                        <option value="2">Books, Films & Music</option>
                                        <option value="2">Bags & Luggage</option>
                                        <option value="2">Women's Clothing & Shoes</option>
                                        <option value="2">Men's Clothing & Shoes</option>
                                        <option value="2">Jewellery & accessories</option>
                                        <option value="2">Health & Beauty</option>
                                        <option value="2">Pet Supplies</option>
                                        <option value="2">Baby & Children</option>
                                        <option value="2">Toys & Games</option>
                                        <option value="2">Electronics & Computers</option>
                                        <option value="2">Mobile Phones</option>
                                        <option value="2">Bicycles</option>
                                    </select>
                                </div>
                                {{-- Condition --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Condition</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Choose Condition of item"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mt-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Condition Manage"></i>
                                        </a>
                                    </label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select Condition" name="condition"
                                        onchange="previewSelect('condition')">
                                        <option></option>
                                        <option value="1">New</option>
                                        <option value="2">Used - Like New</option>
                                        <option value="2">Used - Good</option>
                                        <option value="2">Used - Fair</option>
                                    </select>
                                </div>
                                {{-- Description --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">Description</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Choose Condition of item"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mt-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Description Manage"></i>
                                        </a>
                                    </label>
                                    <textarea data-kt-autosize="true" class="form-control" name="" id="" cols="30" rows="5"
                                        placeholder="Enter Item Description" name="description" onkeyup="previewShow('description', this)"></textarea>
                                </div>
                                {{-- Tags --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">Product Tags</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Use Enter/Space/comma For New Tag"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mt-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Tags Manage"></i>
                                        </a>
                                    </label>
                                    <input class="form-control" value="" id="kt_tagify_1" />
                                    <span class="fs-8 mt-2 badge badge-secondary">Limit: 20</span>
                                </div>
                                {{-- SKU --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">SKU</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter Stock keeping unit(SKU)"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mt-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="SKU Manage"></i>
                                        </a>
                                    </label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="" value=""
                                        placeholder="Enter SKU (Optional)" />
                                    <!--end::Input-->
                                </div>
                                {{-- Location --}}
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="">Location</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Choose Your Location"></i>
                                    </label>
                                    <label class="fs-6 fw-bold mt-3 float-end">
                                        <a href="#">
                                            <i class="fa-solid fa-gear text-success ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Location Manage"></i>
                                        </a>
                                    </label>
                                    <div class="input-group mb-5">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" class="form-control" value="" aria-describedby="basic-addon1"
                                            placeholder="Enter Location" onkeyup="previewShow('location', this)"
                                            id="address" />
                                    </div>
                                </div>
                                <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <div class="col-xl-8">
                    <div class="row gx-1 mt-10 bg-white shadow-sm">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center" style="height: 74vh;">
                                    <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide"
                                        data-bs-ride="carousel" data-bs-interval="8000">
                                        <!--begin::Heading-->
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap sticky-top">
                                            <!--begin::Label-->
                                            <span class="fs-4 fw-bolder pe-2">Preview</span>
                                            <!--end::Label-->

                                            <!--begin::Carousel Indicators-->
                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                                <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0"
                                                    class="ms-1 active"></li>
                                            </ol>
                                            <!--end::Carousel Indicators-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Carousel-->
                                        <div class="carousel-inner pt-8">
                                            <!--begin::Item-->
                                            <div class="carousel-item active">
                                                <img src="{{ asset('admin/media/listing/listing.jpg') }}" alt=""
                                                    class="w-100 rounded">
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Carousel-->
                                    </div>
                                    {{-- <img src="{{ asset('admin/media/illustrations/sigma-1/1-dark.png') }}" class="p-3 m-auto d-block" alt="" style="max-width: 350px;"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border-start border-secondary">
                            <div class="card">
                                <div class="card-body px-5" style="overflow-y: auto; height: 74vh;">
                                    <h3 class="card-title" id="preview_title">Title</h3>
                                    <h5 class="text-muted fw-normal" id="preview_price">Price</h5>
                                    <p class="text-muted fs-7" id="preview_post_location">Posted a few seconds ago</p>
                                    <div class="my-3">
                                        <h5 class="fw-bolder">Details</h5>
                                        <div class="row row-cols-2 g-2 my-2" id="preview_details">

                                        </div>
                                        <p class="text-muted" id="preview_description">Description will appear hear</p>
                                        <h6 class="fw-bolder" id="tag_text"></h6>
                                        <div class="mt-2 mb-3" id="preview_tags">
                                            {{-- Tags --}}
                                        </div>
                                        <iframe height="450" style="border:0;width: 100%;height: 100%" loading="lazy"
                                            allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBjNd5-n0m0NtT1qA4iKmgM3ahD2Podpas&q=Sector+64+Noida,UP&zoom=12">
                                        </iframe>
                                        <h5 id="preview_location"></h5>
                                        <p>Location is approximate</p>
                                        <div class="seller-information border-top py-3">
                                            <div class="fw-bolder fs-4">Seller Information <span
                                                    class="fw-normal float-end fs-5">Seller details</span></div>
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Thumbnail-->
                                                <a href="#" class="symbol symbol-50px">
                                                    <img src="{{ asset('admin/media/avatars/150-10.jpg') }}"
                                                        class="rounded-circle" alt="">
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Sagar Choudhary</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    @include('admin.modals.listing.category.list')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        var input = document.querySelector('#kt_tagify_1'),
            tagify = new Tagify(input, {
                pattern: /^.{0,20}$/, // Validate typed tag(s) by Regex. Here maximum chars length is defined as "20"
                delimiters: ",| ", // add new tags when a comma or a space character is entered
                keepInvalidTags: false, // do not remove invalid tags (but keep them marked as invalid)
                editTags: false,
                maxTags: 20,
                placeholder: "Enter Tags",
                dropdown: {
                    enabled: 0, // show suggestion after 1 typed character
                    fuzzySearch: false, // match only suggestions that starts with the typed characters
                    position: 'text', // position suggestions list next to typed text
                    caseSensitive: false, // allow adding duplicate items if their case is different
                }
            })

        // generate a random color (in HSL format, which I like to use)
        function getRandomColor() {
            function rand(min, max) {
                return min + Math.random() * (max - min);
            }

            var h = rand(1, 360) | 0,
                s = rand(40, 70) | 0,
                l = rand(65, 72) | 0;

            return 'hsl(' + h + ',' + s + '%,' + l + '%)';
        }

        function transformTag(tagData) {
            // tagData.color = getRandomColor();
            tagData.color = 'hsl(0, 0%, 94%)';
            tagData.style = "--tag-bg:" + tagData.color;

            if (tagData.value.toLowerCase() == 'fuck')
                tagData.value = 'f✲✲k'
        }

        tagify.on('add | remove', function(e) {
            // console.log(e.detail.tagify.value)
            $("#preview_tags").html('');
            var html_tags = '';
            $(e.detail.tagify.value).each(function(index, value) {
                html_tags +=
                    `<button class="border-0 rounded-pill px-3 py-2 me-2 my-2">${this.value}</button>`;
                $("#preview_tags").html(html_tags);
            });
            if (html_tags != '') {
                $("#tag_text").text("Tags");
            } else {
                $("#tag_text").text("");
            }
        })

        tagify.on('invalid', function(e) {
            console.log(e, e.detail);
        })

        var clickDebounce;

        tagify.on('click', function(e) {
            const {
                tag: tagElm,
                data: tagData
            } = e.detail;

            // a delay is needed to distinguish between regular click and double-click.
            // this allows enough time for a possible double-click, and noly fires if such
            // did not occur.
            clearTimeout(clickDebounce);
            clickDebounce = setTimeout(() => {
                tagData.color = 'hsl(0, 0%, 94%)';
                // tagData.color = getRandomColor();
                tagData.style = "--tag-bg:" + tagData.color;
                tagify.replaceTag(tagElm, tagData);
            }, 200);
        })

        tagify.on('dblclick', function(e) {
            // when souble clicking, do not change the color of the tag
            clearTimeout(clickDebounce);
        })

        $('.only_digits').keypress(function(e) {
            var a = [];
            var k = e.which;
            for (i = 48; i < 58; i++) {
                a.push(i);
            }
            if (!(a.indexOf(k) >= 0)) {
                e.preventDefault();
            }
            var txt = $('[name="price"]').val().trim();
            if (txt.length == 8) {
                e.preventDefault();
            }
            if (parseInt(txt) <= 0) {
                e.preventDefault();
            }
        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }

        // let title = $('[name="title"]').val();
        function previewShow(data, val) {
            var input_val = val.value;
            if (data == 'title') {
                if (input_val == '') {
                    $("#preview_title").text('Title');
                } else {
                    $("#preview_title").text(input_val);
                }
            }
            if (data == 'price') {
                if (input_val == '') {
                    $("#preview_price").text('Price');
                    $("#preview_price").addClass("text-muted");
                } else {
                    $("#preview_price").removeClass("text-muted");
                    $("#preview_price").text('$' + numberWithCommas(input_val));
                }
            }
            if (data == 'location') {
                if (input_val == '') {
                    $("#preview_post_location").text("Posted a few seconds ago");
                    $("#preview_location").text("");
                } else {
                    $("#preview_post_location").text(`Listed a few seconds ago in ${input_val}`);
                    $("#preview_location").text(input_val);
                }
            }

            if (data == 'description') {
                if (input_val == '') {
                    $("#preview_description").text("Description will appear hear");
                    $("#preview_description").addClass("text-muted");
                } else {
                    $("#preview_description").text(`${input_val}`);
                    $("#preview_description").removeClass("text-muted");
                }
            }
        }

        function previewSelect(ele) {
            var html = '';
            var sel_text = $(`[name='${ele}'] option:selected`).text();
            console.log(sel_text);
            if (!($("h6").hasClass(`sel_${ele}`))) {
                html = `<div class="col">
                                <h6 class="fw-bolder sel_${ele}">${(ele.charAt(0).toUpperCase() + ele.slice(1)).replace(/_/g, ' ')}</h6>
                            </div>
                            <div class="col">
                                <span class="text-center sel_text_${ele}">${sel_text}</span>
                            </div>`;
                $(`#preview_details`).append(html);
            } else if ($("span").hasClass(`sel_text_${ele}`)) {
                $(`.sel_text_${ele}`).text(sel_text);
            }
        }

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

        /* Formatting function for row details - modify as you need */
        function format(d) {
            // `d` is the original data object for the row
            return (`<div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <div class="row row-cols-2 row-cols-lg-2 g-4 g-lg-5">
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Member since</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Email</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Gender</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Address</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Country</span>
                                    <span class="text-dark"><img src="#"
                                            class="w-25px me-3 rounded-circle" alt=""></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Phone</span>
                                    <span class="text-dark">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="row row-cols-2 row-cols-lg-2 g-4 g-lg-5">
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Booked Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Sold Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Request Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                                
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Approved Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">Declined Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                                <div class="col d-flex flex-column align-items-center fw-bold">
                                    <span class="text-muted mb-1">New Hoardings</span>
                                    <span class="text-dark"></span>
                                </div>
                            </div>
                        </div>
                    </div>`);
        }

        $(document).ready(function() {
            var table = $('#kt_table_category').DataTable({
                ajax: "{{ route('ajax.category.json') }}",
                columns: [{
                        className: 'dt-control',
                        orderable: false,
                        data: null,
                        defaultContent: '',
                    },
                    {
                        data: 'name',
                        render: function(data, type, row, meta) {
                            return `<div class="d-flex align-items-center text-gray-600 fw-bold">
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('admin/media/listing/category/${row.img}') }}"
                                                        alt="${row.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('management.user_management.view') }}"
                                                class="text-gray-800 text-hover-primary mb-1">${row.name}</a>
                                        </div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'created_by',
                        render: function(data, type, row, meta) {
                            let created_by = (row.created_by == 'admin') ? 'badge-light-primary' : (
                                    row.created_by == 'vendor') ? 'badge-light-success' :
                                'badge-light-danger';
                            return `<div class="badge ${created_by} fw-bolder">
                                        ${row.created_by}
                                    </div>`;
                        }
                    },
                    {
                        data: 'approval_status',
                        render: function(data, type, row, meta) {
                            let approval_status = (row.approval_status == 'approved') ?
                                'badge-primary' : 'badge-danger'
                            return `<div class="fw-bold badge ${approval_status}">${row.approval_status}</div>`;
                        }
                    },
                    {
                        data: 'approved_by',
                        render: function(data, type, row, meta) {
                            return `<div class="badge text-success fw-bolder">${row.approved_by}
                                    </div>`;
                        }
                    }, {
                        data: 'status',
                        render: function(data, type, row, meta) {
                            let status_class = (row.status == 'active') ? 'badge-light-primary' :
                                'badge-light-danger';
                            return `<div class="badge ${status_class} fw-bolder">${row.status}</div>`;
                        }
                    }, 
                    {
                        data: 'updated_at',
                        render: function(data, type, row, meta) {
                            return `<div class="fw-bold text-dark">${row.updated_at}</div>`;
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
                                            <li><a class="dropdown-item" href="{{ route('management.user_management.view') }}">Edit</a></li>
                                            <li><a class="dropdown-item" role="button" onclick="onDelete()">Delete</a></li>
                                        </ul>
                                    </div>`;
                        }
                    },
                ],
                order: [
                    [1, 'asc']
                ],
            });

            // Add event listener for opening and closing details
            $('#kt_table_category tbody').on('click', 'td.dt-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
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
