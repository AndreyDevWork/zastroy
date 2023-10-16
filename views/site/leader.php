<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Leader';
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
                <div class="info-block contact">
                    <div class="contact__edit"><img src="<?= $baseUrl ?>/img/icon-svg/edit.svg" alt="pen"></div>
                    <div class="contact__photo-wrapper">
                        <div class="title14 contact__title">Фото</div>
                        <div class="contact__photo" id="drop-area-avatar">
                            <form class="contact__form" action="">
                                <input type="file" name="avatar-input" id="fileInput" class="contact__avatar-input">
                                <div class="contact__sircle">
                                    <div class="contact__sircle2">
                                        <img src="<?= $baseUrl ?>/img/icon-svg/avatar.svg" alt="icon">
                                    </div>
                                </div>
                                <div class="title14 regular contact__pick">Выберите файл или перетащите его сюда</div>
                                <label for="fileInput">
                                    <div class="my-btn opacity-btn title10 contact__opacity-btn">Загрузить фото</div>
                                </label>
                            </form>
                        </div>
                    </div>

                    <div class="contact__contacts">
                        <div class="title18">Контактная информация</div>
                        <div class="contact__contact-wrapper">
                            <div class="title14 regular contact__contact-item">ФИО</div>
                            <div class="title14 regular contact__contact-item">Спиридонов Максим Ярославович</div>
                            <div class="title14 regular contact__contact-item">E-mail</div>
                            <div class="title14 regular contact__contact-item">info@gmail.com</div>
                            <div class="title14 regular contact__contact-item">Телефон</div>
                            <div class="title14 regular contact__contact-item">+7(913) 636-33-33</div>
                            <div class="title14 regular contact__contact-item">Город</div>
                            <div class="title14 regular contact__contact-item">г.Новосибирск</div>
                            <div class="title14 regular contact__contact-item">Пароль</div>
                            <div class="title14 regular contact__contact-item contact__change-pass">Сгенерировать новый пароль</div>
                        </div>
                    </div>
                </div>
                <div class="info-block leader__menegers">
                    <div class="title18">Менеджеры в подчинении</div>
                    <div class="leader__mengr-list">
                        <?php
                            for ($i = 0; $i <= 6; $i++) {
                                ?>
                                <div class="leader__mengr-item">
                                    <div class="leader__meneger">
                                        <div class="leader__mengr-photo"></div>
                                        <div class="leader__mengr-info">
                                            <div class="title14 regular">Зайцев Пётр Ильич</div>
                                            <div class="title12">Менеджер продаж</div>
                                        </div>
                                    </div>
                                </div>
                                <?
                            }

                        ?>
                    </div>
                </div>
            </div>
            <div class="info-block leader__month">
            </div>
        </div>
    </section>
</div>