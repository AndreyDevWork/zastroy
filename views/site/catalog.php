<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Catalog';

$this->params['breadcrumbs'][] = $this->title;

?>

<section class="catalog">
    <div class="catalog__head">
        <h1 class="catalog__header title34">Каталог недвижимости</h1>
        <div class="my-btn">Создать категорию</div>
    </div>
    <div class="info-block catalog__table">
        <div class="catalog__columns">
            <div class="title14 catalog__title">№</div>
            <div class="title14 catalog__title">Наименование</div>
        </div>
        <div class="catalog__rows">
            <div class="catalog__row">
                <div class="catalog__item">
                    <div class="catalog__icon-wrapper">
                        <img src="<?= $baseUrl ?>/img/icon-svg/cube.svg" alt="icon">
                        <div class="catalog__icon">
                            1
                        </div>
                    </div>
                </div>
                <div class="catalog__info">
                    <div class="catalog__item">
                        <div class="catalog__sircle title16 bold">
                            +7
                        </div>
                        <div class="catalog__house">
                            <img src="<?= $baseUrl ?>/img/house.png" alt="house" class="object-fit">
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__name title14">Наименование</div>
                        <div class="catalog__current title14 regular">ЖК «61 Квартал»</div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__name title14">Адресс</div>
                        <div class="catalog__current title14 regular">г.Ростов-На-Дону</div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__name title14">ID</div>
                        <div class="catalog__current title14 regular">8463</div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__name title14">Ответственный</div>
                        <div class="catalog__current title14 regular">Кальнин Кирилл Александрович</div>
                    </div>
                </div>
        </div>
    </div>
</section>
