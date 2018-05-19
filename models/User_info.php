<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\UserHackModel;

class User_info extends ActiveRecord
{

    public static function tableName()
    {
        return '{{user_info}}';
    }

    public static function getHackUsers($id_hack)
    {
        $ids_user = UserHackModel::getUsersIdsByHack($id_hack);
        return User_info::find()
                        ->where(['id_user' => $ids_user])
                        ->all();
    }

}
