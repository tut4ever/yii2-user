<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 6/22/2016
 * Time: 6:03 PM
 */

namespace quangthinh\yii\user\actions;


use quangthinh\yii\user\models\LoginForm;
use Yii;
use yii\base\Action;

class LoginAction extends Action
{
    public function run()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->controller->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->controller->goBack();
        }

        return $this->controller->render('login', [
            'model' => $model,
        ]);
    }
}