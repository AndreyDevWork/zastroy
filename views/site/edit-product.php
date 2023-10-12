<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Edit-product';
?>
<div class="container">
    <section class="edit-product">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <div class="header-section">
            <h1 class="title28">Редактировать</h1>
            <div class="header-section__btns">
                <div class="my-btn edit-product__btn">Сохранить</div>
                <div class="my-btn opacity-btn edit-product__btn">Отмена</div>
            </div>
        </div>
        <div class="edit-product__data">

        </div>
    </section>
</div>