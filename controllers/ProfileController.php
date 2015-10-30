<?php

namespace nkostadinov\user\controllers;

class ProfileController extends \yii\web\Controller
{
    public $defaultAction = 'view';

    public function actionView()
    {
        $view = $this->module->views['profile'];
        if(\Yii::$app->request->isAjax)
            return $this->renderAjax($view);

        return $this->render($view);
    }

}