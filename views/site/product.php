<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Product';
?>
<div class="container">
    <section class="product">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <div class="header-section">
            <h1 class="title28">2-комн. квартира, 42,21 м² в ЖК «Gray (Грэй)»</h1>
            <div class="my-btn">Редактировать</div>
        </div>
        <div class="category__data">
            <div class="category__info">
                <div class="title14 regular">ID</div>
                <a href="#" class="category__link title14 refular">8272</a>
            </div>
            <div class="category__info">
                <div class="title14 regular">Ответственный</div>
                <a href="#" class="category__link title14 refular">Исаев Никита Даниилович</a>
            </div>
            <div class="category__info">
                <div class="title14 regular">Статус</div>
                <div class="title14 regular">Забронировано</div>
            </div>
        </div>

        <div class="product__header">
            <div class="product__spans">
                <div class="product__span title14">Цена</div>
                <div class="product__span title14">5 680 000 ₽</div>
            </div>
            <div class="product__spans">
                <div class="product__span title14">Подзаголовок</div>
                <div class="product__span title14">2-комнатная, 1.2 корпус</div>
            </div>
        </div>

        <div class="info-block photos">
            <span class="title16 bold photos__span">
                Фотографии
            </span>
            <div class="photos__photos">
                <div class="photos__wrapper">
                    <img src="/web/img/product/photo6.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="/web/img/product/photo7.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="/web/img/product/photo8.png" alt="photo" class="object-fit">
                </div>
                <div class="photos__wrapper">
                    <img src="/web/img/product/photo9.png" alt="photo" class="object-fit">
                </div>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="info-block stats__info-block">
            <div class="tabs">
                <div class="title16 regular tabs__tab tabs__tab_active">Характеристики</div>
                <div class="title16 regular tabs__tab">О комплексе</div>
                <div class="title16 regular tabs__tab">О доме</div>
                <div class="title16 regular tabs__tab">Дополнительная информация</div>
                <div class="title16 regular tabs__tab">Видео</div>
            </div>

            <div class="stats__stats">
                <div class="stats__column">
                    <div class="title14 regular stats__stat">
                        Тип квартиры
                    </div>
                    <div class="title14 regular stats__stat">
                        Этаж
                    </div>
                    <div class="title14 regular stats__stat">
                        Адрес
                    </div>
                    <div class="title14 regular stats__stat">
                        Площадь
                    </div>
                    <div class="title14 regular stats__stat">
                        Балкон
                    </div>
                    <div class="title14 regular stats__stat">
                        Санузел
                    </div>
                    <div class="title14 regular stats__stat">
                        Отделка
                    </div>
                </div>
                <div class="stats__column">
                    <div class="title14 regular stats__stat">
                        Новосстройка
                    </div>
                    <div class="title14 regular stats__stat">
                        1/10
                    </div>
                    <div class="title14 regular stats__stat">
                        Советский район
                    </div>
                    <div class="title14 regular stats__stat">
                        42,21 м3
                    </div>
                    <div class="title14 regular stats__stat">
                        есть
                    </div>
                    <div class="title14 regular stats__stat">
                        Раздельный
                    </div>
                    <div class="title14 regular stats__stat">
                        без отделки
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>