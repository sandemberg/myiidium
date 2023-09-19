<?php

namespace app\controllers;

class MyiidiumController extends \yii\web\Controller
{
    public $layout = 'myiidium';  // subscrevendo layout padrão passando para o que criamos

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRead()
    {
        return $this->render('read');
    }

}
