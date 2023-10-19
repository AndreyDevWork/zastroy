<?php
$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'my-data';

$this->params['breadcrumbs'][] = $this->title;
?>

<section class="leader my-data">

    <div class="header-section">
        <h1 class="header-section__title title34">Личные данные</h1>
    </div>
    <div class="leader__wrapper">
        <div class="leader__left">
            <div class="info-block contact">
                <div class="contact__delete"><img src="/web/img/icon-svg/delete.svg" alt="pen"></div>
                <div class="contact__edit"><img src="/web/img/icon-svg/edit.svg" alt="pen"></div>
                <div class="contact__photo-wrapper">
                    <div class="title14 contact__title">Фото</div>
                    <div class="contact__photo" id="drop-area-avatar">
                        <form class="contact__form" action="">
                            <input type="file" name="avatar-input" id="fileInput" class="contact__avatar-input">
                            <div class="contact__sircle">
                                <div class="contact__sircle2">
                                    <img src="/web/img/icon-svg/avatar.svg" alt="icon">
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
                        <div class="contact__ones">
                            <div class="title14 regular contact__contact-item">ФИО</div>
                            <div class="title14 regular contact__contact-item">Спиридонов Максим Ярославович</div>
                        </div>
                        <div class="contact__ones">
                            <div class="title14 regular contact__contact-item">E-mail</div>
                            <div class="title14 regular contact__contact-item">info@gmail.com</div>
                        </div>
                        <div class="contact__ones">
                            <div class="title14 regular contact__contact-item">Телефон</div>
                            <div class="title14 regular contact__contact-item">+7(913) 636-33-33</div>
                        </div>
                        <div class="contact__ones">
                            <div class="title14 regular contact__contact-item">Город</div>
                            <div class="title14 regular contact__contact-item">г.Новосибирск</div>
                        </div>
                        <div class="contact__ones">
                            <div class="title14 regular contact__contact-item">Пароль</div>
                            <div class="title14 regular contact__contact-item contact__change-pass">Сгенерировать новый пароль</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="info-block leader__menegers">
                <div class="title18">Менеджеры в подчинении</div>
                <div class="leader__mengr-list">
                    <div class="leader__mengr-item">
                        <div class="leader__meneger">
                            <div class="leader__mengr-photo">
                                <img src="/web/img/meneger.png" alt="photo" class="object-fit">
                            </div>
                            <div class="leader__mengr-info">
                                <div class="title14 bold">Зайцев Пётр Ильич</div>
                                <div class="title12">Менеджер продаж</div>
                            </div>
                        </div>

                        <div class="leader__mengr-btns">
                            <img class="leader__edit-btn" src="/web/img/icon-svg/pencil-alt.svg" alt="icon">
                            <img class="leader__delete-btn" src="/web/img/icon-svg/trash.svg" alt="icon">
                        </div>
                    </div>
                    <div class="leader__mengr-item">
                        <div class="leader__meneger">
                            <div class="leader__mengr-photo">
                                <img src="/web/img/meneger.png" alt="photo" class="object-fit">
                            </div>
                            <div class="leader__mengr-info">
                                <div class="title14 bold">Зайцев Пётр Ильич</div>
                                <div class="title12">Менеджер продаж</div>
                            </div>
                        </div>

                        <div class="leader__mengr-btns">
                            <img class="leader__edit-btn" src="/web/img/icon-svg/pencil-alt.svg" alt="icon">
                            <img class="leader__delete-btn" src="/web/img/icon-svg/trash.svg" alt="icon">
                        </div>
                    </div>
                    <div class="leader__mengr-item">
                        <div class="leader__meneger">
                            <div class="leader__mengr-photo">
                                <img src="/web/img/meneger.png" alt="photo" class="object-fit">
                            </div>
                            <div class="leader__mengr-info">
                                <div class="title14 bold">Зайцев Пётр Ильич</div>
                                <div class="title12">Менеджер продаж</div>
                            </div>
                        </div>

                        <div class="leader__mengr-btns">
                            <img class="leader__edit-btn" src="/web/img/icon-svg/pencil-alt.svg" alt="icon">
                            <img class="leader__delete-btn" src="/web/img/icon-svg/trash.svg" alt="icon">
                        </div>
                    </div>
                    <div class="leader__mengr-item">
                        <div class="leader__meneger">
                            <div class="leader__mengr-photo">
                                <img src="/web/img/meneger.png" alt="photo" class="object-fit">
                            </div>
                            <div class="leader__mengr-info">
                                <div class="title14 bold">Зайцев Пётр Ильич</div>
                                <div class="title12">Менеджер продаж</div>
                            </div>
                        </div>

                        <div class="leader__mengr-btns">
                            <img class="leader__edit-btn" src="/web/img/icon-svg/pencil-alt.svg" alt="icon">
                            <img class="leader__delete-btn" src="/web/img/icon-svg/trash.svg" alt="icon">
                        </div>
                    </div>
                    <div class="leader__mengr-item">
                        <div class="leader__meneger">
                            <div class="leader__mengr-photo">
                                <img src="/web/img/meneger.png" alt="photo" class="object-fit">
                            </div>
                            <div class="leader__mengr-info">
                                <div class="title14 bold">Зайцев Пётр Ильич</div>
                                <div class="title12">Менеджер продаж</div>
                            </div>
                        </div>

                        <div class="leader__mengr-btns">
                            <img class="leader__edit-btn" src="/web/img/icon-svg/pencil-alt.svg" alt="icon">
                            <img class="leader__delete-btn" src="/web/img/icon-svg/trash.svg" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="add-line">
                    <img src="/web/img/icon-svg/plus.svg" alt="plus">
                    <div class="title13">Добавить поле</div>
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
