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
				<h2 class="breadcrumb-title">Meet our Team</h2>
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/site/index">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Meet our Team</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- /Breadscrumb Section -->


<!-- Meet our Team -->
<section class="our-team-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-01.jpg" alt="Our Team">
					</div>
					<div class="team-prof">
						<h3 class="team-post-title">Matt Fierce</h3>
						<span class="team-designation">CEO</span>
						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-02.jpg" alt="Our Team">
					</div>

					<div class="team-prof">
						<h3 class="team-post-title">May Daniel</h3>
						<span class="team-designation">COO</span>

						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-03.jpg" alt="Our Team">
					</div>

					<div class="team-prof">
						<h3 class="team-post-title">Alberrt Hendrenz</h3>
						<span class="team-designation">Business head</span>

						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-04.jpg" alt="Our Team">
					</div>

					<div class="team-prof">
						<h3 class="team-post-title">Roseline</h3>
						<span class="team-designation">Business Analyst</span>

						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="500">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-05.jpg" alt="Our Team">
					</div>

					<div class="team-prof">
						<h3 class="team-post-title">Hendriques</h3>
						<span class="team-designation">Designer</span>

						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="600">
				<div class="our-team">
					<div class="profile-pic">
						<img src="<?= $asset->baseUrl ?>/img/our-team/team-06.jpg" alt="Our Team">
					</div>

					<div class="team-prof">
						<h3 class="team-post-title">Maria</h3>
						<span class="team-designation">Lead Developer</span>

						<div class="footer-social-links m-0">
							<ul class="nav">
								<li>
									<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-twitter fi-icon"></i> </a>
								</li>
								<li>
									<a href="#" target="_blank"><i class="fab fa-linkedin fi-icon"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Meet our Team -->