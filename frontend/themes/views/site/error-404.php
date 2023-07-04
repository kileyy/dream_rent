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

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= $asset->baseUrl ?>/css/style.css">
</head>

<body class="error-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="error-box">
			<img src="<?= $asset->baseUrl ?>/img/404.png" class="img-fluid" alt="Page not found">
			<h3>Oops! Page not found!</h3>
			<p>The page you requested was not found.</p>
			<div class="back-button">
				<a href="/site/index" class="btn btn-primary">Back to Home</a>
			</div>
		</div>

	</div>
	<!-- /Main Wrapper -->

</body>