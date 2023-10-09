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
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Login</title>
        <?php $this->head() ?>
    </head>
    <body>
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
    <aside class="aside">
        <div class="logo aside__logo">
            <a href="#">
                <img src="<?= $baseUrl ?>/img/login/logo.svg" alt="logo" class="object-fit">
            </a>
        </div>
        <ul class="aside__menu">
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon"><img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/sales.svg" alt="icon"></div>
                    <span>Отчеты по продажам</span>
                </a>
            </li>
            <li class="aside__item">

                <a href="#" class="title16 aside__link">
                    <div class="aside__icon"><img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/request.svg" alt="icon"></div>
                    <span>Заявки</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon"><img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/catalog.svg" alt="icon"></div>
                    <span>Каталог</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon"><img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/leader.svg" alt="icon"></div>
                    <span>Руководители</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/menegers.svg" alt="icon">
                    <span>Менеджеры</span>
                </a>
            </li>
        </ul>
    </aside>

    <?php $this->beginBody() ?>
    <main>
        <?= $content ?>
    </main>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>