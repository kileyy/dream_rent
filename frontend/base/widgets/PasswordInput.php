<?php

namespace frontend\base\widgets;

use frontend\base\web\View;
use yii\bootstrap5\Html;
use yii\bootstrap5\InputWidget;

class PasswordInput extends InputWidget
{
    public function run()
    {
        $options = ['id' => $this->getId(), 'class' => 'pass-group'];

        $content = Html::beginTag('div', $options);
        $content .= $this->renderToggleIcon();
        $content .= Html::endTag('div');

        $this->registerToggleScript();

        return $content;
    }

    protected function renderToggleIcon()
    {
        Html::addCssClass($this->options, ['pass-input']);
        $toggleIcon = Html::tag('span', '', ['class' => 'fas fa-eye toggle-password']);
        return Html::activePasswordInput($this->model, $this->attribute, $this->options) . $toggleIcon;
    }

    protected function registerToggleScript()
    {
        $id = $this->getId();
        $js = <<<JS
$('#{$id} .toggle-password').on('click', function() {
    var input = $('#{$id} .pass-input');
    input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
});
JS;
        \Yii::$app->view->registerJs($js, View::POS_READY);
    }
}
