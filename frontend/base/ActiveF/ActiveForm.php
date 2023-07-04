<?php

namespace frontend\base\ActiveF;

use yii\helpers\Html;
use yii\bootstrap5\ActiveField;

class ActiveForm extends \yii\bootstrap5\ActiveForm
{
    public $fieldClass = ActiveField::class;

    // public $viewPassword = '
    // 			<label class="form-label">Password <span class="text-danger">*</span></label>
    //                   <div class="pass-group">
    //                       {input}
    //                       <span class="fas fa-eye toggle-password"></span>
    //                   </div>
    //               ';

    /**
     * {@inheritDoc}
     * @return ActiveField
     */
    public function field($model, $attribute, $options = []): ActiveField
    {
        return parent::field($model, $attribute, $options);
    }
}
