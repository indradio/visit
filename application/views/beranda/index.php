<!--

 =========================================================
  Paper Kit 2 PRO - v2.3.0
 =========================================================

  Product Page: https://www.creative-tim.com/product/paper-kit-2-pro
  Copyright 2019 Creative Tim (https://www.creative-tim.com)

  Coded by Creative Tim

 =========================================================

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img//favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WINTEQ - FORM DEKLARASI KESEHATAN
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/paper-kit.css?v=2.3.0" rel="stylesheet" />
  <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <style>
/* * {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
} */

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

/* input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
} */

.autocomplete-items {
  /* position: absolute; */
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

</head>

<body class="sections-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" data-scroll="true" data-id="#headers" href="<?= base_url(); ?>#headers">
          <img src="<?= base_url(); ?>assets/img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="<?= base_url(); ?>assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-round btn-primary" href="#">
              <i class="nc-icon nc-send"></i> FORM DEKLARASI KESEHATAN
              <br><small>Health Declaration Form</small></br>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="section-space"></div>
  <div class="section section-contactus cd-section" id="contact-us">
     <!--     *********    CONTACT US 1     *********      -->
     <div class="contactus-1 section-image" style="background-image: url('<?= base_url(); ?>assets/img/sections/winteq.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-contact no-transition">
              <h3 class="card-title text-center">Pencegahan Penyebaran Virus Corona </br> <i>Prevention of Corona Virus Spread</i></h3>
              <small class="text-center">Harap mengisi form berikut 12 Jam sebelum anda melakukan kunjungan.<br>
              <i>Please fill in the following form 12 hours before you make a visit.</i></small>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="card-body">
                    <div class="info info-horizontal">
                      <div class="icon icon-info">
                        <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">PT Astra Otoparts, Tbk. Divisi WINTEQ</h4>
                        <p> Jl. Raya Jakarta Bogor Km 47,
                          <br> Nanggewer Mekar, Cibinong, 
                          <br> Kab Bogor - Jawa Barat,
                          <br> Indonesia 16912
                          <br> Telp. +6221 8790 1703
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-mb-2 mr-auto">
                  <form role="form" id="contact-form" method="post"  action="<?= base_url('beranda/daftar'); ?>">
                    <div class="card-body">
                      <div class="form-group label-floating">
                        <label class="control-label">Nama Lengkap <i>(Full Name)</i>*</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Kewarganegaraan <i>(Nationality)</i>*</label>
                        <div class="form-inline form-group">
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan1" value="WNI" checked required="true"> WNI / Indonesian Citizens
                              <span class="form-check-sign mr-3"></span>
                            </label>
                          </div>
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan2" value="WNA" required="true"> WNA / Foreign Nationals
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group label-floating" id="negara_input" style="display:none;">
                        <label class="control-label">Asal Negara <i>(Country of Origin)</i></label>
                        <div class="form-group">
                        <input type="text" id="negara" name="negara" list="listnegara" class="form-control" placeholder="Country" />
                          <datalist id="listnegara">
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </datalist>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">No. Identitas* <small>(KTP/SIM/PASSPORT)</small></label>
                        <input type="text" id="identitas" name="identitas" class="form-control" placeholder="123XXX" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">No. HP*</label>
                        <div class="input-group">
                          <div class="input-group-append">
                            <span class="input-group-text">+62</span>
                            <span></span>
                          </div>
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="813XXX" required="true" />
                          </div>
                          <p>
                      <label class="text-info"><span><i class="fa fa-check-circle-o" aria-hidden="true" data-toggle="popover" data-placement="top" title="Notifikasi via WhatsApp" data-content="Kami menggunakan format '+62' sebagai pengganti '0' (NOL) diawal, kemudian silahkan diikuti nomor selanjutnya tanpa spasi/pemisah, agar kami bisa mengirimkan notifikasi melalui whatsapp kepada anda."></i> Format 62813XXXXXXX </span></label>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Perusahaan <i>(Company)</i>*</label>
                        <input type="text" id="perusahaan" name="perusahaan" class="form-control" placeholder="Perusahaan" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Waktu Kunjungan <i>(Date of Visit)</i>*</label>
                        <div class="input-group date">
                          <input type="text" id="waktu_kunjungan" name="waktu_kunjungan" class="form-control datetimepicker" placeholder="Pilih Tanggal & Jam" required="true" />
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Pihak yang dituju <i>(People Who Addressed)</i>*</label>
                        <input type="text" id="pic" name="pic" class="form-control" list="listkaryawan" placeholder="Cari nama pihak yg dituju" required="true" />
                        
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Keperluan <i>(The purpose of the visit)</i>*</label>
                        <textarea class="form-control border-input" id="keperluan" name="keperluan" placeholder="Jelaskan keperluan anda." rows="3" required="true"></textarea>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Silahkan <b>centang</b> jika sesuai dengan kondisi anda.
                        <label class="control-label"><i>Please <b>Check</b> if according to your condition.</i>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point1" name="point1" value="YA">
                            <span class="form-check-sign"></span>
                            <b>Apakah dalam 14 hari terakhir anda memiliki riwayat perjalanan ke luar negeri</b>
                            </br><i>Have you had a history of travel to overseas in the past 14 days?</i>
                          </label>
                        </div>
                      </div>
                      <!-- <div class="hidden form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label"> -->
                            <input class="form-check-input" type="hidden" id="point2" name="point2" value="YA">
                            <!-- <span class="form-check-sign"></span>
                            <b>Apakah dalam 14 hari terakhir anda pernah melakukan interaksi dengan Warga Negara Asing dari negara/wilayah terjangkit virus corona?</b>
                            </br><i>Have you had an interacted with Foreigners from countries / regions affected by the corona virus?</i>
                          </label>
                        </div>
                      </div> -->
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point3" name="point3" value="YA">
                            <span class="form-check-sign"></span>
                            <b>Apakah anda pernah melakukan interaksi dengan keluarga/kerabat yang menjadi suspect bahkan positif terjangkit virus corona?</b>
                            </br><i>Have you had an interacted with family / relatives who have been suspected or even positively infected by the corona virus?</i>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point4" name="point4" value="YA">
                            <span class="form-check-sign"></span>
                            <b>Apakah dalam 3 hari terakhir anda mengalami demam dengan suhu tubuh > 37.5°C?</b>
                            </br><i>Whether in the last 3 days you have a fever with a body temperature > 37.5°C?</i>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point5" name="point5" value="YA">
                            <span class="form-check-sign"></span>
                            <b>Apakah saat ini anda sedang batuk/pilek/nyeri tenggorokan?</b>
                            </br><i>Are you currently have cough / runny nose / sore throat?</i>
                          </label>
                        </div>
                      </div>
                      <!-- <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point6" name="point6" value="YA">
                            <span class="form-check-sign"></span>
                            <b>Apakah saat ini anda sedang pneumonia (sesak nafas) ringan hingga berat?</b>
                            </br><i>Are you currently having a pneumonia (shortness of breath)?</i>
                          </label>
                        </div>
                      </div> -->
                      <p>
                      <div class="form-group label-floating">
                        <label class="control-label"><b>Dapat menunjukan sertifikat vaksin ke -1/ke -2 atau surat hasil Test Antigen NEGATIF*</b>
                        </br><i>Can show vaccine certificate 1st/2nd dose or Antigen Test Result</i></label>
                        <div class="form-inline form-group">
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sertifikat" id="vaksin" value="VAKSIN" required="true"> SERTIFIKAT VAKSIN
                              <span class="form-check-sign mr-3"></span>
                            </label>
                          </div>
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sertifikat" id="antigen" value="ANTIGEN" required="true"> ANTIGEN
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group label-floating" id="antigen_input" style="display:none;">
                        <label class="control-label">Tanggal Test Antigen <i>(Date of Antigen test)</i>*</label>
                        <div class="input-group date">
                          <input type="text" id="tgl_antigen" name="tgl_antigen" class="form-control datepicker" placeholder="Pilih Tanggal" required="true" />
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </span>
                          </div>
                        </div>
                        <label class="control-label"><small>*<i>Surat hasil Test ANTIGEN hanya berlaku maksimal 2x24 Jam sebelum kunjungan (Antigen Test result valid within 2x24 Hour prior time visit)</i></label>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label"><small>* Wajib diisi <i>(Required)</i></label>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="check" value="" required="true">
                              <span class="form-check-sign"></span>
                              Saya sudah membaca dengan seksama dan saya sudah memberikan informasi yang benar. Saya siap menerima konsekuensi hukum yang muncul jika data yang saya berikan salah.
                              <br><i>I have read carefully and have given correct information. I am ready to accept the legal consequences that arise if the data I provide is wrong.</i>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-lg btn-primary pull-right" id="submit">KIRIM</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--     *********    END CONTACT US 1      *********      -->
  </div>
  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.winteq-astra.com" target="_blank">PT Astra Otoparts, Tbk. Divisi WINTEQ</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Winteq Digitalization Team.
          </span>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <script src="<?= base_url(); ?>assets/demo//vertical-nav.js" type="text/javascript"></script>
  <!--  Photoswipe files -->
  <!-- <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe.min.js"></script> -->
  <!-- <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script> -->
  <!-- <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/init-gallery.js"></script> -->
  <!--  for Jasny fileupload -->
  <script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="<?= base_url(); ?>assets/js/plugins/presentation-page/main.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script>
    $(document).ready(function() {
      if (window_width >= 768) {
        $(window).on('scroll', pk.checkScrollForPresentationPage);
      }

      var checker = document.getElementById('check');
      var sendbtn = document.getElementById('submit');
        sendbtn.disabled = true;
        // when unchecked or checked, run the function
        checker.onchange = function() {
            if (this.checked) {
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }
        };

        $('.datetimepicker').datetimepicker({
        format: 'DD-MM-YYYY H:m',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });

        $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });

        $('#kewarganegaraan1').change(function() {
            var kewarganegaraan1 = $('#kewarganegaraan1').val();
            if (kewarganegaraan1 === "WNI") {
                document.getElementById("negara_input").style.display = "none";
                $('#negara').prop('required', false);
            } 
        });

        $('#kewarganegaraan2').change(function() {
            var kewarganegaraan2 = $('#kewarganegaraan2').val();
            if (kewarganegaraan2 === "WNA") {
                document.getElementById("negara_input").style.display = "block";
                $('#negara').prop('required', true);
            } 
        });
        
        $('#vaksin').change(function() {
            var vaksin = $('#vaksin').val();
            if (vaksin === "VAKSIN") {
                document.getElementById("antigen_input").style.display = "none";
                $('#tgl_antigen').prop('required', false);
            } 
        });

        $('#antigen').change(function() {
            var antigen = $('#antigen').val();
            if (antigen === "ANTIGEN") {
                document.getElementById("antigen_input").style.display = "block";
                $('#tgl_antigen').prop('required', true);
            } 
        });
      // Javascript method's body can be found in assets/js/core/partials/_demo-object.js
      // demo.initContactUsMap2();
    });
  </script>
  <script>
  function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {a
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        var employees = myObj;
        autocomplete(document.getElementById("pic"), employees);
      }
  };

  xmlhttp.open("GET", "<?= site_url('Beranda/json_data'); ?>", true);
  xmlhttp.send();

  /*An array containing all the country names in the world:*/
  // var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  </script>
</body>

</html>