<?php

/** @var frontend\base\web\View $this 
 * @var ThemeAsset $asset
 * @var \frontend\models\SignupForm $model
 */

use frontend\base\ActiveF\ActiveForm;
use frontend\base\widgets\PasswordInput;
use frontend\themes\assets\ThemeAsset;
use yii\bootstrap5\Html;



$asset = $this->registerAssetBundle(ThemeAsset::class)

?>

<body>
	<div class="main-wrapper login-body">

		<div class="login-wrapper">
			<div class="loginbox">
				<div class="login-auth">
					<div class="login-auth-wrap">
						<div class="sign-group">
							<a href="/site/index" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
						</div>
						<h1>Sign Up</h1>
						<p class="account-subtitle">We'll send a confirmation code to your email.</p>
						<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

						<?= $form->field($model, 'username', ['options' => ['class' => 'form-group']])->textInput() ?>
						<?= $form->field($model, 'email', ['options' => ['class' => 'form-group']])->textInput() ?>
						<?= $form->field($model, 'password', ['options' => ['class' => 'form-group']])->passwordInput() ?>
						<!-- <= $form->field($model, 'password', ['options' => ['class' => 'form-group']])->widget(PasswordInput::class) ?> -->
						<div class="form-group">
							<?= Html::submitButton('Signup', ['class' => 'tn btn-outline-light w-100 btn-size mt-1', 'name' => 'signup-button']) ?>
						</div>

						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">Or, Create an account with your email</span>
						</div>
						<!-- Social Login -->
						<div class="social-login">
							<a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="<?= $asset->baseUrl ?>/img/icons/google.svg" class="img-fluid" alt="Google"></span>Log in with Google</a>
						</div>
						<div class="social-login">
							<a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="<?= $asset->baseUrl ?>/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
						</div>

						<!-- /Social Login -->
						<div class="text-center dont-have">Already have an Account? <a href="/site/login">Sign In</a></div>
						<?php ActiveForm::end() ?>
					</div>
				</div>
			</div>
		</div>

		<!-- /Main Wrapper -->
	</div>
</body>