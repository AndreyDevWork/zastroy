<?php
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Catalog';

$this->params['breadcrumbs'][] = $this->title;

$totalCount = 100; // Общее количество элементов (ваше значение)
$pageSize = 7; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);
?>

<section class="catalog">
    <div class="header-section">
        <h1 class="header-section__title title34">Каталог недвижимости</h1>
        <div class="my-btn">+&nbsp;&nbsp;Создать категорию</div>
    </div>
    <div class="info-block catalog__table">
        <div class="catalog__columns">
            <div class="title14 catalog__title">№</div>
            <div class="title14 catalog__title">Наименование</div>
        </div>
        <div class="catalog__rows">
            <div class="catalog__rows">
                <?php
                for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
                ?>
                    <div class="catalog__row-holder">
                        <div class="catalog__row-first">
                            <div class="catalog__item">
                                <div class="catalog__icon-wrapper">
                                    <img src="<?= $baseUrl ?>/img/icon-svg/cube.svg" alt="icon">
                                    <div class="catalog__icon">
                                        <?= $i ?>
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
                        <div class="catalog__row-last">
                            <div class="catalog__delete">
                                <img src="<?= $baseUrl ?>/img/icon-svg/delete.svg" alt="delete">
                            </div>
                            <a href="#">
                                <div class="catalog__to">
                                    <img src="<?= $baseUrl ?>/img/icon-svg/arrow-right.svg" alt="delete">
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
</section>
<div class="pagination">
    <?= \app\widgets\CustomLinkPager::widget(['pagination' => $pagination]) ?>
</div>