<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="login">
    <div class="login__interface">
        <h1 class="login__title mb-none">Авторизация</h1>
        <div class="title16 login__subtitle">Все поля обязательны для заполнения</div>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'login__form'],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'title14'],
                'inputOptions' => ['class' => 'input'],

            ],
        ]); ?>

        <div class="login__input">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'mail@simmmple.com'])->label('Email<span class="input__required">*</span>') ?>
        </div>

        <div class="login__input">
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль<span class="input__required">*</span>') ?>
            <div class="login__eye">
                <span class="login__span"></span>
                <img src="<?= $baseUrl ?>/img/icon-svg/eye.svg" alt="eye" class="object-fit">
            </div>
        </div>
        <div class="title12">! латинские буквы и цифры (минимум одна). Всего 10 символов</div>
        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>", 'labelOptions' => ['class' => 'title14']
        ])->label('Запомнить меня')
        ?>

        <div class="form-group">
            <div>
                <?= Html::submitButton('Войти', ['class' => 'btn login__btn', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="login__preview">
        <div class="login__logo-wrapper">
            <img src="<?= $baseUrl ?>/img/login/logo.svg" alt="logo" class="login__logo-img object-fit">
        </div>
        <div class="login__wrapper-img">
            <img class="object-fit" src="<?= $baseUrl ?>/img/login/photo.jpg" alt="photo">
        </div>
    </div>
<!--    <button class="btn">Применить</button>-->
</section>

<!---->
<!--<div class="site-login">-->
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!---->
<!--            --><?php //$form = ActiveForm::begin([
//                'id' => 'login-form',
//                'fieldConfig' => [
//                    'template' => "{label}\n{input}\n{error}",
//                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
//                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
//                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
//                ],
//            ]); ?>
<!---->
<!--            --><?php //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--            --><?php //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--            --><?php //= $form->field($model, 'rememberMe')->checkbox([
//                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//            ]) ?>
<!---->
<!--            <div class="form-group">-->
<!--                <div>-->
<!--                    --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!---->
<!--            <div style="color:#999;">-->
<!--                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--                To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
