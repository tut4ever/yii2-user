<?php

use yii\helpers\Html;
use quangthinh\yii\adminlte\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \quangthinh\yii\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
</p>


<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'username',
//            'password_hash',
            'auth_key',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<p>
    <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
</p>
