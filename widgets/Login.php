<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 6/22/2016
 * Time: 6:08 PM
 */

namespace quangthinh\yii\user\widgets;


use yii\base\Widget;

class Login extends Widget
{
    public $model;

    public function run()
    {
        return $this->render('login', [
            'model' => $this->model,
        ]);
    }
}