<template>
<div>
    <section class="checkout-form">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="from-checkout">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Your data</font>
                            </font>
                        </h4>
                        <form action="/themes/functions/order.php" method="post" id="checkout-form">
                            <input type="hidden" name="case" value="checkout">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="companyname">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Company name (optional)</font>
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="companyname" name="companyname" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="firstname">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">First name or initial (s</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="firstname" name="firstname" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastname">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Last name</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="lastname" name="lastname" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="date_of_birth">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Date of birth (optional)</font>
                                        </font>
                                    </label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="street">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Street</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="street" name="street" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="housenumber">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">House number</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="housenumber" name="housenumber" value="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="zipcode">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Postal Code</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="zipcode" name="zipcode" value="">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="city">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Place</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="city" name="city" value="">
                                </div>
                                <div class="form-group col-md-5">
                                    <!-- TODO SELECT -->
                                    <label for="country">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Country</font>
                                        </font>
                                    </label>
                                    <select class="form-control" id="country" name="country" required="">
                                        <option value="AF">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Afghanistan, Islamic State of</font>
                                            </font>
                                        </option>
                                        <option value="AL">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Albania</font>
                                            </font>
                                        </option>
                                        <option value="DZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Algeria</font>
                                            </font>
                                        </option>
                                        <option value="ALL">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">All countries</font>
                                            </font>
                                        </option>
                                        <option value="AS">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">American Samoa</font>
                                            </font>
                                        </option>
                                        <option value="AD">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Andorra</font>
                                            </font>
                                        </option>
                                        <option value="AO">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Angola</font>
                                            </font>
                                        </option>
                                        <option value="AI">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Anguilla</font>
                                            </font>
                                        </option>
                                        <option value="AQ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Antarctica</font>
                                            </font>
                                        </option>
                                        <option value="AG">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Antigua and Barbuda</font>
                                            </font>
                                        </option>
                                        <option value="AR">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Argentina</font>
                                            </font>
                                        </option>
                                        <option value="AM">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Armenia</font>
                                            </font>
                                        </option>
                                        <option value="AW">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Aruba</font>
                                            </font>
                                        </option>
                                        <option value="AU">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Australia</font>
                                            </font>
                                        </option>
                                        <option value="AT">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Austria</font>
                                            </font>
                                        </option>
                                        <option value="AZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Azerbaidjan</font>
                                            </font>
                                        </option>
                                        <option value="BS">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bahamas</font>
                                            </font>
                                        </option>
                                        <option value="BH">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bahrain</font>
                                            </font>
                                        </option>
                                        <option value="BD">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bangladesh</font>
                                            </font>
                                        </option>
                                        <option value="BB">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Barbados</font>
                                            </font>
                                        </option>
                                        <option value="BY">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Belarus</font>
                                            </font>
                                        </option>
                                        <option value="BE">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Belgium</font>
                                            </font>
                                        </option>
                                        <option value="BZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Belize</font>
                                            </font>
                                        </option>
                                        <option value="BJ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Benin</font>
                                            </font>
                                        </option>
                                        <option value="BM">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bermuda</font>
                                            </font>
                                        </option>
                                        <option value="BT">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bhutan</font>
                                            </font>
                                        </option>
                                        <option value="BO">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bolivia</font>
                                            </font>
                                        </option>
                                        <option value="BQ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bonaire</font>
                                            </font>
                                        </option>
                                        <option value="BA">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bosnia and Herzegovina</font>
                                            </font>
                                        </option>
                                        <option value="BW">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Botswana</font>
                                            </font>
                                        </option>
                                        <option value="BV">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bouvet Island</font>
                                            </font>
                                        </option>
                                        <option value="BR">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Brazil</font>
                                            </font>
                                        </option>
                                        <option value="BN">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Brunei Darussalam</font>
                                            </font>
                                        </option>
                                        <option value="BG">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bulgaria</font>
                                            </font>
                                        </option>
                                        <option value="BF">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Burkina Faso</font>
                                            </font>
                                        </option>
                                        <option value="BI">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Burundi</font>
                                            </font>
                                        </option>
                                        <option value="KH">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Cambodia, Kingdom of</font>
                                            </font>
                                        </option>
                                        <option value="CM">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Cameroon</font>
                                            </font>
                                        </option>
                                        <option value="CA">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Canada</font>
                                            </font>
                                        </option>
                                        <option value="CV">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Cape Verde</font>
                                            </font>
                                        </option>
                                        <option value="KY">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Cayman Islands</font>
                                            </font>
                                        </option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, The Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Tjechië</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="TP">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="CS">Former Czechoslovakia</option>
                                        <option value="FR">Frankrijk</option>
                                        <option value="GF">French Guyana</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Duitsland</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Griekenland</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe (French)</option>
                                        <option value="GU">Guam (USA)</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong-kong</option>
                                        <option value="HU">Hongarijë</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ierland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italië</option>
                                        <option value="CI">Ivory Coast (Cote D'Ivoire)</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyz Republic (Kyrgyzstan)</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxemburg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique (French)</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL" selected="">Nederland</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia (French)</option>
                                        <option value="NZ">Nieuw Zeeland</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Island</option>
                                        <option value="PL">Polen</option>
                                        <option value="PF">Polynesia (French)</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion (French)</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="GS">S. Georgia &amp; S. Sandwich Isls.</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts &amp; Nevis Anguilla</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="ST">Saint Tome (Sao Tome) and Principe</option>
                                        <option value="VC">Saint Vincent &amp; Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Servië</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="KR">South Korea</option>
                                        <option value="ES">Spanje</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Sudan</font>
                                            </font>
                                        </option>
                                        <option value="SR">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Suriname</font>
                                            </font>
                                        </option>
                                        <option value="SJ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Svalbard and Jan Mayen Islands</font>
                                            </font>
                                        </option>
                                        <option value="SZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Swaziland</font>
                                            </font>
                                        </option>
                                        <option value="SE">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Sweden</font>
                                            </font>
                                        </option>
                                        <option value="CH">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Switzerland</font>
                                            </font>
                                        </option>
                                        <option value="SY">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Syria</font>
                                            </font>
                                        </option>
                                        <option value="TJ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tajikistan</font>
                                            </font>
                                        </option>
                                        <option value="TW">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Taiwan</font>
                                            </font>
                                        </option>
                                        <option value="TZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tanzania</font>
                                            </font>
                                        </option>
                                        <option value="TH">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Thailand</font>
                                            </font>
                                        </option>
                                        <option value="TG">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Togo</font>
                                            </font>
                                        </option>
                                        <option value="TK">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tokelau</font>
                                            </font>
                                        </option>
                                        <option value="TO">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tonga</font>
                                            </font>
                                        </option>
                                        <option value="TT">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Trinidad and Tobago</font>
                                            </font>
                                        </option>
                                        <option value="TN">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tunisia</font>
                                            </font>
                                        </option>
                                        <option value="TR">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Turkey</font>
                                            </font>
                                        </option>
                                        <option value="TM">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Turkmenistan</font>
                                            </font>
                                        </option>
                                        <option value="TC">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Turks and Caicos Islands</font>
                                            </font>
                                        </option>
                                        <option value="TV">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tuvalu</font>
                                            </font>
                                        </option>
                                        <option value="UG">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Uganda</font>
                                            </font>
                                        </option>
                                        <option value="GB">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">United Kingdom</font>
                                            </font>
                                        </option>
                                        <option value="UA">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Ukraine</font>
                                            </font>
                                        </option>
                                        <option value="AE">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">United Arab Emirates</font>
                                            </font>
                                        </option>
                                        <option value="US">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">United States</font>
                                            </font>
                                        </option>
                                        <option value="UY">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Uruguay</font>
                                            </font>
                                        </option>
                                        <option value="UZ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Uzbekistan</font>
                                            </font>
                                        </option>
                                        <option value="VU">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vanuatu</font>
                                            </font>
                                        </option>
                                        <option value="VE">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Venezuela</font>
                                            </font>
                                        </option>
                                        <option value="VN">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vietnam</font>
                                            </font>
                                        </option>
                                        <option value="VG">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Virgin Islands (British)</font>
                                            </font>
                                        </option>
                                        <option value="VI">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Virgin Islands (USA)</font>
                                            </font>
                                        </option>
                                        <option value="WF">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Wallis and Futuna Islands</font>
                                            </font>
                                        </option>
                                        <option value="EH">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Western Sahara</font>
                                            </font>
                                        </option>
                                        <option value="YE">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Yemen</font>
                                            </font>
                                        </option>
                                        <option value="YU">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Yugoslavia</font>
                                            </font>
                                        </option>
                                        <option value="ZR">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Zaire</font>
                                            </font>
                                        </option>
                                        <option value="ZM">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Zambia</font>
                                            </font>
                                        </option>
                                        <option value="ZW">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Zimbabwe</font>
                                            </font>
                                        </option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">telephone number</font>
                                        </font>
                                    </label>
                                    <input required="" type="text" class="form-control" id="phone" name="phone" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">E-mail</font>
                                        </font>
                                    </label>
                                    <input required="" type="email" class="form-control" id="email" name="email" value="">
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="form-check ">
                                    <input class="form-check-input showw use_shipping_address" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Delivery address is different from the billing address
                                            </font>
                                        </font>
                                    </label>
                                </div>
                            </div>

                            <div class="hidee" style="display: none;">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="ship_address">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Address</font>
                                            </font>
                                        </label>
                                        <input type="text" class="form-control" id="ship_address" name="ship_address" value="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="ship_zipcode">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Postal Code</font>
                                            </font>
                                        </label>
                                        <input type="text" class="form-control" id="ship_zipcode" name="ship_zipcode" value="">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="ship_city">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Place</font>
                                            </font>
                                        </label>
                                        <input type="text" class="form-control" id="ship_city" name="ship_city" value="">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <!-- TODO COUNTRY -->
                                        <label for="ship_country">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Country</font>
                                            </font>
                                        </label>
                                        <select class="form-control" id="ship_country" name="ship_country" required="">
                                            <option value="AF">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Afghanistan, Islamic State of</font>
                                                </font>
                                            </option>
                                            <option value="AL">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Albania</font>
                                                </font>
                                            </option>
                                            <option value="DZ">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Algeria</font>
                                                </font>
                                            </option>
                                            <option value="ALL">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">All countries</font>
                                                </font>
                                            </option>
                                            <option value="AS">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">American Samoa</font>
                                                </font>
                                            </option>
                                            <option value="AD">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Andorra</font>
                                                </font>
                                            </option>
                                            <option value="AO">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Angola</font>
                                                </font>
                                            </option>
                                            <option value="AI">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Anguilla</font>
                                                </font>
                                            </option>
                                            <option value="AQ">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Antarctica</font>
                                                </font>
                                            </option>
                                            <option value="AG">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Antigua and Barbuda</font>
                                                </font>
                                            </option>
                                            <option value="AR">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Argentina</font>
                                                </font>
                                            </option>
                                            <option value="AM">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Armenia</font>
                                                </font>
                                            </option>
                                            <option value="AW">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Aruba</font>
                                                </font>
                                            </option>
                                            <option value="AU">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Australia</font>
                                                </font>
                                            </option>
                                            <option value="AT">Oostenrijk</option>
                                            <option value="AZ">Azerbaidjan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">België</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire</option>
                                            <option value="BA">Bosnia-Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia, Kingdom of</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, The Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Tjechië</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TP">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="CS">Former Czechoslovakia</option>
                                            <option value="FR">Frankrijk</option>
                                            <option value="GF">French Guyana</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Duitsland</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Griekenland</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe (French)</option>
                                            <option value="GU">Guam (USA)</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong-kong</option>
                                            <option value="HU">Hongarijë</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ierland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italië</option>
                                            <option value="CI">Ivory Coast (Cote D'Ivoire)</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="XK">Kosovo</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyz Republic (Kyrgyzstan)</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxemburg</option>
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique (French)</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL" selected="">Nederland</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia (French)</option>
                                            <option value="NZ">Nieuw Zeeland</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn Island</option>
                                            <option value="PL">Polen</option>
                                            <option value="PF">Polynesia (French)</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion (French)</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="GS">S. Georgia &amp; S. Sandwich Isls.</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts &amp; Nevis Anguilla</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="ST">Saint Tome (Sao Tome) and Principe</option>
                                            <option value="VC">Saint Vincent &amp; Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Servië</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spanje</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Zweden</option>
                                            <option value="CH">Zwitserland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TJ">Tadjikistan</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="GB">Verenigd Koninkrijk</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="VI">Virgin Islands (USA)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="YU">Yugoslavia</option>
                                            <option value="ZR">Zaire</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Comments and additions for this order:</font>
                                    </font>
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarks"></textarea>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="zsd" value="1" name="optin">
                                        <label class="form-check-label" for="zsd">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">I want to sign up for the newsletter</font>
                                            </font>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="sd" value="1" name="termsconditions" required="">
                                        <label class="form-check-label" for="sd">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">I agree to the Terms and Conditions*</font>
                                            </font>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="btn-cus">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">to pay</font>
                                        </font>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <div class="mt-2">
                                        <img src="https://www.mollie.com/external/icons/payment-methods/ideal.svg" height="50">
                                        <img src="https://www.mollie.com/external/icons/payment-methods/bancontact.svg" height="50">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
</template>
