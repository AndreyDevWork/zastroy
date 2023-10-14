<?php
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Request';

$this->params['breadcrumbs'][] = $this->title;

$totalCount = 300; // Общее количество элементов (ваше значение)
$pageSize = 14; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);

?>
<section class="request">
    <h1 class="request__header title34">Заявки</h1>
    <div class="request__table">
        <div class="request__rows">
            <div class="request__column">
                <div class="title14 request__title">№</div>
                <div class="title14 request__title">Имя клиента <div class="sort-btn"><img src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="sort"></div></div>
                <div class="title14 request__title">Телефон</div>
                <div class="title14 request__title">Наименование</div>
                <div class="title14 request__title">Цена</div>
                <div class="title14 request__title">Город</div>
                <div class="title14 request__title">Ответственный</div>
                <div class="title14 request__title">ID</div>
                <div class="title14 request__title">Статус</div>
            </div>
        </div>
        <div class="request__rows">
            <?php
            for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
            ?>
            <div class="request__row">
                <div class="title14 request__title"><?= $i ?></div>
                <div class="title14 request__title">Кальнин Кирилл Александрович</div>
                <div class="title14 request__title">+7(960)860-60-70</div>
                <div class="title14 request__title">ЖК «61 Квартал»</div>
                <div class="title14 request__title">5 680 000 ₽</div>
                <div class="title14 request__title">г.Нововсибирск</div>
                <div class="title14 request__title">Зайцев Пётр Ильич</div>
                <div class="title14 request__title">1245</div>
                <div class="title14 request__title">В работе</div>
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