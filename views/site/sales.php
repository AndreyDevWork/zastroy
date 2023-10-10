<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Sales';

$this->params['breadcrumbs'][] = $this->title;

?>
<section class="sales">
    <div class="sales__container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'itemTemplate' => "<li class='title14 breadcrumb__li'>{link}</li>\n",
        ]); ?>

        <h1 class="sales__header title34">Отчеты по продажам</h1>
        <div class="sales__selects">
            <div class="sales__select">
                <div class="title14 sales__position-wrapper">Руководитель</div>
                <div class="sales__select-wrapper">
                    <img class="sales__arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                    <select class="select sales__position" name="position" id="position">
                        <option selected>Все</option>
                        <option>Спиридонов Максим Ярославович</option>
                        <option>Козлова Ульяна Павловна</option>
                        <option>Иванов Михаил Леонидович</option>
                        <option>Королева Мария Марковна</option>
                        <option>Зайцев Пётр Ильич</option>
                        <option>Воробьева Аделина Фёдоровна</option>
                    </select>
                </div>
            </div>
            <div class="sales__select">
                <div class="title14 sales__position-wrapper">Менеджер</div>
                <div class="sales__select-wrapper">
                    <img class="sales__arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                    <select class="select sales__position" name="position" id="position">
                        <option selected>Все</option>
                        <option>Спиридонов Максим Ярославович</option>
                        <option>Козлова Ульяна Павловна</option>
                        <option>Иванов Михаил Леонидович</option>
                        <option>Королева Мария Марковна</option>
                        <option>Зайцев Пётр Ильич</option>
                        <option>Воробьева Аделина Фёдоровна</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="info-block">
            <div class="sales__panel">
                <div class="sales__date">
                    <div class="title18 sales__month">Месяц</div>
                    <div class="title22 sales__current">Сентябрь 2023 год</div>
                </div>

                <div class="sales__report">
                    <div class="sales__quadro">
                        <div class="sales__diagram-wrapper">
                            <div style="
                               background: conic-gradient(
                                    #9AE1FF 0% 19%,
                                    #009FE3 19% 54%,
                                    #028DC8 54% 82%,
                                    #D8F3FF 82% 100%
                                );
                            " class="diagram"></div>
                        </div>
                    </div>
                    <div class="sales__info">
                        <div class="sales__item">
                            <span class="sales__span sales__span1"></span>
                            <div class="sales__index">
                                <div class="sales__index-name">Общее количество объектов</div>
                                <div class="title54 sales__index-number">570</div>
                            </div>
                        </div>
                        <div class="sales__item">
                            <span class="sales__span sales__span2"></span>
                            <div class="sales__index">
                                <div class="sales__index-name">В работе</div>
                                <div class="title54 sales__index-number">100</div>
                            </div>
                        </div>
                        <div class="sales__item">
                            <span class="sales__span sales__span3"></span>
                            <div class="sales__index">
                                <div class="sales__index-name">Проданные объекты</div>
                                <div class="title54 sales__index-number">250</div>
                            </div>
                        </div>
                        <div class="sales__item">
                            <span class="sales__span sales__span4"></span>
                            <div class="sales__index">
                                <div class="sales__index-name">Неактивные объекты</div>
                                <div class="title54 sales__index-number">45</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
