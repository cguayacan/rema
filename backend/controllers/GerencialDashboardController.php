<?php

namespace backend\controllers;

use yii\web\Controller;

class GerencialDashboardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        return $this->render('view', ['id' => $id]);
    }

   
}