<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 06.02.2019
 * Time: 19:04
 */

namespace app\modules\admin\controllers;
use yii\web\Controller;


class DefaultController extends AppAdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}