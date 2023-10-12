<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Edit-category';

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div class="container">
    <section class="edit-category">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <div class="header-section">
            <h1 class="title28">Редактировать</h1>
            <div class="header-section__btns">
                <button type="submit" class="my-btn edit-category__btn">Сохранить</button>
                <div class="my-btn opacity-btn edit-category__btn">Отмена</div>
            </div>
        </div>
        <div class="edit-category__data">

        </div>
        <div class="info-block photos">
        <span class="title16 bold photos__span">
            Фотографии
        </span>
            <div class="photos__photos">
                <div class="photos__wrapper">
                    <img src="<?= $baseUrl ?>/img/product/photo1.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="<?= $baseUrl ?>/img/product/photo2.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="<?= $baseUrl ?>/img/product/photo3.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="<?= $baseUrl ?>/img/product/photo4.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="<?= $baseUrl ?>/img/product/photo5.png" alt="photo" class="object-fit">
                </div>
            </div>
        </div>
    </section>
</div>