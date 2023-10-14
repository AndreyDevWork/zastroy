<?php
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Sales';

$this->params['breadcrumbs'][] = $this->title;


$totalCount = 100; // Общее количество элементов (ваше значение)
$pageSize = 10; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);
?>
<section class="sales">
    <h1 class="sales__header title34">Отчеты по продажам</h1>
    <div class="sales__selects sales__select">
        <div class="select-width">
            <div class="title14">Руководитель</div>
            <div class="select-wrapper">
                <img class="select-arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                <select class="select" name="position" id="position">
                    <option disabled>Спиридонов Максим Ярославович</option>
                    <option>Все</option>
                    <option>Спиридонов Максим Ярославович</option>
                    <option>Козлова Ульяна Павловна</option>
                    <option>Иванов Михаил Леонидович</option>
                    <option>Королева Мария Марковна</option>
                    <option>Зайцев Пётр Ильич</option>
                    <option>Воробьева Аделина Фёдоровна</option>
                </select>
            </div>
        </div>
    </div>


    <div class="info-block sales__table">
        <div class="sales__columns">
            <div class="title14 sales__title">№</div>
            <div class="title14 sales__title sales__fio">ФИО менеджера <div class="sort-btn"><img src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="sort"></div></div>
        </div>
        <div class="sales__rows">
            <?php
            for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
            ?>
                <div class="sales__row-holder">
                    <div class="sales__row-first">
                        <div class="sales__icon-wrapper">
                            <img src="/web/img/icon-svg/cube.svg" alt="icon">
                            <div class="catalog__icon">
                                <?= $i ?>
                            </div>
                        </div>
                    </div>
                    <div class="sales__row-last">
                        <div class="sales__info">
                            <div class="sales__item">
                                <div class="title14">Воробьева Аделина Фёдоровна</div>
                            </div>
                        </div>
                        <div class="sales__btns">
                            <a href="#">
                                <div class="sales__to">
                                    <img src="/web/img/icon-svg/arrow-right.svg" alt="delete">
                                </div>
                            </a>
                        </div>
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
