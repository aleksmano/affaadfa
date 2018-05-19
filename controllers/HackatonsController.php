<?php
namespace app\controllers;

use yii\web\Controller;

class HackatonsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
