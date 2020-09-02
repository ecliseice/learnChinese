<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\SignupAsset;

SignupAsset::register($this);

$this->title = "Регистрация";
$this->params['breadcrumbs'] = $this->title;
?>
<div class="main__signup-form">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'signup-form'
    ]);?>

    <?= $form->field($model, 'login')->textInput(['autofocus' => true])->label("Логин") ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput()->label("Пароль") ?>
    <div class="form-group">
        <?= Html::submitButton('Регистрация', [
            'class' => 'btn btn-primary',
            'name' => 'signup-button'
        ]) ?>
    </div>
    <? ActiveForm::end(); ?>
</div>
