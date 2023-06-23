<!doctype html>
<html lang="en">

<head>
	<title>Identifikasi Akun</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicons -->
	<link href="login/favicon/favicon.ico" rel="icon">

	<link href="login/fonts/font-google.css" rel="stylesheet">

	<link rel="stylesheet" href="login/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="login/css/style.css">

	<link href="login/aos/aos.css" rel="stylesheet">

</head>

<body class="img js-fullheight" style="background-image: url(login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center font-weight-bold" data-aos="zoom-out" data-aos-delay="1020">Login</h3>

						<?php
						session_start();
						include 'login/cek-akun.php';
						?>
						<form method="post" action="" class="signin-form">
							<div class="form-group" data-aos="flip-up" data-aos-delay="690">
								<?php
								// tampilkan session pesan jika username atau password tidak valid
								if (isset($_SESSION['pesan'])) {
									echo '<p class="text-white text-center">' . $_SESSION['pesan'] . '</p>';
									unset($_SESSION['pesan']);
								}
								?>
								<input name="username" type="text" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group" data-aos="flip-down" data-aos-delay="790">
								<input name="pw" id="password-field" type="password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group" data-aos="flip-up" data-aos-delay="890">
								<button name="submit" type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>

						</form>

						<p class="w-100 text-center" data-aos="zoom-out" data-aos-delay="1020">&mdash; Or Back to Page &mdash;</p>
						<div class="social d-flex text-center" data-aos="zoom-out" data-aos-delay="1020">
							<a href="home" class="px-2 py-2 mr-md-1 rounded"><span class="fa fa-home mr-2"></span> SMK Purnama 1 Semarang</a>
						</div>


					</div>
				</div>
	</section>

	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>

	<script src="login/aos/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<script src="login/js/jquery.min.js"></script>
	<script src="login/js/popper.js"></script>
	<script src="login/js/bootstrap.min.js"></script>
	<script src="login/js/main.js"></script>

</body>

</html>