<?php

/* @var $this yii\web\View */
/* @var $model \quangthinh\yii\user\models\User */

$this->title = 'Thêm mới User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
