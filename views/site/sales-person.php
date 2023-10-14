<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Sales';

$this->params['breadcrumbs'][] = $this->title;

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

    <div class="table__menegers">

    </div>
</section>
