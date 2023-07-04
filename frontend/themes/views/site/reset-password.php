<?php

/** @var yii\bootstrap5\ActiveForm $form 
 */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Json;

?>
<div class="site-password-reset">
	<div class="login-wrapper">
		<div class="loginbox">
			<div class="login-auth">
				<div class="login-auth-wrap">
					<div class="sign-group">
						<a href="/site/index" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
					</div>
					<h1>Reset Password</h1>
					<p class="account-subtitle">Your new password must be different from previous used passwords.</p>

					<!-- <form action="/site/index"> 
						<div class="form-group">
						<label class="form-label">New Password <span class="text-danger">*</span></label>
						<div class="pass-group">
							<input type="password" class="form-control pass-input" placeholder="">
							<span class="fas fa-eye toggle-password"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Confirm Password <span class="text-danger">*</span></label>
						<div class="pass-group">
							<input type="password" class="form-control pass-input" placeholder="">
							<span class="fas fa-eye toggle-password"></span>
						</div>
					</div> 					
					<button class="btn btn-outline-light w-100 btn-size">Save Changes</button>
				</form>
				-->
					<?php $form = ActiveForm::begin();  ?>

					<?= $form->field($model, 'newPassword', ['options' => ['class' => 'form-group']])->passwordInput() ?>

					<?= $form->field($model, 'newPasswordConfirm', ['options' => ['class' => 'form-group']])->passwordInput(['autofocus' => true]) ?>

					<div class="form-group">
						<?= Html::submitButton('Save', ['class' => 'btn btn-outline-light w-100 btn-size']) ?>
					</div>

					<?php ActiveForm::end(); ?>


				</div>
			</div>
		</div>
	</div>
</div>