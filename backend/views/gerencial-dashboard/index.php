<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Dashboard Gerencial';
$this->registerJsFile('@web/js/dashboard/gerencial-dashboard.js', ['depends' => [\yii\web\JqueryAsset::class]]);

?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Bienvenido al Dashboard Gerencial.</p>
</div>