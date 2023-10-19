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

        <title><?= Html::encode($this->title) ?></title>
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
                ['label' => 'Leaders-Department', 'url' => ['/site/leaders-sales-department']],
                ['label' => 'Menegers-Department', 'url' => ['/site/menegers-sales-department']],
                ['label' => 'Category', 'url' => ['/site/category']],
                ['label' => 'edit-category', 'url' => ['edit-category']],
                ['label' => 'Product', 'url' => ['product']],
                ['label' => 'Edit-product', 'url' => ['edit-product']],
                ['label' => 'Sales-person', 'url' => ['sales-person']],
                ['label' => 'Leader', 'url' => ['leader']],
                ['label' => 'Edit-leader', 'url' => ['edit-leader']],
                ['label' => 'meneger', 'url' => ['meneger']],
                ['label' => 'my-data', 'url' => ['my-data']],
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
                    <div class="aside__icon">
                        <img class="aside__svg aside__svg_active" src="<?= $baseUrl ?>/img/icon-svg/cards/sales.svg" alt="icon">
                        <img class="aside__svg aside__svg-gray aside__svg_none" src="<?= $baseUrl ?>/img/icon-svg/cards/gray-sales.svg" alt="icon">
                    </div>
                    <span class="aside__span header-title">Отчеты по продажам</span>
                </a>
                <div class="aside__active"></div>
            </li>
            <li class="aside__item">

                <a href="#" class="title16 aside__link">
                    <div class="aside__icon">
                        <img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/request.svg" alt="icon">
                        <img class="aside__svg aside__svg-gray aside__svg_active" src="<?= $baseUrl ?>/img/icon-svg/cards/gray-request.svg" alt="icon">
                    </div>
                    <span class="aside__span">Заявки</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon">
                        <img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/catalog.svg" alt="icon">
                        <img class="aside__svg  aside__svg-gray aside__svg_active" src="<?= $baseUrl ?>/img/icon-svg/cards/gray-catalog.svg" alt="icon">
                    </div>
                    <span class="aside__span">Каталог</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon">
                        <img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/leader.svg" alt="icon">
                        <img class="aside__svg aside__svg-gray aside__svg_active" src="<?= $baseUrl ?>/img/icon-svg/cards/gray-leader.svg" alt="icon">
                    </div>
                    <span class="aside__span">Руководители</span>
                </a>
            </li>
            <li class="aside__item">
                <a href="#" class="title16 aside__link">
                    <div class="aside__icon">
                        <img class="aside__svg" src="<?= $baseUrl ?>/img/icon-svg/cards/menegers.svg" alt="icon">
                        <img class="aside__svg aside__svg-gray aside__svg_active" src="<?= $baseUrl ?>/img/icon-svg/cards/gray-menegers.svg" alt="icon">
                    </div>
                    <span class="aside__span">Менеджеры</span>
                </a>
            </li>
        </ul>
    </aside>

    <?php $this->beginBody() ?>
    <main>
        <div class="container-left">
            <div class="container-inside">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'itemTemplate' => "<li class='title14 breadcrumb__li'>{link}</li>\n",
                ]); ?>
                <?= $content ?>
            </div>
        </div>

    </main>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>