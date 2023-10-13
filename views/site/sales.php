<?php
use yii\widgets\Breadcrumbs;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Sales';

$this->params['breadcrumbs'][] = $this->title;

?>
<section class="sales">
    <div>
        <h1 class="sales__header title34">Отчеты по продажам</h1>
        <div class="sales__selects">
            <div class="select-width">
                <div class="title14">Руководитель</div>
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
            <div class="select-width">
                <div class="title14">Менеджер</div>
                <div class="select-wrapper">
                    <img class="select-arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                    <select class="select" name="position2" id="position2">
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
                        <div class="diagram-info">
                            <div class="diagram-info__index">
                                <span class="diagram-info__span diagram-info__span1"></span>
                                <div class="title18 sales__index-name">Общее количество объектов</div>
                            </div>
                            <div class="title54 diagram-info__number">570</div>
                        </div>
                        <div class="diagram-info">
                            <div class="diagram-info__index">
                                <span class="diagram-info__span diagram-info__span2"></span>
                                <div class="title18 sales__index-name">В работе</div>
                            </div>
                            <div class="title54 diagram-info__number">100</div>
                        </div>
                        <div class="diagram-info">
                            <div class="diagram-info__index">
                                <span class="diagram-info__span diagram-info__span3"></span>
                                <div class="title18 sales__index-name">Проданные объекты</div>
                            </div>
                            <div class="title54 diagram-info__number">250</div>
                        </div>
                        <div class="diagram-info">
                            <div class="diagram-info__index">
                                <span class="diagram-info__span diagram-info__span4"></span>
                                <div class="title18 sales__index-name">Неактивные объекты</div>
                            </div>
                            <div class="title54 diagram-info__number">45</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
