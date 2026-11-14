<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\widgets\Picture;

$basepath = '/images/easy-sleep/thankyou/';

$this->title = 'LUMA Gummies | Thank you';

$this->params['showNavbar'] = false;
?>

<?= $this->render('/partials/easy-sleep/centered-nav.php') ?>

<section class="">

    <?= $this->render('/partials/easy-sleep/thankyou/section1') ?>
    <?= $this->render('/partials/easy-sleep/thankyou/section2') ?>
    <?= $this->render('/partials/easy-sleep/thankyou/section3') ?>
    <?= $this->render('/partials/easy-sleep/thankyou/section4') ?>

    <section class="bg-[#fafafa] font-inter text-[#09090B]">
        <div class="container mx-auto max-w-[1200px] px-5 py-[80px]">
            <div class="space-y-8 rounded-[6px] border border-[#E4E4E7] bg-[#F4F4F5] px-5 py-8 text-sm font-medium leading-[150%] -tracking-[2.5%] text-[#27272A] lg:mx-auto lg:max-w-[745px] lg:px-[32px] lg:py-[54px]">
                <div class="space-y-3">
                    <img src="<?= $basepath ?>final-reminder.svg" alt="">
                    <p class="text-[30px] font-bold leading-[125%] -tracking-[2.5%] text-[#09090B]">Final Reminder</p>
                    <p class="">You made a smart choice—not because Easy Sleep™ is a quick fix, but because quality sleep is one of the most important foundations of overall wellness.</p>
                </div>

                <div>
                    <p class="">Give yourself time.</p>
                    <p class="">Stay Consistent.</p>
                </div>

                <p>
                    Let healthy sleep become part of your nightly routine. Night after night, your body has an opportunity to relax, recover, and recharge.
                </p>

                <p class="">We're excited to be part of your recovery journey.</p>

                <p class="text-[#52525B]">— The Feelluma Team</p>
            </div>
        </div>
    </section>

</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>