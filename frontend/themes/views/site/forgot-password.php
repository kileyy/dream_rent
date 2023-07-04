<?php

/** @var yii\bootstrap5\ActiveForm $form 
 */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Json;

?>
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

					<?php $form = ActiveForm::begin();  ?>

					<?= $form->field($model, 'email', ['options' => ['class' => 'form-group']])->textInput() ?>

					<div class="form-group">
						<?= Html::submitButton('Save', ['class' => 'btn btn-outline-light w-100 btn-size']) ?>
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