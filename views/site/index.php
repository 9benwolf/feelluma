<?php

/** @var yii\web\View $this */

$this->title = 'LUMA Gummies | Feelluma';

$this->params['showNavbar'] = true;

$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<div class="">

    <?= $this->render('/partials/lander/section1') ?>
    <?= $this->render('/partials/lander/section2') ?>
    <?= $this->render('/partials/lander/section3') ?>
    <?= $this->render('/partials/lander/section4') ?>
    <?= $this->render('/partials/lander/section5') ?>
    <?= $this->render('/partials/lander/section6') ?>

</div>


<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>