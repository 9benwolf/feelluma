<?php

/** @var yii\web\View $this */

$this->title = 'LUMA Gummies | Feelluma';

$this->params['showNavbar'] = false;

$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<?= $this->render('/partials/super-calm/nav.php') ?>
<div class="">

    <?= $this->render('/partials/super-calm/section1') ?>
    <?= $this->render('/partials/super-calm/section2') ?>
    <?= $this->render('/partials/super-calm/section3') ?>
    <?= $this->render('/partials/super-calm/section4') ?>
    <?= $this->render('/partials/super-calm/section5') ?>
    <?= $this->render('/partials/super-calm/section6') ?>

</div>


<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>