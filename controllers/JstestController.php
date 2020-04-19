<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Jstest;

class JstestController extends Controller
{
  public function actionIndex()
  {
    return $this->render('index');
  }
}
