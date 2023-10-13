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

    <section class="about">
        <div class="info-block">
            <div class="about__left">
                <div class="tabs">
                    <div class="title16 regular tabs__tab tabs__tab_active">О комплексе</div>
                    <div class="title16 regular tabs__tab">О доме</div>
                    <div class="title16 regular tabs__tab">Дополнительная информация</div>
                    <div class="title16 regular tabs__tab">Видео</div>
                </div>
                <div class="about__about">
                    <?= $form->field($model, 'username')->textInput(['value' => 'О комплексе', 'required' => 'false', 'class' => 'input about__input-edit'])->label('Заголовок', ['class' => 'title13']) ?>
                    <div class="about__p">
                        <p>Жилой комплекс Gray (Грей) представляет собой новый формат жилья в Левенцовке. Малоэтажные кирпичные дома, с просторными дворами закрытого типа. Во дворах безопасные детские и спортивные площадки, прогулочные зоны, барбекю и многое другое. Большая территория под гостевую парковку, теплый подземный паркинг. </p>
                        <p>На территории комплекса собственный детский сад и поликлиника, в шаговой доступности крупный торговый центр.Просторные квартиры с панорамным остеклением и хорошей шумоизоляцией. Планировки от уютной студии до просторной трёшки отличаются грамотными планировочными решениями, имеют встроенные ниши и гардеробные помещения.</p>
                    </div>
                </div>

                <div class="photos__upload about__photos-upload" id="drop-area">
                    <div class="title12 photos__mb10">Загрузка фото</div>
                    <?= $form->field($model, 'username')->fileInput(['class' => 'photos__input', 'id' => 'file-input2'])->label('
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
            </div>
        </div>
    </section>

    <section class="rooms">
        <div class="info-block rooms__info-block">
        <span class="title16 bold rooms__span">
            Квартиры
        </span>
            <div class="rooms__block">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <div class="rooms__card">
                        <div class="rooms__plan">
                            <div class="title16 bold rooms__sircle">+7</div>
                            <img src="<?= $baseUrl ?>/img/plan.png" alt="plan" class="object-fit">
                        </div>
                        <div class="rooms__info">
                            <div class="title16 bold rooms__name">2-комн. квартира, 42,21 м² в ЖК «Gray (Грэй)»</div>
                            <div class="title16 regular rooms__descr">Цена: 5 680 000 ₽</div>
                            <div class="title16 regular rooms__descr">2-комнатная, 1.2 корпус</div>
                            <div class="title16 regular rooms__descr rooms__book">Забронировано</div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="rooms__card rooms__add">
                    <img src="<?= $baseUrl ?>/img/icon-svg/create-room.svg" alt="create" class="rooms__icon-create">
                    <div class="rooms__create-title titl12">Добавить квартиру</div>
                </div>
                <div class="rooms__card rooms__add">
                    <img src="<?= $baseUrl ?>/img/icon-svg/create-room.svg" alt="create" class="rooms__icon-create">
                    <div class="rooms__create-title titl12">Добавить квартиру</div>
                </div>
            </div>
        </div>
    </section>

    <?php ActiveForm::end(); ?>
</div>

