<?php

namespace frontend\controllers;

class ContactController extends \yii\web\Controller
{
    public function actionContactUs()
    {
        return $this->render('contact-us');
    }
}
