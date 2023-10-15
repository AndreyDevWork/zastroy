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
                <div class="info-block leader__info">
                    <div class="leader__photo-wrapper">
                        <div class="title14 leader__title">Фото</div>
                        <div class="leader__photo" id="drop-area-avatar">
                            <form action="">
                                <input type="file" name="avatar-input" id="fileInput" class="leader__avatar-input">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="info-block leader__menegers">

                </div>
            </div>
            <div class="info-block leader__month">

            </div>
        </div>
    </section>
</div>