<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class ProfilForm extends Model
{
    public $id_user;
    public $name;
    public $about;
    public $lastname;
    public $sex;
    public $img;

    public function rules()
    {
        return [

            [['name', 'lastname'], 'required']

        ];
    }


    public function getUserInfo()
    {
       return $user = User_info::find()
            ->where(['id' => Yii::$app->user->id])
            ->one();
    }

    public function saveUserInfo()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User_info();
        $user->name = $this->name;
        $user->lastname = $this->lastname;
        $user->lastname = $this->lastname;
        $user->lastname = $this->lastname;

        return $user->save() ? $user : null;
    }
}
