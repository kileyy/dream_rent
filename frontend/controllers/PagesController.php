<?php

namespace frontend\controllers;

use yii\filters\AccessControl;


class PagesController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => [
                    'booking'
                ],
                'rules' => [
                    [
                        'actions' => ['booking'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionAboutUs()
    {
        return $this->render('about-us');
    }

    public function actionBooking()
    {
        return $this->render('booking');
    }

    public function actionBookingPayment()
    {
        return $this->render('booking-payment');
    }

    public function actionComingSoon()
    {
        return $this->renderPartial('coming-soon');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionInvoiceDetails()
    {
        return $this->render('invoice-details');
    }

    public function actionMaintenance()
    {
        return $this->renderPartial('maintenance');
    }

    public function actionOurTeam()
    {
        return $this->render('our-team');
    }

    public function actionPricing()
    {
        return $this->render('pricing');
    }

    public function actionPrivacyPolicy()
    {
        return $this->render('privacy-policy');
    }

    public function actionTermsCondition()
    {
        return $this->render('terms-condition');
    }

    public function actionTestimonial()
    {
        return $this->render('testimonial');
    }
}
