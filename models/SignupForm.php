<?php

namespace app\models;

use yii\base\Model;
use app\models\User;
use Yii;

class SignupForm extends Model {
    public $login;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['login' ,'trim'],
            ['login', 'required'],
            ['login', 'unique', 'targetClass' => 'app\models\User', 'message' => 'Логин уже занят'],
            ['login', 'string', 'min' => 3, 'max' => 100],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 100],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'Такой email уже занят'],
            ['password', 'required']
        ];
    }

    public function signup() {
        if (!$this->validate()) {
            return null;
        }

        $User = new User();
        $User->login = $this->login;
        $User->email = $this->email;

        $hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $User->password = $hash;
        $AuthKey = $User->getAuthKey();
        $User->validateAuthKey($AuthKey);

        return $User->save() ? $User : null;
    }
}