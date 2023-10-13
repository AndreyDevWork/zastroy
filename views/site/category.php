<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Category';
?>

<div class="container">
    <section class="category">
        <a href="#" class="back">
            <img src="<?= $baseUrl ?>/img/icon-svg/arrow-left.svg" alt="arrow-left">
            <span class="back__span">Назад</span>
        </a>
        <div class="header-section">
            <h1 class="title28">ЖК «61 Квартал»</h1>
            <div class="my-btn"><img src="<?= $baseUrl ?>/img/icon-svg/edit.svg" alt="edit">&nbsp;Редактировать</div>
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
                <div class="title14 regular">Адрес</div>
                <div class="title14 regular">г.Ростов-На-Дону</div>
            </div>
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

    <section class="about">
        <div class="info-block about__info-block">
            <div class="about__left">
                <div class="tabs">
                    <div class="title16 regular tabs__tab tabs__tab_active">О комплексе</div>
                    <div class="title16 regular tabs__tab">О доме</div>
                    <div class="title16 regular tabs__tab">Дополнительная информация</div>
                    <div class="title16 regular tabs__tab">Видео</div>
                </div>
                <div class="about__about">
                    <h2 class="title28 bold about__title">О комплексе</h2>
                    <div class="about__p">
                        <p>Жилой комплекс Gray (Грей) представляет собой новый формат жилья в Левенцовке. Малоэтажные кирпичные дома, с просторными дворами закрытого типа. Во дворах безопасные детские и спортивные площадки, прогулочные зоны, барбекю и многое другое. Большая территория под гостевую парковку, теплый подземный паркинг. </p>
                        <p>На территории комплекса собственный детский сад и поликлиника, в шаговой доступности крупный торговый центр.Просторные квартиры с панорамным остеклением и хорошей шумоизоляцией. Планировки от уютной студии до просторной трёшки отличаются грамотными планировочными решениями, имеют встроенные ниши и гардеробные помещения.</p>
                    </div>
                </div>
            </div>
            <div class="about__photo">
                <img src="<?= $baseUrl ?>/img/about-photo.png" alt="photo" class="object-fit">
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

            </div>
        </div>
    </section>
</div>
