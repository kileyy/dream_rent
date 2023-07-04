<?php

namespace frontend\base\ActiveF;

use yii\bootstrap5\Html;
use yii\validators\RequiredValidator;
use Yii;

class ActiveField extends \yii\bootstrap5\ActiveField
{
    public function passwordInput($options = [])
    {
        Html::addCssClass($this->inputOptions, ['pass-input']);
        if (!isset($this->inputTemplate)) {
            $icon = Html::tag('span', '', ['class' => 'fas fa-eye toggle-password']);
            $this->inputTemplate = Html::tag('div', '{input}' . $icon, ['class' => 'pass-group']);
        }


        return parent::passwordInput($options);
    }

    /**
     * @param string|null $label the label or null to use model label
     * @param array $options the tag options
     */
    protected function renderLabelParts(string $label = null, array $options = [])
    {
        $options = array_merge($this->labelOptions, $options);
        if ($label === null) {
            if (isset($options['label'])) {
                $label = $options['label'];
                unset($options['label']);
            } else {
                $attribute = Html::getAttributeName($this->attribute);
                $label = Html::encode($this->model->getAttributeLabel($attribute));
            }
        }

        $attribute = Html::getAttributeName($this->attribute);
        $validators = $this->model->getActiveValidators($attribute);
        foreach ($validators as $validator) {
            if ($validator instanceof RequiredValidator) {
                Yii::error(get_class($validator));
                $label .= Html::tag('span', '*', ['class' => 'text-danger']);
                break;
            }
        }

        if (!isset($options['for'])) {
            $options['for'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->parts['{beginLabel}'] = Html::beginTag('label', $options);
        $this->parts['{endLabel}'] = Html::endTag('label');
        if (!isset($this->parts['{labelTitle}'])) {
            $this->parts['{labelTitle}'] = $label;
        }

        if (!isset($this->parts['{label}'])) {
            $this->parts['{label}'] = Html::label($label);
        }
    }
}
