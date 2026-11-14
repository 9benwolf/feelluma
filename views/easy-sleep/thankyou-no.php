<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\widgets\Picture;

$basepath = '/images/easy-sleep/thankyou/';
$next_page = '/easy-sleep/thankyou';
$session = Yii::$app->session;
$next_page = '/easy-sleep/thankyou';
$payment_method  = 'credit_card';
$auto_rebill_day = '28';
$previous_order  = FALSE;
$product_id = 'upsell_neurospark'; // see params.php -> product.php
$product = params($product_id);

if (isset($_SESSION['previous_order'])) {
    $previous_order = $_SESSION['previous_order'];
}
$this->title = 'LUMA Gummies | Thank you';

$this->params['showNavbar'] = false;
?>

<?= $this->render('/partials/easy-sleep/centered-nav.php') ?>

<section class="">
    <?php
    $form = ActiveForm::begin([
        'id' => 'upsell_form',
        'enableAjaxValidation' => TRUE
    ]);
    ?>

    <?= $this->render('/partials/easy-sleep/thankyou-no/section1') ?>
    <?= $this->render('/partials/easy-sleep/thankyou-no/section2') ?>
    <?= $this->render('/partials/easy-sleep/thankyou-no/section3') ?>
    <?= $this->render('/partials/easy-sleep/thankyou-no/section4') ?>
    <input type="hidden" name="next_page" value="<?= $next_page; ?>">


    <section class="bg-[#fafafa] font-inter text-[#09090B]">
        <div class="container mx-auto max-w-[1200px] px-5 py-[80px]">
            <div class="space-y-8 rounded-[6px] border border-[#E4E4E7] bg-[#F4F4F5] px-5 py-8 text-sm font-medium leading-[150%] -tracking-[2.5%] text-[#27272A] lg:mx-auto lg:max-w-[745px] lg:px-[32px] lg:py-[54px]">
                <div class="space-y-3">
                    <img src="<?= $basepath ?>final-reminder.svg" alt="">
                    <p class="text-[30px] font-bold leading-[125%] -tracking-[2.5%] text-[#09090B]">Final Reminder</p>
                    <p class="">
                        You made a smart choice—not because Easy Sleep™ is a quick fix, but because quality sleep is one of the most important foundations of overall wellness.
                    </p>
                </div>

                <div>
                    <p class="">Give yourself time.</p>
                    <p class="">Stay consistent.</p>
                </div>

                <p>
                    Let healthy sleep become part of your nightly routine. Night after night, your body has an opportunity to relax, recover, and recharge.
                </p>

                <p class="">We’re excited to be part of your feel-good journey.</p>

                <p class="text-[#52525B]">— The Feelluma Team</p>
            </div>
        </div>
    </section>

    <section class="pb-3 font-inter">
        <div class="mx-auto w-full max-w-[418px] px-1.5 lg:grid lg:max-w-[1300px] lg:grid-cols-[580px_auto] 2xl:px-0">
            <div>
                <picture>
                    <source media="(min-width: 1024px)" width="580" height="960" srcset="<?= $basepath ?>s5img.png">
                    <img width="418" height="340" src="<?= $basepath ?>s5imgmb.png" alt="" class="lg:h-full lg:object-cover">
                </picture>
            </div>

            <div class="space-y-8 bg-[#172554] px-5 py-8 text-white lg:px-8 lg:py-20">
                <div class="space-y-3 lg:px-5">
                    <h2 class="font-pop text-3xl font-bold -tracking-[0.75px]">
                        Why LUMA Hits Different
                    </h2>

                    <p class="text-sm -tracking-[0.35px]">
                        Easy Sleep™ helps support relaxation, deep restorative sleep, and overnight recovery. But feeling your best isn't just about what happens at night.
                    </p>
                </div>

                <div class="space-y-6 text-sm -tracking-[0.35px] lg:px-5">
                    <p>
                        The real goal is how you feel the next day.
                    </p>

                    <p>
                        Mental clarity, focus, motivation, and productivity all depend on the quality of the recovery that happens while you sleep.
                    </p>

                    <p>
                        A better night builds the foundation.
                    </p>

                    <p>
                        A better day is where the benefits show up.
                    </p>
                </div>

                <div class="lg:px-5">
                    <div class="space-y-6 rounded-md border border-[#E4E4E7] bg-[#1E3A8A] p-4">
                        <h3 class="text-sm font-bold -tracking-[0.35px]">
                            Upgrade your Easy Sleep™ routine with NeuroSpark™ to support:
                        </h3>

                        <ul class="space-y-3 -tracking-[0.35px]">
                            <li class="flex items-center gap-x-3">
                                <img width="16" height="16" src="<?= $basepath ?>check-white.svg" alt="" loading="lazy" class="min-w-4">

                                <p>
                                    Mental clarity and focus
                                </p>
                            </li>

                            <li class="flex items-center gap-x-3">
                                <img width="16" height="16" src="<?= $basepath ?>check-white.svg" alt="" loading="lazy" class="min-w-4">

                                <p>
                                    Cognitive performance and concentration
                                </p>
                            </li>

                            <li class="flex items-center gap-x-3">
                                <img width="16" height="16" src="<?= $basepath ?>check-white.svg" alt="" loading="lazy" class="min-w-4">

                                <p>
                                    Healthy motivation and productivity
                                </p>
                            </li>

                            <li class="flex items-center gap-x-3">
                                <img width="16" height="16" src="<?= $basepath ?>check-white.svg" alt="" loading="lazy" class="min-w-4">

                                <p>
                                    Daytime energy and alertness
                                </p>
                            </li>

                            <li class="flex items-center gap-x-3">
                                <img width="16" height="16" src="<?= $basepath ?>check-white.svg" alt="" loading="lazy" class="min-w-4">

                                <p>
                                    A complete recovery and performance routine
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-center">
                    <q class="font-bold">
                        I improved my nights... <br>
                        but I wanted better days too.
                    </q>
                </div>

                <div class="flex justify-center">
                    <button id="submitBtn" class="rounded-[4px] bg-[#008000] hover:bg-[#EF4444] transition-all duration-[0.8s] py-2 text-base leading-[150%] -tracking-[2.5%] px-5 xl:max-w-[564px] block mx-auto">
                        COMPLETE MY ORDER
                    </button>
                </div>
                <div class="bg-black p-5 rounded-md">
                    <?= $form->field($model, 'terms', [
                        'errorOptions' => ['class' => 'text-red-600 text-center text-xs mt-2']
                    ])->checkbox([
                        'checked' => true,
                        'class' => 'accent-[#0000FF]',
                        'labelOptions' => ['class' => 'flex gap-[14px] items-center justify-center'],
                        'label' => '<span class="ms-1 font-poppins text-xs">
                            Click the checkbox to agree to the 
                            <br class="block">
                            <a class="font-semibold underline" href="' . Url::to(['/terms']) . '">
                                Subscription Terms and Conditions.
                            </a>
                        </span>'
                    ]) ?>
                    <p class="text-lg text-center">
                        Yes, I want to accelerate my results for $49.95
                    </p>
                </div>

                <div class="text-center">
                    <a href="<?= $next_page ?>" class="text-xs text-[#D4D4D8] underline">
                        No thanks, I just want a single system approach
                    </a>
                </div>

                <div class="lg:px-5">
                    <p class="text-xs text-[#A1A1AA]">
                        <strong>Purchase Terms and Conditions:</strong> For your convenience and to maximize your results you will be enrolled in our auto ship program and in 21 days of placing your order we will automatically send you a fresh one-month supply of NeuroSpark™ beginning in 21 days and every one-month thereafter for just $49.95 (free shipping), charged to the card you provide today. You may cancel anytime by emailing contact@feelluma.com or calling 1-888-304-8106. No future commitments, no hassles. Cancel any time.
                    </p>
                    <div class="text-center">
                        <?php

                        echo $form->field($model, 'previous_order_id')
                            ->hiddenInput(['value' => isset($previous_order['id']) ? $previous_order['id'] : ''])
                            ->label(FALSE);
                        echo $form->field($model, 'product_id')->hiddenInput(['value' => $product_id])->label(FALSE);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    ActiveForm::end();
    ?>
</section>

<?php
echo Yii::$app->view->renderFile('@app/views/components/orderModal.php');

$this->registerJsFile(Url::to(['/js/order.js']), ['depends' => 'yii\web\JqueryAsset']);

$upsell_process = Url::to(['/order/upsell-process']);
$this->registerJs(
    <<<JS

$(function() {
  make_order('#upsell_form', '#submitBtn', "$upsell_process");
})

JS
)
?>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>