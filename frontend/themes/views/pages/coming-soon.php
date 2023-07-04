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
<!-- Main Wrapper -->
<div class="main-wrapper">

	<div class="error-box">
		<img src="<?= $asset->baseUrl ?>/img/comingsoon.png" class="img-fluid" alt="Coming Soon">
		<h2 class="coming-soon">Coming Soon</h2>
		<p>We'll be here soon with our new awesome site, subscribe to be notified.</p>
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
		<div class="serve-form">
			<form action="#">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Email Address">
					<button type="submit" class="btn button-notific btn-secondary d-flex align-items-center">
						<span>Notify me</span>
					</button>
				</div>
			</form>
		</div>
		<a href="/site/index" class="btn-maintance btn btn-primary">Back to Home<span class="ms-2"><i class="fe feather-arrow-right" aria-hidden="true"></i></span></a>
	</div>

</div>
<!-- /Main Wrapper -->