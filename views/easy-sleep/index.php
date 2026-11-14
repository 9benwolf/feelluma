<?php

/** @var yii\web\View $this */

$this->title = 'LUMA Gummies | Feelluma';

$this->params['showNavbar'] = false;

$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<?= $this->render('/partials/easy-sleep/nav.php') ?>
<div class="">

    <?= $this->render('/partials/easy-sleep/section1') ?>
    <?= $this->render('/partials/easy-sleep/section2') ?>
    <?= $this->render('/partials/easy-sleep/section3') ?>
    <?= $this->render('/partials/easy-sleep/section4') ?>
    <?= $this->render('/partials/easy-sleep/section5') ?>
    <?= $this->render('/partials/easy-sleep/section6') ?>

</div>


<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>