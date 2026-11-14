<?php

/** @var yii\web\View $this */

$this->title = 'wow page title';
?>
<div class="min-h-[calc(100vh-120px)]">
    <p>FILE LOCATION: /views/sample/landing.php </p>
    <?= $this->render('/components/sample/section1') ?>
    <?= $this->render('/components/sample/section2') ?>
    <?= $this->render('/components/sample/section3') ?>
    <?= $this->render('/components/sample/section4') ?>
</div>


<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('@views/sample/sample-custom-footer') ?>
<?php $this->endBlock(); ?>