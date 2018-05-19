<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\HackatonsModel;

class HackatonsController extends Controller
{
    public function actionIndex()
    {
        $model = new HackatonsModel();
        $hackatons = $model->getAllHackatons();

        return $this->render('index', [
            'hackatons' => $hackatons,
        ]);
    }

    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
