<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\widgets\Picture;

$basepath = 'images/thankyou/';

$this->title = 'LUMA Gummies | Thank you';

$this->params['showNavbar'] = true;
?>

<section class="">

    <?= $this->render('/partials/thankyou/section1') ?>
    <?= $this->render('/partials/thankyou/section2') ?>
    <?= $this->render('/partials/thankyou/section3') ?>
    <?= $this->render('/partials/thankyou/section4') ?>

    <section class="bg-[#fafafa] font-inter text-[#09090B]">
        <div class="container max-w-[1200px] mx-auto py-[80px] px-5">
            <div class="bg-[#E4E4E7] px-5 py-8 space-y-8 text-[#27272A] text-sm font-medium leading-[150%] -tracking-[2.5%] lg:max-w-[745px] lg:mx-auto rounded-[6px] lg:py-[54px] lg:px-[32px] border border-[#E4E4E7]">
                <div class="space-y-3">
                    <img src="<?= $basepath ?>final-reminder.svg" alt="">
                    <p class="text-[#09090B] font-bold leading-[125%] -tracking-[2.5%] text-[30px]">Final Reminder</p>
                    <p class="">You made a smart choice, not because Naughty Time™ is trendy, but because it is built for steady daily use.</p>
                </div>

                <div>
                    <p class="">Take it every day.</p>
                    <p class="">Give it time.</p>
                    <p class="">Let the benefits build as part of your routine.</p>
                </div>

                <p class="">We’re excited to be part of your feel-good journey.</p>

                <p class="text-[#52525B]">— The Feelluma Team</p>
            </div>
        </div>
    </section>

</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>