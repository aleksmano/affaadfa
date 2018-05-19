<?php

namespace app\models;

use yii\db\ActiveRecord;

class CommandsModel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{commands}}';
    }
    public static function getDb()
    {
        // использовать компонент приложения "db2"
        return \Yii::$app->db;
    }

    public static function getHackCommands($id_hack)
    {
      $commands = CommandsModel::getDb()->createCommand('SELECT distinct uh.id_command FROM user_hack uh WHERE uh.id_command IS NOT NULL and uh.id_hack='.$id_hack)->queryAll();

      $ids_command = [];
      if(count($commands) > 1){
        foreach ($commands as  $command) {
          $ids_command[] = $command['id_command'];
        }
      }

      $cases = CommandsModel::find()
                            ->where(['id_command' => 1])
                            ->all();
      return $cases;
    }



}
