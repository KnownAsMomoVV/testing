<?php
include("db.php");
if (isset($_POST) && !isset($_POST['btn_save'])) {

}
if (isset($_POST['btn_save'])) {
    header("Location:/index.php");
}
?>


<!DOCTYPE html>
<html class="text-dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2-1.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<body class="text-dark" style="background: var(--bs-dark);">
<nav class="navbar navbar-light navbar-expand-md textdark text-dark">
    <div class="container-fluid"><a class="navbar-brand bg-dark" style="color: rgba(255,255,255,0.9);" href="/index.php">Shop</a><button data-bs-toggle="collapse" class="navbar-toggler bg-dark" data-bs-target="#navcol-1" style="color: rgba(255,254,254,0.55);"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse bg-dark" id="navcol-1">
            <div class="collapse navbar-collapse bg-dark" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" style="color: rgba(255,255,255,0.9);" data-bs-target="index.html" href="/index.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.html" style="color: rgba(255,255,255,0.9);">Über uns</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Kontakt.php" style="color: rgba(255,255,255,0.9);">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link active" style="color: rgba(255,255,255,0.9);" data-bs-target="index.html" href="/login.php">Login</a></li>
                </ul>
            </div>
        </div>
</nav>
<script>
    function showDiv() {
        document.getElementById('w_button').style.display = "block";
        document.getElementById('antrag2').style.display = "none";
    }
</script>


<div>

</div>

<section class="bg-dark photo-gallery">
    <div class="container bg-dark" style="color: rgb(255,255,255);background: rgb(253,254,255);">
        <div class="bg-dark intro">
            <p class="text-center bg-dark" style="color: rgb(255,255,255);"></p>
        </div>
    </div>
