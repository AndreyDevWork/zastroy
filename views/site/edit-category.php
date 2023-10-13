<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Edit-category';

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div class="container">
    <?php $form = ActiveForm::begin([
        'id' => 'edit-form',
        'options' => ['class' => 'login__form'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'title14'],
            'inputOptions' => ['class' => 'input'],

        ],
    ]); ?>
    <section class="edit-category">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <div class="header-section">
            <h1 class="title28">Редактировать</h1>
            <div class="header-section__btns">
                <?= Html::submitButton('<img src="' . Yii::$app->request->baseUrl . '/img/icon-svg/save.svg" alt="save"> Сохранить',
                    ['class' => 'my-btn edit-category__btn', 'name' => 'edit-button', 'encode' => false]) ?>
                <div class="my-btn opacity-btn edit-category__btn">
                    Отмена
                </div>
            </div>
        </div>
        <div class="edit-category__data">
            <?= $form->field($model, 'username')->textInput(['value' => 'ЖК «61 Квартал»', 'required' => 'false'])->label('Название') ?>
            <?= $form->field($model, 'username')->textInput(['value' => '8272', 'disabled' => true])->label('ID') ?>
            <div class="select-width">
                <label  for="position" class="title14">Ответственный</label>
                <div class="select-wrapper">
                    <img class="select-arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                    <select class="select" name="position" id="position">
                        <option disabled>Все</option>
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
            <?= $form->field($model, 'username')->textInput(['value' => 'г.Ростов-На-Дону', 'disabled' => true])->label('Адрес') ?>



        </div>
        <div class="info-block photos">
            <span class="title16 bold photos__span">
                Фотографии
            </span>
            <div class="photos__photos">
                <div class="photos__wrapper">
                    <div class="photos__delete">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img src="<?= $baseUrl ?>/img/product/photo1.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <div class="photos__delete">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img src="<?= $baseUrl ?>/img/product/photo2.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <div class="photos__delete">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img src="<?= $baseUrl ?>/img/product/photo3.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <div class="photos__delete">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img src="<?= $baseUrl ?>/img/product/photo4.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <div class="photos__delete">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img src="<?= $baseUrl ?>/img/product/photo5.png" alt="photo" class="object-fit">
                </div>
            </div>
            <div class="photos__upload" id="drop-area">
                <div class="title12 photos__mb10">Загрузка фото</div>
                <?= $form->field($model, 'username')->fileInput(['class' => 'photos__input', 'id' => 'file-input'])->label('
                    <div class="photos__custom-inp">
                        <div class="photos__upload-icon">
                            <img src="' . $baseUrl . '/img/icon-svg/upload.svg" alt="upload">
                        </div>
                        <div class="photos__upload-text">
                            <div class="title13">Выберите файл или перетащите его сюда</div>
                            <div class="title12 photos__format">JPG,  или PNG, размер файла не более 10 МБ</div>
                        </div>
                        <div class="my-btn opacity-btn title10 photos__btn">
                            Загрузить фото
                        </div>
                    </div>
                ') ?>
            </div>
            <div class="photos__uploaded">
                <div class="photos__uploaded-photo">
                    <div class="photos__delete photos__delete-upload">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img class="object-fit" src="<?= $baseUrl ?>/img/about-photo.png" alt="photo">
                </div>
                <div class="photos__uploaded-photo">
                    <div class="photos__delete photos__delete-upload">
                        <img src="<?= $baseUrl ?>/img/icon-svg/x.svg" alt="delete">
                    </div>
                    <img class="object-fit" src="<?= $baseUrl ?>/img/about-photo.png" alt="photo">
                </div>
            </div>
        </div>
    </section>
    <?php ActiveForm::end(); ?>
</div>

