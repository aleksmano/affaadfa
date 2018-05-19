<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\HackatonsModel;
use \yii\web\HttpException;

class HackatonsController extends Controller
{
    public function actionIndex()
    {
        $hackatons = HackatonsModel::getAllHackatons();
        return $this->render('index', [
            'hackatons' => $hackatons,
        ]);
    }
    public function actionOne($id_hack)
    {
      if(empty($id_hack) || !is_numeric($id_hack)){
         throw new HttpException(404 ,'User not found');
      }
      $hack = HackatonsModel::getOneHackaton($id_hack);
      return $this->render('hackaton', [
          'hack' => $hack,
      ]);
    }

    public function actionCases($id_hack)
    {
        if(empty($id_hack) || !is_numeric($id_hack)){
           throw new HttpException(404 ,'User not found');
        }
        $cases = HackatonsModel::getCases($id_hack);
        return $this->render('cases', [
          'cases' => $cases
        ]);
    }

    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
