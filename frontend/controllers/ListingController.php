<?php

namespace frontend\controllers;

class ListingController extends \yii\web\Controller
{
    public function actionListingDetails()
    {
        return $this->render('listing-details');
    }

    public function actionListingGrid()
    {
        return $this->render('listing-grid');
    }

    public function actionListingList()
    {
        return $this->render('listing-list');
    }
}
