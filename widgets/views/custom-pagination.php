<?php
use yii\widgets\LinkPager;

/* @var $pagination yii\data\Pagination */

?>
<div class="pagination">
    <?php
    $currentPage = $pagination->getPage() + 1;
    $pageCount = $pagination->getPageCount();

    // Стрелка влево (если не на первой странице)
    if ($currentPage > 1) {
        echo '<a href="' . $pagination->createUrl($currentPage - 2) . '" class="page-link">&lt;</a>';
    } else {
        echo '<span class="disabled">&lt;</span>';
    }

    // Первые три страницы
    for ($i = max(1, $currentPage - 1); $i <= min($pageCount, $currentPage + 2); $i++) {
        echo '<a href="' . $pagination->createUrl($i - 1) . '" class="">' . $i . '</a>';
    }

    // Троеточие
    if ($currentPage + 2 < $pageCount) {
        echo '<span class="three-dots disabled">...</span>';
    }

    // Последние страницы
    for ($i = max($currentPage + 2, $pageCount); $i <= $pageCount; $i++) {
        echo '<a href="' . $pagination->createUrl($i - 1) . '" class="">' . $i . '</a>';
    }

    // Стрелка вправо (если не на последней странице)
    if ($currentPage < $pageCount) {
        echo '<a href="' . $pagination->createUrl($currentPage) . '" class="">&gt;</a>';
    } else {
        echo '<span class="disabled">&gt;</span>';
    }
    ?>
</div>