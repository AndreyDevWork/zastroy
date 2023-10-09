<?php
/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\assets\AppScriptsLogin;

AppAsset::register($this);
AppScriptsLogin::register($this)

?>

<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Login</title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php
    ?>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>