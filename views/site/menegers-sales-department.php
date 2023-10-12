<?php
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'menegers-sales-department';

$this->params['breadcrumbs'][] = $this->title;

$totalCount = 300; // Общее количество элементов (ваше значение)
$pageSize = 14; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);

?>
<section class="department">
    <div class="header-section">
        <h1 class="header-section__title title34">Менеджеры отдела продаж</h1>
        <div class="my-btn">+&nbsp;&nbsp;Регистрация</div>
    </div>
    <div class="info-block department__table">
        <div class="department__columns">
            <div class="title14 department__title">№</div>
            <div class="title14 department__title">ФИО руководителя</div>
            <div class="title14 department__title">E-mail</div>
            <div class="title14 department__title">Телефон</div>
            <div class="title14 department__title">Город</div>
            <div class="title14 department__title">Руководитель</div>
        </div>
        <div class="department__rows">
            <?php
            for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
                ?>
                <div class="department__row">
                    <div class="title14 department__title"><?= $i ?></div>
                    <div class="title14 department__title">Кальнин Кирилл Александрович</div>
                    <div class="title14 department__title">mail@simmmple.com</div>
                    <div class="title14 department__title">+7(960)860-60-70</div>
                    <div class="title14 department__title">г.Нововсибирск</div>
                    <div class="title14 department__title">Спиридонов Максим Ярославович</div>

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
