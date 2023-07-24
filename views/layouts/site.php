<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <div id="logo">
            <a href="<?php echo Url::to(['site/index']) ?>">
                <?= \yii\helpers\Html::img("@web/img/logo.png"); ?>
            </a>
        </div>
        <div>
            <ul>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'services']) ?>">услуги центра</a></li>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'pricing']) ?>">цены</a></li>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'examples']) ?>">примеры работ</a></li>
                <li><a href="<?php echo Url::to(['calc/body']) ?>">рассчитать стоимость</a></li>
            </ul>
        </div>
        <div>
            <div>
                <i class="fas fa-phone-square"></i>
                <a href="">+7 (3513) 28-79-40</a>
            </div>
        </div>
    </header>
    <main id="main" class="flex-shrink-0" role="main">
        <?= $content ?>
        </div>
    </main>

    <footer id="footer">
        <div class="footer_nav">
            <ul>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'services']) ?>">услуги центра</a></li>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'pricing']) ?>">цены</a></li>
                <li><a href="<?php echo Url::to(['site/index', '#' => 'examples']) ?>">примеры работ</a></li>
                <li><a href="<?php echo Url::to(['calc/body']) ?>">рассчитать стоимость</a></li>
            </ul>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>