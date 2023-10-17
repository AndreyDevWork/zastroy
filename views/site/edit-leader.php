<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'edit-leader';

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div class="container">
    <section class="leader">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <h1 class="leader__header title34">Спиридонов Максим Ярославович</h1>
        <div class="title14 regular leader__sub-title">Руководитель отдела продаж</div>
        <div class="leader__wrapper">
            <div class="leader__left">
                <div class="info-block contact contact-edit">
                    <div class="contact__left-block">
                        <div class="contact__photo-wrapper">
                            <div class="title14 contact__title">Фото</div>
                            <div class="contact__photo" id="drop-area-avatar">
                                <!--                            <form class="contact__form" action="">-->
                                <!--                                <input type="file" name="avatar-input" id="fileInput" class="contact__avatar-input">-->
                                <!--                                <div class="contact__sircle">-->
                                <!--                                    <div class="contact__sircle2">-->
                                <!--                                        <img src="--><?php //= $baseUrl ?><!--/img/icon-svg/avatar.svg" alt="icon">-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                <div class="title14 regular contact__pick">Выберите файл или перетащите его сюда</div>-->
                                <!--                                <label for="fileInput">-->
                                <!--                                    <div class="my-btn opacity-btn title10 contact__opacity-btn">Загрузить фото</div>-->
                                <!--                                </label>-->
                                <!--                            </form>-->
                                <img src="<?= $baseUrl ?>/img/leader-edit-photo.svg" alt="icon">
                            </div>
                        </div>
                        <div class="title14 regular contact__switch-photo">Изменить фотографию</div>
                    </div>
                    <div class="contact__contacts">
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => ['class' => 'login__form'],
                            'fieldConfig' => [
                                'template' => "{label}\n{input}\n{error}",
                                'labelOptions' => ['class' => 'title14'],
                                'inputOptions' => ['class' => 'input'],

                            ],
                        ]); ?>
                        <div class="title18">Контактная информация</div>
                        <div class="contact__contact-wrapper">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => false, 'value' => 'Спиридонов Максим Ярославович'])->label('ФИО<span class="input__required">*</span>') ?>
                            <?= $form->field($model, 'password')->textInput(['autofocus' => false, 'placeholder' => 'info@gmail.com'])->label('Email<span class="input__required">*</span>') ?>
                            <?= $form->field($model, 'password')->textInput(['autofocus' => false, 'placeholder' => '+7(___)-___-___'])->label('Телефон<span class="input__required">*</span>') ?>
                            <?= $form->field($model, 'passwordd')->textInput(['autofocus' => false, 'class' => 'input contact__city'])->label('Город<span class="input__required">*</span>') ?>
                        </div>
                        <div class="contact__edit-pass">
                            <?= $form->field($model, 'passworddd')->textInput(['autofocus' => false, 'class' => 'input contact__city'])->label('Пароль<span class="input__required">*</span>') ?>
                            <div class="my-btn opacity-btn title16 contact__opacity-btn">Cгенерировать пароль</div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            </div>

            <div class="info-block month">
                <div class="title18 month__title18">Месяц</div>
                <div class="title22 month__date">Сентябрь 2023 год</div>
                <div class="month__wrapper">
                    <div class="month__diagram">
                        <div style="
                       background: conic-gradient(
                            #9AE1FF 0% 19%,
                            #009FE3 19% 54%,
                            #028DC8 54% 82%,
                            #D8F3FF 82% 100%
                        );
                        " class="diagram">
                        </div>
                    </div>
                    <hr class="month__hr">
                </div>
                <div class="month__stats">
                    <div class="diagram-info">
                        <div class="title18 sales__index-name">Общее количество объектов</div>
                        <div class="title54 diagram-info__number">570</div>
                    </div>

                    <div class="diagram-info">
                        <div class="title18 sales__index-name">Общее количество объектов</div>
                        <div class="title54 diagram-info__number">570</div>
                    </div>

                    <div class="diagram-info">
                        <div class="title18 sales__index-name">Общее количество объектов</div>
                        <div class="title54 diagram-info__number">570</div>
                    </div>

                    <div class="diagram-info">
                        <div class="title18 sales__index-name">Общее количество объектов</div>
                        <div class="title54 diagram-info__number">570</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
