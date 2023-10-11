<?php

namespace app\widgets;

use yii\widgets\LinkPager;

class CustomLinkPager extends LinkPager
{
    public function run()
    {
        if ($this->registerLinkTags) {
            $this->registerLinkTags();
        }

        return $this->render('@app/widgets/views/custom-pagination', [
            'pagination' => $this->pagination,
        ]);
    }
}