<?php
namespace app\models;

use yii\db\ActiveRecord;

class HackatonsModel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{hacatons}}';
    }

    public function getAllHackatons()
    {
      $hackatons  = HackatonsModel::find()
                      ->orderBy('date')
                      ->all();

      return $hackatons;

    }

}
