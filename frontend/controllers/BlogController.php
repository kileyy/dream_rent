<?php

namespace frontend\controllers;

class BlogController extends \yii\web\Controller
{

    public function actionBlogDetails()
    {
        return $this->render('blog-details');
    }
    public function actionBlogGrid()
    {
        return $this->render('blog-grid');
    }
    public function actionBlogList()
    {
        return $this->render('blog-list');
    }
}
