<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
//    public $defaultAction = 'my-test';

    /*public function actions()
    {
        return [
            // объявляет "test" действие с помощью названия класса
            'test' => 'app\components\HelloAction',
        ];
    }*/

    public function actionIndex($name = 'Guest', $age = 25)
    {
//        var_dump($name, $age);
//        return $this->renderFile('@app/views/test/index.php');
//        return $this->renderAjax('index');
//        return $this->renderPartial('index');
        return $this->render('index', compact('name', 'age'));
        /*return $this->render('index', [
            'name' => $name,
            'age' => $age,
        ]);*/
    }

    public function actionMyTest()
    {
        return __METHOD__;
    }

}