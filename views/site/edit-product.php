<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'edit-product';

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div class="container">
    <div class="edit-product">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
    </div>
<!--    <div class="header-section">-->
<!--        <h1 class="title28">Редактировать</h1>-->
<!--        <div class="header-section__btns">-->
<!--            --><?php //= Html::submitButton('<img src="' . Yii::$app->request->baseUrl . '/img/icon-svg/save.svg" alt="save"> Сохранить',
//                ['class' => 'my-btn edit-category__btn', 'name' => 'edit-button', 'encode' => false]) ?>
<!--            <div class="my-btn opacity-btn edit-category__btn">-->
<!--                Отмена-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
