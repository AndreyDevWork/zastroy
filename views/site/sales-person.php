<?php
use yii\widgets\Breadcrumbs;
use yii\data\Pagination;

$this->params['baseUrl'] = Yii::$app->request->baseUrl;

$this->title = 'Sales';

$this->params['breadcrumbs'][] = $this->title;


$totalCount = 100; // Общее количество элементов (ваше значение)
$pageSize = 10; // Количество элементов на странице

$pagination = new Pagination([
    'totalCount' => $totalCount,
    'pageSize' => $pageSize,
]);
?>
<section class="sales">
    <h1 class="sales__header title34">Отчеты по продажам</h1>
    <div class="sales__selects sales__select">
        <div class="select-width">
            <div class="title14">Руководитель</div>
            <div class="select-wrapper">
                <img class="select-arrow" src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="icon">
                <select class="select" name="position" id="position">
                    <option disabled>Спиридонов Максим Ярославович</option>
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


    <div class="info-block sales__table">
        <div class="sales__columns">
            <div class="title14 sales__title">№</div>
            <div class="title14 sales__title sales__fio">ФИО менеджера <div class="sort-btn"><img src="<?= $baseUrl ?>/img/icon-svg/arrow-bottom.svg" alt="sort"></div></div>
        </div>
        <div class="sales__rows">
            <?php
            for ($i = $pagination->offset; $i < $pagination->offset + $pagination->limit; $i++) {
            ?>
                    <div class="sales__row-holder">
                        <div class="sales__row-first">
                            <div class="sales__icon-wrapper">
                                <img src="/web/img/icon-svg/cube.svg" alt="icon">
                                <div class="catalog__icon">
                                    <?= $i ?>
                                </div>
                            </div>
                        </div>
                        <div class="sales__wrapper-info">
                            <div class="sales__row-last">
                                <div class="sales__info">
                                    <div class="sales__item">
                                        <div class="title14 regular">Воробьева Аделина Фёдоровна</div>
                                    </div>
                                </div>
                                <div class="sales__to">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                                        <path d="M14.5979 0.488155C15.2618 -0.162718 16.3382 -0.162718 17.0021 0.488155C17.666 1.13903 17.666 2.1943 17.0021 2.84518L10.2021 9.51184C9.53819 10.1627 8.46181 10.1627 7.79792 9.51184L0.997918 2.84518C0.334027 2.1943 0.334027 1.13903 0.997918 0.488155C1.66181 -0.162718 2.73819 -0.162718 3.40208 0.488155L9 5.97631L14.5979 0.488155Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="sales__person">
                                <div class="sales__person-wrapper">
                                    <div class="sales__person-diagram">
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
                                    <div class="diagram-info sales__diagram-info">
                                        <div class="diagram-info__index sales__index">
                                            <div class="diagram-info__wrapper-span sales__wrapper-span">
                                                <span class="diagram-info__span diagram-info__span1 sales__diagram-info-span"></span>
                                            </div>

                                            <div class="title14 sales__index-name sales__index-name1">Общее количество объектов</div>
                                        </div>
                                        <div class="title25 diagram-info__number sales__number">570</div>
                                    </div>

                                    <div class="diagram-info sales__diagram-info">
                                        <div class="diagram-info__index sales__index">
                                            <div class="diagram-info__wrapper-span sales__wrapper-span">
                                                <span class="diagram-info__span diagram-info__span2 sales__diagram-info-span"></span>
                                            </div>

                                            <div class="title14 sales__index-name sales__index-name2">Проданные объекты</div>
                                        </div>
                                        <div class="title25 diagram-info__number sales__number">120</div>
                                    </div>

                                    <div class="diagram-info sales__diagram-info">
                                        <div class="diagram-info__index sales__index">
                                            <div class="diagram-info__wrapper-span sales__wrapper-span">
                                                <span class="diagram-info__span diagram-info__span3 sales__diagram-info-span"></span>
                                            </div>

                                            <div class="title14 sales__index-name sales__index-name3">В работе</div>
                                        </div>
                                        <div class="title25 diagram-info__number sales__number">36</div>
                                    </div>

                                    <div class="diagram-info sales__diagram-info">
                                        <div class="diagram-info__index sales__index">
                                            <div class="diagram-info__wrapper-span sales__wrapper-span">
                                                <span class="diagram-info__span diagram-info__span3 sales__diagram-info-span"></span>
                                            </div>

                                            <div class="title14 sales__index-name sales__index-name2">Неактивные объекты</div>
                                        </div>
                                        <div class="title25 diagram-info__number sales__number">68</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<div class="pagination">
    <?= \app\widgets\CustomLinkPager::widget(['pagination' => $pagination]) ?>
</div>
