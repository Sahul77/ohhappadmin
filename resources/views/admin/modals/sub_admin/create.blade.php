<div class="modal fade" id="kt_modal_add_admin" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header py-3" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder fs-4">Add New Sub-Admin</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <i class="fa-solid fa-xmark fs-2"></i>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 my-2">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-bold fs-6 mb-5">Image</label>
                            <!--end::Label-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url({{ asset('admin/media/svg/avatars/blank.svg') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{ asset('admin/media/svg/avatars/blank.svg') }});">
                                </div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="fa-solid fa-pen fs-7 text-dark"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">

                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">First Name</label>
                                    <!--end::Label-->
                                    <input type="text" name="fname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="First name" value="" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Last Name</label>
                                    <!--end::Label-->
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" placeholder="Last name"
                                        value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter E-mail Address" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Country</label>
                            <!--end::Label-->
                            <select id="kt_ecommerce_select2_country"
                                class="form-select form-select-solid lh-1 py-3 fw-bold" name="country"
                                data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                <option value="">Select a Country...</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/afghanistan.svg') }}"
                                    value="AF">Afghanistan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/aland-islands.svg') }}"
                                    value="AX">Aland Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/albania.svg') }}"
                                    value="AL">Albania</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/algeria.svg') }}"
                                    value="DZ">Algeria</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/american-samoa.svg') }}"
                                    value="AS">American Samoa</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/andorra.svg') }}"
                                    value="AD">Andorra</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/angola.svg') }}"
                                    value="AO">Angola</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/anguilla.svg') }}"
                                    value="AI">Anguilla</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/antigua-and-barbuda.svg') }}"
                                    value="AG">Antigua and Barbuda
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/argentina.svg') }}"
                                    value="AR">Argentina</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/armenia.svg') }}"
                                    value="AM">Armenia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/aruba.svg') }}"
                                    value="AW">Aruba</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/australia.svg') }}"
                                    value="AU">Australia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/austria.svg') }}"
                                    value="AT">Austria</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/azerbaijan.svg') }}"
                                    value="AZ">Azerbaijan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bahamas.svg') }}"
                                    value="BS">Bahamas</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bahrain.svg') }}"
                                    value="BH">Bahrain</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bangladesh.svg') }}"
                                    value="BD">Bangladesh</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/barbados.svg') }}"
                                    value="BB">Barbados</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/belarus.svg') }}"
                                    value="BY">Belarus</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/belgium.svg') }}"
                                    value="BE">Belgium</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/belize.svg') }}"
                                    value="BZ">Belize</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/benin.svg') }}"
                                    value="BJ">Benin</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bermuda.svg') }}"
                                    value="BM">Bermuda</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bhutan.svg') }}"
                                    value="BT">Bhutan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bolivia.svg') }}"
                                    value="BO">Bolivia, Plurinational State of
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bonaire.svg') }}"
                                    value="BQ">Bonaire, Sint Eustatius and Saba
                                </option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/bosnia-and-herzegovina.svg') }}"
                                    value="BA">Bosnia and
                                    Herzegovina</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/botswana.svg') }}"
                                    value="BW">Botswana</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/brazil.svg') }}"
                                    value="BR">Brazil</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/british-indian-ocean-territory.svg') }}"
                                    value="IO">British
                                    Indian Ocean Territory</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/brunei.svg') }}"
                                    value="BN">Brunei Darussalam</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/bulgaria.svg') }}"
                                    value="BG">Bulgaria</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/burkina-faso.svg') }}"
                                    value="BF">Burkina Faso</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/burundi.svg') }}"
                                    value="BI">Burundi</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cambodia.svg') }}"
                                    value="KH">Cambodia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cameroon.svg') }}"
                                    value="CM">Cameroon</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/canada.svg') }}"
                                    value="CA">Canada</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cape-verde.svg') }}"
                                    value="CV">Cape Verde</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cayman-islands.svg') }}"
                                    value="KY">Cayman Islands</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/central-african-republic.svg') }}"
                                    value="CF">Central African
                                    Republic</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/chad.svg') }}"
                                    value="TD">Chad</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/chile.svg') }}"
                                    value="CL">Chile</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/china.svg') }}"
                                    value="CN">China</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/christmas-island.svg') }}"
                                    value="CX">Christmas Island</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cocos-island.svg') }}"
                                    value="CC">Cocos (Keeling) Islands
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/colombia.svg') }}"
                                    value="CO">Colombia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/comoros.svg') }}"
                                    value="KM">Comoros</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cook-islands.svg') }}"
                                    value="CK">Cook Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/costa-rica.svg') }}"
                                    value="CR">Costa Rica</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ivory-coast.svg') }}"
                                    value="CI">Côte d'Ivoire</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/croatia.svg') }}"
                                    value="HR">Croatia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/cuba.svg') }}"
                                    value="CU">Cuba</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/curacao.svg') }}"
                                    value="CW">Curaçao</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/czech-republic.svg') }}"
                                    value="CZ">Czech Republic</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/denmark.svg') }}"
                                    value="DK">Denmark</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/djibouti.svg') }}"
                                    value="DJ">Djibouti</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/dominica.svg') }}"
                                    value="DM">Dominica</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/dominican-republic.svg') }}"
                                    value="DO">Dominican Republic
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ecuador.svg') }}"
                                    value="EC">Ecuador</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/egypt.svg') }}"
                                    value="EG">Egypt</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/el-salvador.svg') }}"
                                    value="SV">El Salvador</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/equatorial-guinea.svg') }}"
                                    value="GQ">Equatorial Guinea</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/eritrea.svg') }}"
                                    value="ER">Eritrea</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/estonia.svg') }}"
                                    value="EE">Estonia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ethiopia.svg') }}"
                                    value="ET">Ethiopia</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/falkland-islands.svg') }}"
                                    value="FK">Falkland Islands (Malvinas)
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/fiji.svg') }}"
                                    value="FJ">Fiji</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/finland.svg') }}"
                                    value="FI">Finland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/france.svg') }}"
                                    value="FR">France</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/french-polynesia.svg') }}"
                                    value="PF">French Polynesia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/gabon.svg') }}"
                                    value="GA">Gabon</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/gambia.svg') }}"
                                    value="GM">Gambia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/georgia.svg') }}"
                                    value="GE">Georgia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/germany.svg') }}"
                                    value="DE">Germany</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ghana.svg') }}"
                                    value="GH">Ghana</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/gibraltar.svg') }}"
                                    value="GI">Gibraltar</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/greece.svg') }}"
                                    value="GR">Greece</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/greenland.svg') }}"
                                    value="GL">Greenland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/grenada.svg') }}"
                                    value="GD">Grenada</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/guam.svg') }}"
                                    value="GU">Guam</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/guatemala.svg') }}"
                                    value="GT">Guatemala</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/guernsey.svg') }}"
                                    value="GG">Guernsey</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/guinea.svg') }}"
                                    value="GN">Guinea</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/guinea-bissau.svg') }}"
                                    value="GW">Guinea-Bissau</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/haiti.svg') }}"
                                    value="HT">Haiti</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/vatican-city.svg') }}"
                                    value="VA">Holy See (Vatican City State)
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/honduras.svg') }}"
                                    value="HN">Honduras</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/hong-kong.svg') }}"
                                    value="HK">Hong Kong</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/hungary.svg') }}"
                                    value="HU">Hungary</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/iceland.svg') }}"
                                    value="IS">Iceland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/india.svg') }}"
                                    value="IN" selected>India</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/indonesia.svg') }}"
                                    value="ID">Indonesia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/iran.svg') }}"
                                    value="IR">Iran, Islamic Republic of</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/iraq.svg') }}"
                                    value="IQ">Iraq</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ireland.svg') }}"
                                    value="IE">Ireland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/isle-of-man.svg') }}"
                                    value="IM">Isle of Man</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/israel.svg') }}"
                                    value="IL">Israel</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/italy.svg') }}"
                                    value="IT">Italy</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/jamaica.svg') }}"
                                    value="JM">Jamaica</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/japan.svg') }}"
                                    value="JP">Japan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/jersey.svg') }}"
                                    value="JE">Jersey</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/jordan.svg') }}"
                                    value="JO">Jordan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/kazakhstan.svg') }}"
                                    value="KZ">Kazakhstan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/kenya.svg') }}"
                                    value="KE">Kenya</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/kiribati.svg') }}"
                                    value="KI">Kiribati</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/north-korea.svg') }}"
                                    value="KP">Korea, Democratic People's
                                    Republic of</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/kuwait.svg') }}"
                                    value="KW">Kuwait</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/kyrgyzstan.svg') }}"
                                    value="KG">Kyrgyzstan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/laos.svg') }}"
                                    value="LA">Lao People's Democratic Republic
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/latvia.svg') }}"
                                    value="LV">Latvia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/lebanon.svg') }}"
                                    value="LB">Lebanon</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/lesotho.svg') }}"
                                    value="LS">Lesotho</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/liberia.svg') }}"
                                    value="LR">Liberia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/libya.svg') }}"
                                    value="LY">Libya</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/liechtenstein.svg') }}"
                                    value="LI">Liechtenstein</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/lithuania.svg') }}"
                                    value="LT">Lithuania</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/luxembourg.svg') }}"
                                    value="LU">Luxembourg</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/macao.svg') }}"
                                    value="MO">Macao</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/madagascar.svg') }}"
                                    value="MG">Madagascar</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/malawi.svg') }}"
                                    value="MW">Malawi</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/malaysia.svg') }}"
                                    value="MY">Malaysia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/maldives.svg') }}"
                                    value="MV">Maldives</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mali.svg') }}"
                                    value="ML">Mali</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/malta.svg') }}"
                                    value="MT">Malta</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/marshall-island.svg') }}"
                                    value="MH">Marshall Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/martinique.svg') }}"
                                    value="MQ">Martinique</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mauritania.svg') }}"
                                    value="MR">Mauritania</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mauritius.svg') }}"
                                    value="MU">Mauritius</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mexico.svg') }}"
                                    value="MX">Mexico</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/micronesia.svg') }}"
                                    value="FM">Micronesia, Federated States of
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/moldova.svg') }}"
                                    value="MD">Moldova, Republic of</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/monaco.svg') }}"
                                    value="MC">Monaco</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mongolia.svg') }}"
                                    value="MN">Mongolia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/montenegro.svg') }}"
                                    value="ME">Montenegro</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/montserrat.svg') }}"
                                    value="MS">Montserrat</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/morocco.svg') }}"
                                    value="MA">Morocco</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/mozambique.svg') }}"
                                    value="MZ">Mozambique</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/myanmar.svg') }}"
                                    value="MM">Myanmar</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/namibia.svg') }}"
                                    value="NA">Namibia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/nauru.svg') }}"
                                    value="NR">Nauru</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/nepal.svg') }}"
                                    value="NP">Nepal</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/netherlands.svg') }}"
                                    value="NL">Netherlands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/new-zealand.svg') }}"
                                    value="NZ">New Zealand</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/nicaragua.svg') }}"
                                    value="NI">Nicaragua</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/niger.svg') }}"
                                    value="NE">Niger</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/nigeria.svg') }}"
                                    value="NG">Nigeria</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/niue.svg') }}"
                                    value="NU">Niue</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/norfolk-island.svg') }}"
                                    value="NF">Norfolk Island</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/northern-mariana-islands.svg') }}"
                                    value="MP">Northern Mariana
                                    Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/norway.svg') }}"
                                    value="NO">Norway</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/oman.svg') }}"
                                    value="OM">Oman</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/pakistan.svg') }}"
                                    value="PK">Pakistan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/palau.svg') }}"
                                    value="PW">Palau</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/palestine.svg') }}"
                                    value="PS">Palestinian Territory, Occupied
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/panama.svg') }}"
                                    value="PA">Panama</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/papua-new-guinea.svg') }}"
                                    value="PG">Papua New Guinea</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/paraguay.svg') }}"
                                    value="PY">Paraguay</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/peru.svg') }}"
                                    value="PE">Peru</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/philippines.svg') }}"
                                    value="PH">Philippines</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/poland.svg') }}"
                                    value="PL">Poland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/portugal.svg') }}"
                                    value="PT">Portugal</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/puerto-rico.svg') }}"
                                    value="PR">Puerto Rico</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/qatar.svg') }}"
                                    value="QA">Qatar</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/romania.svg') }}"
                                    value="RO">Romania</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/russia.svg') }}"
                                    value="RU">Russian Federation</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/rwanda.svg') }}"
                                    value="RW">Rwanda</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/st-barts.svg') }}"
                                    value="BL">Saint Barthélemy</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/saint-kitts-and-nevis.svg') }}"
                                    value="KN">Saint Kitts and Nevis
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/st-lucia.svg') }}"
                                    value="LC">Saint Lucia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sint-maarten.svg') }}"
                                    value="MF">Saint Martin (French part)
                                </option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/st-vincent-and-the-grenadines.svg') }}"
                                    value="VC">Saint Vincent
                                    and the Grenadines</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/samoa.svg') }}"
                                    value="WS">Samoa</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/san-marino.svg') }}"
                                    value="SM">San Marino</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/sao-tome-and-prince.svg') }}"
                                    value="ST">Sao Tome and Principe
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/saudi-arabia.svg') }}"
                                    value="SA">Saudi Arabia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/senegal.svg') }}"
                                    value="SN">Senegal</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/serbia.svg') }}"
                                    value="RS">Serbia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/seychelles.svg') }}"
                                    value="SC">Seychelles</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sierra-leone.svg') }}"
                                    value="SL">Sierra Leone</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/singapore.svg') }}"
                                    value="SG">Singapore</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sint-maarten.svg') }}"
                                    value="SX">Sint Maarten (Dutch part)
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/slovakia.svg') }}"
                                    value="SK">Slovakia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/slovenia.svg') }}"
                                    value="SI">Slovenia</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/solomon-islands.svg') }}"
                                    value="SB">Solomon Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/somalia.svg') }}"
                                    value="SO">Somalia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/south-africa.svg') }}"
                                    value="ZA">South Africa</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/south-korea.svg') }}"
                                    value="KR">South Korea</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/south-sudan.svg') }}"
                                    value="SS">South Sudan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/spain.svg') }}"
                                    value="ES">Spain</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sri-lanka.svg') }}"
                                    value="LK">Sri Lanka</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sudan.svg') }}"
                                    value="SD">Sudan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/suriname.svg') }}"
                                    value="SR">Suriname</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/swaziland.svg') }}"
                                    value="SZ">Swaziland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/sweden.svg') }}"
                                    value="SE">Sweden</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/switzerland.svg') }}"
                                    value="CH">Switzerland</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/syria.svg') }}"
                                    value="SY">Syrian Arab Republic</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/taiwan.svg') }}"
                                    value="TW">Taiwan, Province of China</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tajikistan.svg') }}"
                                    value="TJ">Tajikistan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tanzania.svg') }}"
                                    value="TZ">Tanzania, United Republic of
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/thailand.svg') }}"
                                    value="TH">Thailand</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/togo.svg') }}"
                                    value="TG">Togo</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tokelau.svg') }}"
                                    value="TK">Tokelau</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tonga.svg') }}"
                                    value="TO">Tonga</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/trinidad-and-tobago.svg') }}"
                                    value="TT">Trinidad and Tobago
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tunisia.svg') }}"
                                    value="TN">Tunisia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/turkey.svg') }}"
                                    value="TR">Turkey</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/turkmenistan.svg') }}"
                                    value="TM">Turkmenistan</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/turks-and-caicos.svg') }}"
                                    value="TC">Turks and Caicos Islands
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/tuvalu.svg') }}"
                                    value="TV">Tuvalu</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/uganda.svg') }}"
                                    value="UG">Uganda</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/ukraine.svg') }}"
                                    value="UA">Ukraine</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/united-arab-emirates.svg') }}"
                                    value="AE">United Arab Emirates
                                </option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/united-kingdom.svg') }}"
                                    value="GB">United Kingdom</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/united-states.svg') }}"
                                    value="US">United States</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/uruguay.svg') }}"
                                    value="UY">Uruguay</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/uzbekistan.svg') }}"
                                    value="UZ">Uzbekistan</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/vanuatu.svg') }}"
                                    value="VU">Vanuatu</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/venezuela.svg') }}"
                                    value="VE">Venezuela, Bolivarian Republic of
                                </option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/vietnam.svg') }}"
                                    value="VN">Vietnam</option>
                                <option
                                    data-kt-select2-country="{{ asset('admin/media/flags/virgin-islands.svg') }}"
                                    value="VI">Virgin Islands</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/yemen.svg') }}"
                                    value="YE">Yemen</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/zambia.svg') }}"
                                    value="ZM">Zambia</option>
                                <option data-kt-select2-country="{{ asset('admin/media/flags/zimbabwe.svg') }}"
                                    value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Mobile</label>
                            <!--end::Label-->
                            <div class="input-group mb-3">
                                <span class="input-group-text border-0 bg-secondary" id="basic-addon1">+91</span>
                                <input type="text" name="phone"
                                    class="form-control form-control-lg form-control-solid px-2"
                                    placeholder="Enter Phone number" value="" />
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter New Password" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Confirm Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="confirm_password"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Confirm Password"
                                value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">Send Details Via</label>
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                    <span class="fw-bold ps-2 fs-6">Email</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-inline form-check-solid">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                    <span class="fw-bold ps-2 fs-6">Phone</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--begin::Input-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-5">Role</label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                        id="kt_modal_update_role_option_0" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                                        <div class="fw-bolder text-gray-800">Administrator</div>
                                        <div class="text-gray-600">Best for website owners and
                                            company administrators</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                        id="kt_modal_update_role_option_2" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_2">
                                        <div class="fw-bolder text-gray-800">Analyst</div>
                                        <div class="text-gray-600">Best for people who need full
                                            access to analytics data, but don't need to update
                                            website settings</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                        id="kt_modal_update_role_option_3" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_3">
                                        <div class="fw-bolder text-gray-800">Support</div>
                                        <div class="text-gray-600">Best for employees who
                                            regularly refund payments, tickets and respond to disputes</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <!--end::Roles-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3"
                        data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
