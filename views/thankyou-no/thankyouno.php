<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\widgets\Picture;

$basepath = 'images/thankyou/';
$next_page = '/thankyou';
$session = Yii::$app->session;
$next_page = '/thankyou';
$payment_method  = 'credit_card';
$auto_rebill_day = '28';
$previous_order  = FALSE;
$product_id = 'upsell_neurospark'; // see params.php -> product.php
$product = params($product_id);

if (isset($_SESSION['previous_order'])) {
    $previous_order = $_SESSION['previous_order'];
}
$this->title = 'LUMA Gummies | Thank you';

$this->params['showNavbar'] = true;
?>

<section class="">

    <?= $this->render('/partials/thankyou/section1') ?>
    <?= $this->render('/partials/thankyou/section2') ?>
    <?= $this->render('/partials/thankyou/section3') ?>
    <?= $this->render('/partials/thankyou/section4') ?>
    <input type="hidden" name="next_page" value="<?= $next_page; ?>">
    <section class="bg-[#fafafa] font-inter text-[#09090B]">
        <?php
        $form = ActiveForm::begin([
            'id' => 'upsell_form',
            'enableAjaxValidation' => TRUE
        ]);
        ?>
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

<section class="text-[#E4E4E7] font-inter">
    <div class="container mx-auto max-w-[1300px] py-[12px] px-[6px]">
        <div class="flex flex-col xl:flex-row bg-[#172554] max-xl:mx-auto max-xl:max-w-[418px]">
            <div>
                <?= Picture::widget([
                    'src' => $basepath . 's5img.webp',
                    'fallback' => $basepath . 's5img.png',
                    'alt' => 'relative activation chart',
                    'loading' => false,
                    'imgClass' => 'w-full',
                    'pictureClass' => 'lg:max-w-[580px] lg:w-full',
                    'srcMobile' => $basepath . 's5imgmb.webp',
                    'fallbackMobile' => $basepath . 's5imgmb.png'
                ]) ?>
            </div>

            <div class="space-y-8 px-5 xl:px-[52px] py-8 xl:py-20 xl:max-w-[720px]">
                <div class="space-y-3">
                    <p class="font-bold font-pop text-[30px] leading-[125%] -tracking-[2.5%]">Why LUMA Hits Different</p>
                    <p class="text-sm leading-[150%] -tracking-[2.5%]">Naughty Time™ helps support mood, stress balance, and natural desire. But feeling your best is not just about one factor. Confidence, emotional ease, and how connected you feel all play a role too.</p>
                </div>

                <div class="text-sm leading-[150%] -tracking-[2.5%]">
                    <p>A better mood builds the setup.</p>
                    <p>Confidence helps bring it to life.</p>
                </div>

                <div class="space-y-6 text-[#fafafa] bg-[#1E3A8A] p-4 rounded-[6px] border border-[#E4E4E7]">
                    <p class="font-bold text-sm leading-[150%] -tracking-[2.5%]">Upgrade your Naughty Time™ routine with a NeuroSpark™ to support:</p>
                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/white-check.svg" alt="white-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Desire and libido signaling</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/white-check.svg" alt="white-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Mood and dopamine activity</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/white-check.svg" alt="white-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Sensory nerve responsiveness</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/white-check.svg" alt="white-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Circulatory arousal support</p>
                        </div>
                    </div>
                </div>

                <div class="text-center font-bold text-base leading-[150%] -tracking-[2.5%]">
                    <p>“I worked on my mood...</p>
                    <p>but not the full experience.”</p>
                </div>

                <button id="submitBtn" class="rounded-[4px] bg-[#008000] hover:bg-[#EF4444] transition-all duration-[0.8s] py-2 text-base leading-[150%] -tracking-[2.5%] px-5 xl:max-w-[564px] block mx-auto">
                    COMPLETE MY ORDER
                </button>

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
                <a href="<?= $next_page ?>" class="underline block text-center text-xs xl:max-w-[257px] leading-[150%] -tracking-[2.5%] text-[#D4D4D8] xl:mx-auto">No thanks, I just want a single system approach</a>

                <p class="text-[#A1A1AA] text-xs leading-[16px] tracking-[0px] pr-1">Purchase Terms and Conditions: For your convenience and to maximize your results you will be enrolled in our auto ship program and in 21 days of placing your order we will automatically send you a fresh one-month supply of NeuroSpark™ beginning in 21 days and every one-month thereafter for just $49.95 (free shipping), charged to the card you provide today. You may cancel anytime by emailing contact@feelluma.com or calling 1-888-304-8106. No future commitments, no hassles. Cancel any time.</p>

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