</section>
<div class="col-md-12" style="max-width: 800px; margin: 0 auto">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Kontakt-Daten</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body" style="margin-bottom: 30px">
            <form  onclick="showDiv(); return false;" method="post" name="form" enctype="multipart/form-data"> <!-- Hier onsubmit statt onlick -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating" style="margin-bottom: 5px">Anrede</label><br>
                            <input type="radio" id="anrede" name="anrede" value="HTML">
                            <label for="html">Herr</label>
                            <input type="radio" id="anrede" name="anrede" value="CSS">
                            <label for="css">Frau</label>
                            <input type="radio" id="anrede" name="anrede" value="CSS">
                            <label for="css">Divers</label><br>
                        </div>
                    </div>
        <div class="card-body" style="margin-bottom: 30px">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Vorname(n)</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nachname(n)</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Geburtsdatum</label>
                            <input type="date" name="email" id="email" placeholder="TT.MM.JJJJ" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" id="country" name="country" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="15" oninput="this.value = this.value.replace(/[^0-9.]/g, '')//.replace(/(\..*?)\..*/g, '$1');" required/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">City</label>
                            <input type="text" name="city" id="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group bmd-form-group" style="max-width: 150px">
                            <label class="bmd-label-floating">Postleitzahl</label>
                            <input type="text" name="plz" id="plz" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="col-md-4" style="margin-top: 20px;margin-left: 5px">
                        <div class="form-group bmd-form-group" style="max-width: 150px">
                            <input type="checkbox" id="p_email" name="p_email" value="Email" style="width: 20px;height: 20px">
                           <label for="css" style="font-size: 20px">Email</label>
                            <!--  <input type="checkbox" id="anrede" name="anrede" value="CSS" style="width: 20px;height: 20px">
                            <label for="css" style="font-size: 20px">Frau</label>-->
                        </div>
                        </div>

                    </div>

                </div>
                <input type="submit" name="submit"  id='antrag2' class="btn btn-primary"  value='Weiter' style="margin-top: 10px;max-width: 75px">
                    <!--<input id='btn_save' class="btn btn-primary" name="submit" type='submit' value='Weiter' style="margin-top: 20px;max-width: 75px">-->
                    <div id="w_button"  style="display:none;" class="answer_list" >
                        <h1 style="margin-top: -20px">Testing</h1>
                        <p>Testing text</p>
                        <div class="form-group bmd-form-group" style="max-width: 150px">
                            <label class="bmd-label-floating">Geburstdatum</label>
                            <input type="date" name="geb_datum" id="geb_datum" class="form-control">
                         </div>
                        <div class="form-group bmd-form-group" style="max-width: 150px">
                            <label class="bmd-label-floating">Geburtsort</label>
                            <input type="text" name="geb_ort" id="geb_ort" class="form-control">
                        </div>
                        <div class="form-group bmd-form-group" style="max-width: 300px">
                            <label class="bmd-label-floating">Beschäftigt als</label>
                            <select style="margin-bottom: 10px" name="arbeit" id="arbeit" class="form-control"> <option value="">Beschäftigung</option> <option value="1">Arbeiter</option> <option value="2">Angestellter</option> <option value="3">Beamte und Angestellter im ö.D.</option> <option value="4">Azubi</option> <option value="5">Arbeitssuchend</option> <option value="6">Hausfrau / -mann</option> <option value="7">Rentner</option> <option value="8">Soldat</option> <option value="13">Selbständig</option> <option value="14">Schüler, Studenten</option> </select>
                        </div>


                    <div class="form-group bmd-form-group" style="max-width: 300px;">
                        <label class="bmd-label-floating">Staatsangehörigkeit</label>
                        <select style="margin-bottom: 20px" name="staat" class="form-control" id="staat"> <option value="0" label="Wähle ein land aus" selected="selected">Wähle ein land aus..</option> <optgroup id="country-optgroup-Africa" label="Africa"> <option value="DZ" label="Algeria">Algeria</option> <option value="AO" label="Angola">Angola</option> <option value="BJ" label="Benin">Benin</option> <option value="BW" label="Botswana">Botswana</option> <option value="BF" label="Burkina Faso">Burkina Faso</option> <option value="BI" label="Burundi">Burundi</option> <option value="CM" label="Cameroon">Cameroon</option> <option value="CV" label="Cape Verde">Cape Verde</option> <option value="CF" label="Central African Republic">Central African Republic</option> <option value="TD" label="Chad">Chad</option> <option value="KM" label="Comoros">Comoros</option> <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option> <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option> <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option> <option value="DJ" label="Djibouti">Djibouti</option> <option value="EG" label="Egypt">Egypt</option> <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option> <option value="ER" label="Eritrea">Eritrea</option> <option value="ET" label="Ethiopia">Ethiopia</option> <option value="GA" label="Gabon">Gabon</option> <option value="GM" label="Gambia">Gambia</option> <option value="GH" label="Ghana">Ghana</option> <option value="GN" label="Guinea">Guinea</option> <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option> <option value="KE" label="Kenya">Kenya</option> <option value="LS" label="Lesotho">Lesotho</option> <option value="LR" label="Liberia">Liberia</option> <option value="LY" label="Libya">Libya</option> <option value="MG" label="Madagascar">Madagascar</option> <option value="MW" label="Malawi">Malawi</option> <option value="ML" label="Mali">Mali</option> <option value="MR" label="Mauritania">Mauritania</option> <option value="MU" label="Mauritius">Mauritius</option> <option value="YT" label="Mayotte">Mayotte</option> <option value="MA" label="Morocco">Morocco</option> <option value="MZ" label="Mozambique">Mozambique</option> <option value="NA" label="Namibia">Namibia</option> <option value="NE" label="Niger">Niger</option> <option value="NG" label="Nigeria">Nigeria</option> <option value="RW" label="Rwanda">Rwanda</option> <option value="RE" label="Réunion">Réunion</option> <option value="SH" label="Saint Helena">Saint Helena</option> <option value="SN" label="Senegal">Senegal</option> <option value="SC" label="Seychelles">Seychelles</option> <option value="SL" label="Sierra Leone">Sierra Leone</option> <option value="SO" label="Somalia">Somalia</option> <option value="ZA" label="South Africa">South Africa</option> <option value="SD" label="Sudan">Sudan</option> <option value="SZ" label="Swaziland">Swaziland</option> <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option> <option value="TZ" label="Tanzania">Tanzania</option> <option value="TG" label="Togo">Togo</option> <option value="TN" label="Tunisia">Tunisia</option> <option value="UG" label="Uganda">Uganda</option> <option value="EH" label="Western Sahara">Western Sahara</option> <option value="ZM" label="Zambia">Zambia</option> <option value="ZW" label="Zimbabwe">Zimbabwe</option> </optgroup> <optgroup id="country-optgroup-Americas" label="Americas"> <option value="AI" label="Anguilla">Anguilla</option> <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option> <option value="AR" label="Argentina">Argentina</option> <option value="AW" label="Aruba">Aruba</option> <option value="BS" label="Bahamas">Bahamas</option> <option value="BB" label="Barbados">Barbados</option> <option value="BZ" label="Belize">Belize</option> <option value="BM" label="Bermuda">Bermuda</option> <option value="BO" label="Bolivia">Bolivia</option> <option value="BR" label="Brazil">Brazil</option> <option value="VG" label="British Virgin Islands">British Virgin Islands</option> <option value="CA" label="Canada">Canada</option> <option value="KY" label="Cayman Islands">Cayman Islands</option> <option value="CL" label="Chile">Chile</option> <option value="CO" label="Colombia">Colombia</option> <option value="CR" label="Costa Rica">Costa Rica</option> <option value="CU" label="Cuba">Cuba</option> <option value="DM" label="Dominica">Dominica</option> <option value="DO" label="Dominican Republic">Dominican Republic</option> <option value="EC" label="Ecuador">Ecuador</option> <option value="SV" label="El Salvador">El Salvador</option> <option value="FK" label="Falkland Islands">Falkland Islands</option> <option value="GF" label="French Guiana">French Guiana</option> <option value="GL" label="Greenland">Greenland</option> <option value="GD" label="Grenada">Grenada</option> <option value="GP" label="Guadeloupe">Guadeloupe</option> <option value="GT" label="Guatemala">Guatemala</option> <option value="GY" label="Guyana">Guyana</option> <option value="HT" label="Haiti">Haiti</option> <option value="HN" label="Honduras">Honduras</option> <option value="JM" label="Jamaica">Jamaica</option> <option value="MQ" label="Martinique">Martinique</option> <option value="MX" label="Mexico">Mexico</option> <option value="MS" label="Montserrat">Montserrat</option> <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option> <option value="NI" label="Nicaragua">Nicaragua</option> <option value="PA" label="Panama">Panama</option> <option value="PY" label="Paraguay">Paraguay</option> <option value="PE" label="Peru">Peru</option> <option value="PR" label="Puerto Rico">Puerto Rico</option> <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option> <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option> <option value="LC" label="Saint Lucia">Saint Lucia</option> <option value="MF" label="Saint Martin">Saint Martin</option> <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option> <option value="SR" label="Suriname">Suriname</option> <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option> <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option> <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option> <option value="US" label="United States">United States</option> <option value="UY" label="Uruguay">Uruguay</option> <option value="VE" label="Venezuela">Venezuela</option> </optgroup> <optgroup id="country-optgroup-Asia" label="Asia"> <option value="AF" label="Afghanistan">Afghanistan</option> <option value="AM" label="Armenia">Armenia</option> <option value="AZ" label="Azerbaijan">Azerbaijan</option> <option value="BH" label="Bahrain">Bahrain</option> <option value="BD" label="Bangladesh">Bangladesh</option> <option value="BT" label="Bhutan">Bhutan</option> <option value="BN" label="Brunei">Brunei</option> <option value="KH" label="Cambodia">Cambodia</option> <option value="CN" label="China">China</option> <option value="GE" label="Georgia">Georgia</option> <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option> <option value="IN" label="India">India</option> <option value="ID" label="Indonesia">Indonesia</option> <option value="IR" label="Iran">Iran</option> <option value="IQ" label="Iraq">Iraq</option> <option value="IL" label="Israel">Israel</option> <option value="JP" label="Japan">Japan</option> <option value="JO" label="Jordan">Jordan</option> <option value="KZ" label="Kazakhstan">Kazakhstan</option> <option value="KW" label="Kuwait">Kuwait</option> <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option> <option value="LA" label="Laos">Laos</option> <option value="LB" label="Lebanon">Lebanon</option> <option value="MO" label="Macau SAR China">Macau SAR China</option> <option value="MY" label="Malaysia">Malaysia</option> <option value="MV" label="Maldives">Maldives</option> <option value="MN" label="Mongolia">Mongolia</option> <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option> <option value="NP" label="Nepal">Nepal</option> <option value="NT" label="Neutral Zone">Neutral Zone</option> <option value="KP" label="North Korea">North Korea</option> <option value="OM" label="Oman">Oman</option> <option value="PK" label="Pakistan">Pakistan</option> <option value="PS" label="Palestinian Territories">Palestinian Territories</option> <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option> <option value="PH" label="Philippines">Philippines</option> <option value="QA" label="Qatar">Qatar</option> <option value="SA" label="Saudi Arabia">Saudi Arabia</option> <option value="SG" label="Singapore">Singapore</option> <option value="KR" label="South Korea">South Korea</option> <option value="LK" label="Sri Lanka">Sri Lanka</option> <option value="SY" label="Syria">Syria</option> <option value="TW" label="Taiwan">Taiwan</option> <option value="TJ" label="Tajikistan">Tajikistan</option> <option value="TH" label="Thailand">Thailand</option> <option value="TL" label="Timor-Leste">Timor-Leste</option> <option value="TR" label="Turkey">Turkey</option> <option value="TM" label="Turkmenistan">Turkmenistan</option> <option value="AE" label="United Arab Emirates">United Arab Emirates</option> <option value="UZ" label="Uzbekistan">Uzbekistan</option> <option value="VN" label="Vietnam">Vietnam</option> <option value="YE" label="Yemen">Yemen</option> </optgroup> <optgroup id="country-optgroup-Europe" label="Europe"> <option value="AL" label="Albania">Albania</option> <option value="AD" label="Andorra">Andorra</option> <option value="AT" label="Austria">Austria</option> <option value="BY" label="Belarus">Belarus</option> <option value="BE" label="Belgium">Belgium</option> <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option> <option value="BG" label="Bulgaria">Bulgaria</option> <option value="HR" label="Croatia">Croatia</option> <option value="CY" label="Cyprus">Cyprus</option> <option value="CZ" label="Czech Republic">Czech Republic</option> <option value="DK" label="Denmark">Denmark</option> <option value="DD" label="East Germany">East Germany</option> <option value="EE" label="Estonia">Estonia</option> <option value="FO" label="Faroe Islands">Faroe Islands</option> <option value="FI" label="Finland">Finland</option> <option value="FR" label="France">France</option> <option value="DE" label="Germany">Germany</option> <option value="GI" label="Gibraltar">Gibraltar</option> <option value="GR" label="Greece">Greece</option> <option value="GG" label="Guernsey">Guernsey</option> <option value="HU" label="Hungary">Hungary</option> <option value="IS" label="Iceland">Iceland</option> <option value="IE" label="Ireland">Ireland</option> <option value="IM" label="Isle of Man">Isle of Man</option> <option value="IT" label="Italy">Italy</option> <option value="JE" label="Jersey">Jersey</option> <option value="LV" label="Latvia">Latvia</option> <option value="LI" label="Liechtenstein">Liechtenstein</option> <option value="LT" label="Lithuania">Lithuania</option> <option value="LU" label="Luxembourg">Luxembourg</option> <option value="MK" label="Macedonia">Macedonia</option> <option value="MT" label="Malta">Malta</option> <option value="FX" label="Metropolitan France">Metropolitan France</option> <option value="MD" label="Moldova">Moldova</option> <option value="MC" label="Monaco">Monaco</option> <option value="ME" label="Montenegro">Montenegro</option> <option value="NL" label="Netherlands">Netherlands</option> <option value="NO" label="Norway">Norway</option> <option value="PL" label="Poland">Poland</option> <option value="PT" label="Portugal">Portugal</option> <option value="RO" label="Romania">Romania</option> <option value="RU" label="Russia">Russia</option> <option value="SM" label="San Marino">San Marino</option> <option value="RS" label="Serbia">Serbia</option> <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option> <option value="SK" label="Slovakia">Slovakia</option> <option value="SI" label="Slovenia">Slovenia</option> <option value="ES" label="Spain">Spain</option> <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> <option value="SE" label="Sweden">Sweden</option> <option value="CH" label="Switzerland">Switzerland</option> <option value="UA" label="Ukraine">Ukraine</option> <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option> <option value="GB" label="United Kingdom">United Kingdom</option> <option value="VA" label="Vatican City">Vatican City</option> <option value="AX" label="Åland Islands">Åland Islands</option> </optgroup> <optgroup id="country-optgroup-Oceania" label="Oceania"> <option value="AS" label="American Samoa">American Samoa</option> <option value="AQ" label="Antarctica">Antarctica</option> <option value="AU" label="Australia">Australia</option> <option value="BV" label="Bouvet Island">Bouvet Island</option> <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option> <option value="CX" label="Christmas Island">Christmas Island</option> <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option> <option value="CK" label="Cook Islands">Cook Islands</option> <option value="FJ" label="Fiji">Fiji</option> <option value="PF" label="French Polynesia">French Polynesia</option> <option value="TF" label="French Southern Territories">French Southern Territories</option> <option value="GU" label="Guam">Guam</option> <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option> <option value="KI" label="Kiribati">Kiribati</option> <option value="MH" label="Marshall Islands">Marshall Islands</option> <option value="FM" label="Micronesia">Micronesia</option> <option value="NR" label="Nauru">Nauru</option> <option value="NC" label="New Caledonia">New Caledonia</option> <option value="NZ" label="New Zealand">New Zealand</option> <option value="NU" label="Niue">Niue</option> <option value="NF" label="Norfolk Island">Norfolk Island</option> <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option> <option value="PW" label="Palau">Palau</option> <option value="PG" label="Papua New Guinea">Papua New Guinea</option> <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option> <option value="WS" label="Samoa">Samoa</option> <option value="SB" label="Solomon Islands">Solomon Islands</option> <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option> <option value="TK" label="Tokelau">Tokelau</option> <option value="TO" label="Tonga">Tonga</option> <option value="TV" label="Tuvalu">Tuvalu</option> <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option> <option value="VU" label="Vanuatu">Vanuatu</option> <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option> </optgroup> </select>
                    </div>
                        <div>
                            <input type="submit" name="submit"  id='antrag2' class="btn btn-primary"  value='Weiter' style="margin-top: 20px;max-width: 75px">
                        </div>

                    </div>

            </form>
        </div>
    </div>
</div>
</div>

<div class="container" style="margin: 0 auto;width: 2000px;margin-top: 50px">
    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item" style="max-width: 600px">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula
                        rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                        in justo.</p>
                </div>
                <div class="col item social"><a href="https://anime.Knownasmomo.de"><i
                                class="icon ion-social-angular"></i></a><a href="https://anime.Knownasmomo.de"><i
                                class="icon ion-fireball"></i></a>
                    <p style="color: var(--bs-gray-500);">Momo 2022</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
<script src="assets/js/Lightbox-Gallery.js"></script>
<script src="assets/js/Simple-Slider.js"></script>
</body>

</html>