<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Request';

$this->params['breadcrumbs'][] = $this->title;

?>
<section class="request">
    <h1 class="request__header title34">Заявки</h1>
    <div class="request__table">

    </div>
</section>
