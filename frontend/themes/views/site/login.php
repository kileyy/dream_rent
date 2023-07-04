<?php

/** @var frontend\base\web\View $this 
 * 
 * 
 */

// use frontend\base\ActiveF\ActiveForm;
use frontend\themes\assets\ThemeAsset;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use frontend\base\widgets\PasswordInput;


// $asset = ArrayHelper::getValue($this->assetBundles, [ThemeAsset::class]);
$asset = $this->registerAssetBundle(ThemeAsset::class)
?>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="loginbox">
				<div class="login-auth">
					<div class="login-auth-wrap">
						<div class="sign-group">
							<a href="/site/index" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span>
								Back To Home</a>
						</div>
						<h1>Sign In</h1>
						<!-- <p class="account-subtitle">
              We'll send a confirmation code to your email.
            </p> -->
						<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
						<?= $form->field($model, 'username', ['options' => ['class' => 'form-group']])->textInput() ?>
						<?= $form->field($model, 'password', ['options' => ['class' => 'form-group']])->passwordInput() ?>
						<!-- <= $form->field($model, 'password', ['options' => ['class' => 'form-group']])->widget(PasswordInput::class) ?>  -->


						<div class="form-group">
							<a class="forgot-link" href="/site/request-password-reset">Forgot Password ?</a>
						</div>
						<div class="form-group m-0">
							<label class="custom_check d-inline-flex"><span>Remember me</span>
								<input type="checkbox" name="remeber" />
								<span class="checkmark"></span>
							</label>
						</div>
						<!-- <a href="/site/index" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</a> -->
						<div class="form-group">
							<?= Html::submitButton('Login', ['class' => 'tn btn-outline-light w-100 btn-size mt-1', 'name' => 'login-button']) ?>
						</div>

						<?php ActiveForm::end(); ?>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or-log">Or, log in with your email</span>
						</div>
						<!-- Social Login -->
						<div class="social-login">
							<a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="<?= $asset->baseUrl ?>/img/icons/google.svg" class="img-fluid" alt="Google" /></span>Log in with Google</a>
						</div>
						<div class="social-login">
							<a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="<?= $asset->baseUrl ?>/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
						</div>
						<!-- /Social Login -->
						<div class="text-center dont-have">
							Don't have an account yet?
							<a href="/site/signup">Register</a>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
	</div>
</body>