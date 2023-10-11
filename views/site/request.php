<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Request';

$this->params['breadcrumbs'][] = $this->title;

?>
<section class="request">
    <h1 class="request__header title34">Заявки</h1>
    <div class="request__table">
        <div class="request__rows">
            <div class="request__column">
                <div class="title14 request__title">№</div>
                <div class="title14 request__title">Имя клиента</div>
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
            for ($i = 1; $i <= 14; $i++) { ?>
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
