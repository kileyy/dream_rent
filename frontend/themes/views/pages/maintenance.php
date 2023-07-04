<?php

/** @var frontend\base\web\View $this 
 * @var ThemeAsset $asset
 */

use frontend\themes\assets\ThemeAsset;


$asset = $this->registerAssetBundle(ThemeAsset::class)

?>

<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= $asset->baseUrl ?>/css/bootstrap.min.css">

	<!-- Fearther CSS -->
	<link rel="stylesheet" href="<?= $asset->baseUrl ?>/css/feather.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= $asset->baseUrl ?>/css/style.css">
</head>

<body class="error-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="error-box">
			<img src="<?= $asset->baseUrl ?>/img/maintenance.png" class="img-fluid" alt="Maintenance">
			<h2 class="coming-soon">We're Down For Maintenance</h2>
			<p>Our website is currently undergoing scheduled maintenance, will be right
				back in a few minutes.</p>
			<h6>We'll Be Back Shortly</h6>
			<div class="footer-social-links">
				<ul class="nav">
					<li>
						<a href="#" target="_blank"><i class="feather-instagram hi-icon"></i></a>
					</li>
					<li>
						<a href="#" target="_blank"><i class="feather-twitter hi-icon"></i> </a>
					</li>
					<li>
						<a href="#" target="_blank"><i class="feather-youtube hi-icon"></i></a>
					</li>
					<li>
						<a href="#" target="_blank"><i class="feather-facebook hi-icon"></i></a>
					</li>
					<li>
						<a href="#" target="_blank"><i class="feather-linkedin hi-icon"></i></a>
					</li>
				</ul>
			</div>
			<a href="/site/index" class="btn-maintance btn btn-primary">Back to Home</a>
		</div>

	</div>
	<!-- /Main Wrapper -->


</body>
<!-- <div class="main-wrapper">

	<div class="error-box">
		<img src="assets/img/maintenance.png" class="img-fluid" alt="Maintenance">
		<h2 class="coming-soon">We're Down For Maintenance</h2>
		<p>Our website is currently undergoing scheduled maintenance, will be right
			back in a few minutes.</p>
		<h6>We'll Be Back Shortly</h6>
		<div class="footer-social-links">
			<ul class="nav">
				<li>
					<a href="#" target="_blank"><i class="feather-instagram hi-icon"></i></a>
				</li>
				<li>
					<a href="#" target="_blank"><i class="feather-twitter hi-icon"></i> </a>
				</li>
				<li>
					<a href="#" target="_blank"><i class="feather-youtube hi-icon"></i></a>
				</li>
				<li>
					<a href="#" target="_blank"><i class="feather-facebook hi-icon"></i></a>
				</li>
				<li>
					<a href="#" target="_blank"><i class="feather-linkedin hi-icon"></i></a>
				</li>
			</ul>
		</div>
		<a href="index.html" class="btn-maintance btn btn-primary">Back to Home</a>
	</div>

</div> -->
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

</html>