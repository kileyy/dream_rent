<?php

/** @var frontend\base\web\View $this 
 * @var ThemeAsset $asset
 */

use frontend\themes\assets\ThemeAsset;

$asset = $this->registerAssetBundle(ThemeAsset::class)

?>

<!-- Breadscrumb Section -->
<div class="breadcrumb-bar">
	<div class="container">
		<div class="row align-items-center text-center">
			<div class="col-md-12 col-12">
				<h2 class="breadcrumb-title">Gallery </h2>
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/site/index">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Gallery</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- /Breadscrumb Section -->

<!-- Gallery section-->
<div class="section gallery-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-01.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-01.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-02.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-02.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-03.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-03.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-04.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-04.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-05.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-05.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-06.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-06.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-07.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-07.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-08.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-08.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-09.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-09.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-10.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-10.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-11.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-11.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
				<div class="gallery-widget">
					<a href="<?= $asset->baseUrl ?>/img/gallery/gallery-12.jpg" data-fancybox="gallery2">
						<img class="img-fluid" alt="Image" src="<?= $asset->baseUrl ?>/img/gallery/gallery-thum-12.jpg">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Gallery section-->