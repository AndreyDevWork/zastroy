<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Admin';
?>
<section class="admin">
    <ul class="admin__container">
        <li class="admin__card">
            <a class="admin__link" href="#">
                <div class="admin__icon">
                    <img src="<?= $baseUrl ?>/img/icon-svg/cards/sales.svg" alt="icon">
                </div>
                <div class="title18 admin__name">Отчеты по продажам</div>
            </a>
        </li>
        <li class="admin__card">
            <a class="admin__link" href="#">
                <div class="admin__icon">
                    <img src="<?= $baseUrl ?>/img/icon-svg/cards/request.svg" alt="icon">
                </div>
                <div class="title18 admin__name">Заявки</div>
            </a>
        </li>

        <li class="admin__card">
            <a class="admin__link" href="#">
                <div class="admin__icon">
                    <img src="<?= $baseUrl ?>/img/icon-svg/cards/catalog.svg" alt="icon">
                </div>
                <div class="title18 admin__name">Каталог</div>
            </a>
        </li>

        <li class="admin__card">
            <a class="admin__link" href="#">
                <div class="admin__icon">
                    <img src="<?= $baseUrl ?>/img/icon-svg/cards/leader.svg" alt="icon">
                </div>
                <div class="title18 admin__name">Руководители</div>
            </a>
        </li>

        <li class="admin__card">
            <a class="admin__link" href="#">
                <div class="admin__icon">
                    <img src="<?= $baseUrl ?>/img/icon-svg/cards/menegers.svg" alt="icon">
                </div>
                <div class="title18 admin__name">Менеджеры</div>
            </a>
        </li>
    </ul>
</section>

