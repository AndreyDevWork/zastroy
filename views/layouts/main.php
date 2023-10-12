<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$baseUrl = isset($this->params['baseUrl']) ? $this->params['baseUrl'] : '';
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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header" id="header">
    <div class="logo">
        <a href="#">
            <img src="<?= $baseUrl ?>/img/login/logo.svg" alt="logo" class="object-fit">
        </a>
    </div>
    <div class="header__profile">
        <div class="title14 regular header__avatar">
            A
        </div>
        <div class="header__text-block">
            <div class="title14 bold header__name">Зайцев А.В.</div>
            <div class="title14 regular header__position">Администратор</div>
        </div>
        <div class="header__btn">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="arrow-bottom">
        </div>
        <div class="header__menu">
            <div class="header__menu-item">
                <?php
                echo Nav::widget([
                    'items' => [
                        '<li>'
                            . Html::beginForm(['/site/logout'])
                            . Html::submitButton(
                                'Выход <img src="../../../web/img/icon-svg/exit.svg" alt="arrow-bottom">',
                                ['class' => 'title14 bold header__name header__logout']
                            )
                            . Html::endForm()
                        . '</li>'
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Admin', 'url' => ['/site/admin']],
            ['label' => 'Sales', 'url' => ['/site/sales']],
            ['label' => 'Request', 'url' => ['/site/request']],
            ['label' => 'Catalog', 'url' => ['/site/catalog']],
            ['label' => 'Department', 'url' => ['/site/leaders-sales-department']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main>
    <?php if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
    <?php endif ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<!--<footer id="footer" class="mt-auto py-3 bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row text-muted">-->
<!--            <div class="col-md-6 text-center text-md-start">&copy; My Company --><?php //= date('Y') ?><!--</div>-->
<!--            <div class="col-md-6 text-center text-md-end">--><?php //= Yii::powered() ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
