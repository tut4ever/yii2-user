<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \quangthinh\yii\user\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
    <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger btn-flat',
    'data' => [
        'confirm' => 'Bạn có muốn xóa?',
        'method' => 'post',
    ],
    ]) ?>
</p>

<div class="box box-default user-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
//            'password_hash',
            'auth_key',
        ],
    ]) ?>

</div>
