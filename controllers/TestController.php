<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public $defaultAction = 'my-test';

    public function actions()
    {
        return [
            // объявляет "test" действие с помощью названия класса
            'test' => 'app\components\HelloAction',
        ];
    }

    public function actionIndex($name, $age = 25)
    {
        var_dump($name, $age);
        return '<h2>Hello world!</h2>';
    }

    public function actionMyTest()
    {
        return __METHOD__;
    }

}