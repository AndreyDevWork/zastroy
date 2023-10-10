<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Request';

$this->params['breadcrumbs'][] = $this->title;

?>
<section class="request">
    <h1 class="request__header title34">Заявки</h1>
    <div class="request__table">
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
</section>
