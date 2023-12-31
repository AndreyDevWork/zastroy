<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/import.css'
    ];
    public $js = [
        'css/blocks/login/login.js',
        'css/blocks/header/header.js',
        'css/blocks/admin/admin.js',
        'css/blocks/photos/photos.js',
        'css/blocks/sales/sales.js',
        'css/blocks/leader/avatar.js',
        'css/ui-kit/select/select.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];

}
