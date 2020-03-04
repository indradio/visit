<body>
    <!-- <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://training.winteq-astra.com">Winteq Technical Training Programs</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="https://training.winteq-astra.com#contactus">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="<?= base_url(); ?>assets/img/photo-training-2.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form method="post" action="<?= base_url('auth/login'); ?>">
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" id="email" name="email" placeholder="Enter email" class="form-control input-no-border">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control input-no-border">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>
                                        <!-- <div class="forgot">
                                            <a href="#pablo">Forgot your password?</a>
                                        </div> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Winteq Digitalization Team.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="<?= base_url(); ?>assets/js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="<?= base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="<?= base_url(); ?>assets/js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="<?= base_url(); ?>assets/js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="<?= base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url(); ?>assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?= base_url(); ?>assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="<?= base_url(); ?>assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="<?= base_url(); ?>assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Wizard Plugin    -->
	<script src="<?= base_url(); ?>assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="<?= base_url(); ?>assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="<?= base_url(); ?>assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="<?= base_url(); ?>assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="<?= base_url(); ?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="<?= base_url(); ?>assets/js/demo.js"></script>

	<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
	</script>

</html>
