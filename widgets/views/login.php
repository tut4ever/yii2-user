<?php

use yii\widgets\ActiveForm;

?>

<div class="login-box">
    <div class="login-logo">
        <h1><strong><?= Yii::$app->name ?></strong></h1>
    </div>


    <div class="login-box-body">
        <p class="login-box-msg">Nhập thông tin đăng nhập</p>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?php if (class_exists('\quangthinh\yii\adminlte\ICheck')): ?>
            <?= $form->field($model, 'rememberMe', ['template' => '{input} {label}{hint}{error}'])->widget(\quangthinh\yii\adminlte\ICheck::className()) ?>
        <?php else: ?>
            <?= $form->field($model, 'rememberMe', ['template' => '{input} {label}{hint}{error}'])->checkbox() ?>
        <?php endif ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-flat btn-block', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>