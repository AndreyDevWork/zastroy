<?php
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'response';

$this->params['breadcrumbs'][] = $this->title;

$totalCount = 300; // Общее количество элементов (ваше значение)
$pageSize = 14; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);
?>

<section class="response">
    <div class="header-section">
        <h1 class="header-section__title title34">Отклики</h1>
    </div>
    <div class="info-block department__table">
        <div class="department__columns">
            <div class="title14 department__title">№</div>
            <div class="title14 department__title">Наименование</div>
            <div class="title14 department__title">Цена<div class="sort-btn"><img src="/web/img/icon-svg/arrow-bottom.svg" alt="sort"></div></div>
            <div class="title14 department__title">Город</div>
            <div class="title14 department__title">Ответственный</div>
            <div class="title14 department__title">id <div class="sort-btn"><img src="/web/img/icon-svg/arrow-bottom.svg" alt="sort"></div></div>
            <div class="title14 department__title">Статус</div>
        </div>

        <div class="department__rows">
            <?php
            for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
                ?>
                    <div class="department__row">
                        <div class="title14 department__title"><?= $i ?></div>
                        <div class="title14 department__title">ЖК «61 Квартал»</div>
                        <div class="title14 department__title">5 680 000 ₽</div>
                        <div class="title14 department__title">г.Нововсибирск</div>
                        <div class="title14 department__title">Зайцев Пётр Ильич</div>
                        <div class="title14 department__title">1245</div>
                        <div class="title14 department__title">Обработан</div>
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