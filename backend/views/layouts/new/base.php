<?php
use backend\assets\BackendAsset;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$bundle = BackendAsset::register($this);

?>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode('Rema Inspector') ?></title>
    <link rel="stylesheet" href="<?= Url::to('@web/css/style.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendor/owl-carousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendor/owl-carousel/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendor/jqvmap/css/jqvmap.min.css') ?>">

    <div id="main-wrapper">
        <?php include 'component/navbar.php'?>
        <?php include 'component/sidebar.php'?>
        <?php echo $content ?>
    </div>    

 <!-- Required vendors -->
<script src="<?= Url::to('@web/vendor/global/global.min.js') ?>"> </script>
<script src="<?= Url::to('@web/js/quixnav-init.js') ?>"></script>
<script src="<?= Url::to('@web/js/custom.min.js') ?>"></script>

<!-- Vectormap -->
<script src="<?= Url::to('@web/vendor/raphael/raphael.min.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/morris/morris.min.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/circle-progress/circle-progress.min.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/chart.js/Chart.bundle.min.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/gaugeJS/dist/gauge.min.js') ?>"></script>

<!--  flot-chart js -->
<script src="<?= Url::to('@web/vendor/flot/jquery.flot.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/flot/jquery.flot.resize.js') ?>"></script>

<!-- Owl Carousel -->
<script src="<?= Url::to('@web/vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>

<!-- Counter Up -->
<script src="<?= Url::to('@web/vendor/jqvmap/js/jquery.vmap.min.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/jqvmap/js/jquery.vmap.usa.js') ?>"></script>
<script src="<?= Url::to('@web/vendor/jquery.counterup/jquery.counterup.min.js') ?>"></script>
<script src="<?= Url::to('@web/js/dashboard/dashboard-1.js') ?>"></script>


