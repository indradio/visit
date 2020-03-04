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
              <h3 class="card-title text-center">Pencegahan Penyebaran Virus Corona</h3>
              <small class="text-center"><i>We apologize not to provide this form in english currently.<br>
              Please kindly ask your Indonesian colleague or WINTEQ person in charge for assistance</i></small>
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
                        <label class="control-label">Nama Lengkap*</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Gender*</label>
                        <div class="form-inline form-group">
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender1" value="Pria" checked required="true"> Pria
                              <span class="form-check-sign mr-3"></span>
                            </label>
                          </div>
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender2" value="Wanita" required="true"> Wanita
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
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
                        <label class="control-label">Perusahaan*</label>
                        <input type="text" id="perusahaan" name="perusahaan" class="form-control" placeholder="Perusahaan" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Waktu Kunjungan*</label>
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
                        <label class="control-label">Pihak yang dituju*</label>
                        <input type="text" id="pic" name="pic" class="form-control" placeholder="Nama pihak yg dituju" required="true" />
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Keperluan*</label>
                        <textarea class="form-control border-input" id="keperluan" name="keperluan" placeholder="Jelaskan keperluan anda." rows="3" required="true"></textarea>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Silahkan <b>centang</b> jika sesuai dengan kondisi anda.
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point1" name="point1" value="YA">Apakah dalam 14 hari terakhir anda memiliki riwayat perjalanan ke Cina atau negara/wilayah terjangkit virus corona?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point2" name="point2" value="YA">Apakah dalam 14 hari terakhir anda pernah melakukan interaksi dengan Warga Negara Asing dari negara/wilayah terjangkit virus corona?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point3" name="point3" value="YA">Apakah anda pernah melakukan interaksi dengan keluarga/kerabat yang menjadi suspect bahkan positif terjangkit virus corona?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point4" name="point4" value="YA">Apakah dalam 3 hari terakhir anda mengalami demam dengan suhu tubuh > 38°C?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point5" name="point5" value="YA">Apakah saat ini anda sedang batuk/pilek/nyeri tenggorokan?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="point6" name="point6" value="YA">Apakah saat ini anda sedang pneumonia (sesak nafas) ringan hingga berat?
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label"><small>* Wajib diisi</label>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="check" value="" required="true">Saya sudah membaca dengan seksama dan saya sudah memberikan informasi yang benar. </br>Saya siap menerima konsekuensi hukum yang muncul jika data yang saya berikan salah.
                              <span class="form-check-sign"></span>
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
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="<?= base_url(); ?>assets/js/plugins/presentation-page/main.js"></script>
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
        }

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

      // Javascript method's body can be found in assets/js/core/partials/_demo-object.js
      demo.initContactUsMap2();
    });

  </script>
</body>

</html>