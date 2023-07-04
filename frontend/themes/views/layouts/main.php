<?php

/** @var frontend\base\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\themes\assets\ThemeAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\FileHelper;
use yii\helpers\Json;

$asset = ThemeAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <?php $this->registerCsrfMetaTags() ?>

    <title>Dreams Rent | Template</title>
    <?php $this->head() ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/img/favicon.png">

</head>

<body>
    <?php $this->beginBody() ?>

    <div class="main-wrapper">

        <?= $this->render('partials/_nav') ?>
        <section class="content">
            <?= Alert::widget() ?>

            <?= $content ?>
        </section>
        <!-- /Pricing Plan -->
        <?= $this->render('partials/_footer') ?>

    </div>
    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
        </svg>
    </div>
    <!-- scrollToTop end -->
    <?php $this->endBody() ?>
</body>

</html>


<?php $this->endPage() ?>