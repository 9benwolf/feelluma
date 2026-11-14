<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\widgets\Picture;

$basepath = '/images/super-calm/thankyou/';

$this->title = 'LUMA Gummies | Thank you';

$this->params['showNavbar'] = false;
?>

<?= $this->render('/partials/super-calm/centered-nav.php') ?>

<section class="">

    <?= $this->render('/partials/super-calm/thankyou/section1') ?>
    <?= $this->render('/partials/super-calm/thankyou/section2') ?>
    <?= $this->render('/partials/super-calm/thankyou/section3') ?>
    <?= $this->render('/partials/super-calm/thankyou/section4') ?>

    <section class="font-inter text-[#09090B]">
        <div class="container mx-auto max-w-[1200px] px-5 py-[80px]">
            <div class="space-y-8 rounded-[6px] border border-[#E4E4E7] bg-[#F4F4F5] px-5 py-8 text-sm font-medium leading-[150%] -tracking-[2.5%] text-[#27272A] lg:mx-auto lg:max-w-[745px] lg:px-[32px] lg:py-[54px]">
                <div class="space-y-3">
                    <img src="<?= $basepath ?>final-reminder.svg" alt="">
                    <p class="text-[30px] font-bold leading-[125%] -tracking-[2.5%] text-[#09090B]">Final Reminder</p>
                    <p class="">
                        You made a smart choice, not because Super Calm™ is trendy, but because it is built for steady daily use.
                    </p>
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