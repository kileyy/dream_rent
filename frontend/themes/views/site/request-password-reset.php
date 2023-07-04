<?php

/** @var yii\bootstrap5\ActiveForm $form 
 *  @var frontend\base\web\View $this 
 *  @var \frontend\models\PasswordResetRequestForm $model
 */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use frontend\themes\assets\ThemeAsset;

use yii\helpers\Json;

$asset = $this->registerAssetBundle(ThemeAsset::class)

?>

<div class="site-request-password-reset">

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <div class="sign-group">
                            <a href="/site/index" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
                        </div>
                        <h1>Forgot Password</h1>
                        <p class="account-subtitle">Enter your email and we will send you a link to reset your password.</p>

                        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']);  ?>

                        <?= $form->field($model, 'email', ['options' => ['class' => 'form-group']])->textInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Send', ['class' => 'btn btn-outline-light w-100 btn-size']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                        <!-- <form action="/site/index">
					<div class="form-group">
						<label class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="email" class="form-control" placeholder="">
					</div>
					<a href="/site/reset-password" class="btn btn-outline-light w-100 btn-size">Save Changes</a>
				</form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="<?= $asset->baseUrl ?>/js/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?= $asset->baseUrl ?>/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="<?= $asset->baseUrl ?>/js/script.js"></script>