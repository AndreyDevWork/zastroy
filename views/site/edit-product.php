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
    <?php $form = ActiveForm::begin([
        'id' => 'edit-form',
        'options' => ['class' => 'login__form'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'title14'],
            'inputOptions' => ['class' => 'input'],

        ],
    ]); ?>
    <div class="header-section">
        <h1 class="title28">Редактировать</h1>
        <div class="header-section__btns">
            <?= Html::submitButton('<img src="' . Yii::$app->request->baseUrl . '/img/icon-svg/save.svg" alt="save"> Сохранить',
                ['class' => 'my-btn header-section__btn', 'name' => 'edit-button', 'encode' => false]) ?>
            <div class="my-btn opacity-btn header-section__btn">
                Отмена
            </div>
        </div>
    </div>
    <div class="edit-product__form">
        <?= $form->field($model, 'username')->textInput(['value' => '2-комн. квартира, 42,21 м² в ЖК «Gray (Грэй)»', 'required' => 'false'])->label('Название') ?>
        <?= $form->field($model, 'username')->textInput(['value' => '8272', 'disabled' => true, 'required' => 'false'])->label('ID') ?>
        <?= $form->field($model, 'username')->textInput(['value' => 'Исаев Никита Даниилович', 'required' => 'false'])->label('Ответственный') ?>
        <?= $form->field($model, 'username')->textInput(['value' => '5 680 000 ₽', 'required' => 'false'])->label('Цена') ?>
        <?= $form->field($model, 'username')->textInput(['value' => '2-комнатная, 1.2 корпус', 'required' => 'false'])->label('Подзаголовок') ?>
        <div class="select-width">
            <label  for="position" class="title14">Статус</label>
            <div class="select-wrapper">
                <img class="select-arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                <select class="select" name="position" id="position">
                    <option disabled>Забронировано</option>
                    <option>Забронировано</option>
                    <option>Не забронировано</option>
                </select>
            </div>
        </div>
    </div>

    <div class="info-block photos">
            <span class="title16 bold photos__span">
                Фотографии
            </span>
        <div class="photos__photos">
            <div class="photos__wrapper">
                <div class="photos__delete">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo6.png" alt="photo" class="object-fit">
            </div>
            <div class="photos__wrapper">
                <div class="photos__delete">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo7.png" alt="photo" class="object-fit">
            </div>
            <div class="photos__wrapper">
                <div class="photos__delete">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo8.png" alt="photo" class="object-fit">
            </div>
            <div class="photos__wrapper">
                <div class="photos__delete">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo9.png" alt="photo" class="object-fit">
            </div>
        </div>
        <div class="photos__upload" id="drop-area">
            <div class="title12 photos__mb10">Загрузка фото</div>
            <div class="mb-3 field-file-input required">
                <label class="title14" for="file-input">
                    <div class="photos__custom-inp">
                        <div class="photos__upload-icon">
                            <img src="/web/img/icon-svg/upload.svg" alt="upload">
                        </div>
                        <div class="photos__upload-text">
                            <div class="title13">Выберите файл или перетащите его сюда</div>
                            <div class="title12 photos__format">JPG,  или PNG, размер файла не более 10 МБ</div>
                        </div>
                        <div class="my-btn opacity-btn title10 photos__btn">
                            Загрузить фото
                        </div>
                    </div>
                </label>
                <input type="hidden" name="LoginForm[username]" value=""><input type="file" id="file-input" class="photos__input form-control" name="LoginForm[username]" aria-required="true">
                <div class="invalid-feedback"></div>
            </div>            </div>
        <div class="photos__uploaded">
            <div class="photos__uploaded-photo">
                <div class="photos__delete photos__delete-upload">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo8.png" alt="photo" class="object-fit">
            </div>
            <div class="photos__uploaded-photo">
                <div class="photos__delete photos__delete-upload">
                    <img src="/web/img/icon-svg/x.svg" alt="delete">
                </div>
                <img src="/web/img/product/photo9.png" alt="photo" class="object-fit">
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
