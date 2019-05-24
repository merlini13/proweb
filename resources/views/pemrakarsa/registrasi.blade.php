<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login_pemrakarsa/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_pemrakarsa/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="{{url('/pemrakarsa-register')}}" method="post">
          @csrf
					<span class="login100-form-title p-b-51">
						Register
					</span>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Nama is required">
						<input class="input100" type="text" name="pemrakarsa_name" placeholder="Nama">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "No KTP is required">
						<input class="input100" type="text" name="no_ktp" placeholder="Nomor KTP">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Jabatan is required">
						<input class="input100" type="text" name="jabatan" placeholder="Jabatan">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Alamat is required">
						<input class="input100" type="textarea" name="alamat" placeholder="Alamat">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "No Telp is required">
						<input class="input100" type="text" name="no_telp" placeholder="Nomor Telepon">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="pemrakarsa_username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pemrakarsa_password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<p>Click <a href="/login-check" align="center">Here</a> to login.</p>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
