<?php

namespace app\controllers;

use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
//        $a = new LoginForm();
//        Yii::$app->user->login($a->getUser(), 3600*24*30);
//        Yii::$app->user->logout();
//        Yii::$app->session->destroy();
        echo '<pre>';
        echo __FILE__.' - '.__LINE__."\n";
        var_dump($_SESSION);
        var_dump(Yii::$app->user);
        var_dump(Yii::$app->user->isGuest);
        echo '</pre>';

        return $this->render('index');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

}
