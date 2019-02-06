<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 06.02.2019
 * Time: 18:16
 */

namespace app\controllers;
use yii\web\Controller;


class AppController extends Controller
{
          protected function setMeta($title = null, $keywords = null, $description = null)
          {
              $this->view->title = $title;
              $this->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
              $this->registerMetaTag(['name' => 'description', 'content' => "$description"]);
          }
}