<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$session = Yii::$app->session;
$next_page = '/easy-sleep/thankyou';
$next_page_no = '/easy-sleep/thankyou-no';
$payment_method  = 'credit_card';
$auto_rebill_day = '28';
$previous_order  = FALSE;
$product_id = 'upsell_neurospark'; // see params.php -> product.php
$product = params($product_id);

if (isset($_SESSION['previous_order'])) {
    $previous_order = $_SESSION['previous_order'];
}

$this->title = 'LUMA Gummies | Upsell';

$this->params['showNavbar'] = false;

?>

<?= $this->render('/partials/easy-sleep/centered-nav.php') ?>

<?= $this->render('/partials/easy-sleep/upsell/section1') ?>
<?= $this->render('/partials/easy-sleep/upsell/section2') ?>
<?= $this->render('/partials/easy-sleep/upsell/section3') ?>
<?= $this->render('/partials/easy-sleep/upsell/section4') ?>
<?= $this->render('/partials/easy-sleep/upsell/section5') ?>
<?= $this->render('/partials/easy-sleep/upsell/section6') ?>
<?= $this->render('/partials/easy-sleep/upsell/section7') ?>


<section class="bg-[#172554] font-inter text-[#fafafa]">

    <?php
    $form = ActiveForm::begin([
        'id' => 'upsell_form',
        'enableAjaxValidation' => TRUE
    ]);
    ?>

    <input type="hidden" name="next_page" value="<?= $next_page; ?>">

    <div class="container mx-auto max-w-[1305px] py-20 max-xl:px-5">

        <div class="space-y-[54px] max-xl:mx-auto max-xl:max-w-[390px] lg:space-y-0 xl:grid xl:grid-cols-[540px_711px] xl:gap-[54px]">

            <div class="space-y-[6px] text-center xl:hidden">
                <h3 class="text-center font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] xl:text-[48px]">
                    Add NeuroSpark™
                    <br>
                    to Your Stack
                </h3>

                <p class="text-center font-bold leading-[150%] -tracking-[2.5%] xl:text-lg">
                    Unlock The Full Benefit Of Better Sleep
                </p>
            </div>

            <!-- IMAGE -->
            <img src="/images/upsell/sec8img.png"
                alt=""
                class="h-full w-full object-cover xl:h-[540px] xl:w-[540px]">

            <!-- RIGHT SIDE -->
            <div class="flex flex-col justify-between gap-[54px]">

                <div class="space-y-[6px]">
                    <h3 class="hidden text-center font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] xl:block xl:text-[48px]">
                        Add NeuroSpark™ <br> to Your Stack
                    </h3>
                    <p class="hidden text-center font-bold leading-[150%] -tracking-[2.5%] xl:block xl:text-lg">
                        Complete the Female Desire System
                    </p>
                </div>

                <div class="space-y-3 font-normal leading-[150%] -tracking-[2.5%] xl:text-lg">
                    <p>
                        Most people focus only on what happens at night.
                    </p>

                    <p>
                        But the real value of quality sleep is how you feel the next day.
                    </p>

                    <p class="font-bold">
                        NeuroSpark™ helps support:
                    </p>

                    <ul class="space-y-3 font-semibold">
                        <li class="flex gap-x-3">
                            <img width="24" height="24" src="/images/easy-sleep/upsell/check-white.svg" alt="" loading="lazy">
                            <p>
                                Focus & concentration
                            </p>
                        </li>
                        <li class="flex gap-x-3">
                            <img width="24" height="24" src="/images/easy-sleep/upsell/check-white.svg" alt="" loading="lazy">
                            <p>
                                Mental clarity
                            </p>
                        </li>
                        <li class="flex gap-x-3">
                            <img width="24" height="24" src="/images/easy-sleep/upsell/check-white.svg" alt="" loading="lazy">
                            <p>
                                Motivation & productivity
                            </p>
                        </li>
                        <li class="flex gap-x-3">
                            <img width="24" height="24" src="/images/easy-sleep/upsell/check-white.svg" alt="" loading="lazy">
                            <p>
                                Healthy daytime energy
                            </p>
                        </li>
                    </ul>

                    <p>
                        Pair it with Easy Sleep™ to support both sides of the performance equation.
                    </p>

                    <p class="font-bold">
                        Recover deeper. Perform better.
                    </p>
                </div>

                <div class="flex flex-col gap-[32px] xl:items-center">
                    <button id="submitBtn" class="w-full max-w-[390px] rounded-[4px] bg-[#008000] py-2 text-center leading-[150%] -tracking-[2.5%] text-[#FAFAFA] transition-all duration-[0.8s] hover:bg-[#EF4444] xl:max-w-[400px]">
                        COMPLETE MY ORDER <b></b>
                    </button>
                    <div class="w-full rounded-md bg-black p-5">

                        <?= $form->field($model, 'terms', [
                            'errorOptions' => ['class' => 'text-red-600 text-center text-xs mt-2']
                        ])->checkbox([
                            'checked' => true,
                            'class' => 'accent-[#DC2626]',
                            'labelOptions' => ['class' => 'flex gap-[14px] items-center justify-center'],
                            'label' => '<span class="font-poppins ms-1 text-xs">
        Click the checkbox to agree to the 
        <br class="block md:hidden">
        <a class="font-semibold underline" href="' . Url::to(['/terms']) . '">
            Purchase Terms and Conditions.
        </a>
    </span>'
                        ]) ?>

                        <p class="text-center text-lg">
                            Yes, I want to accelerate my results for $49.95
                        </p>
                    </div>
                    <a href="<?= $next_page_no ?>" class="block text-center text-xs leading-[150%] -tracking-[2.5%] text-[#D4D4D8] underline xl:max-w-[257px]">
                        No thanks, I just want a single system approach
                    </a>

                    <p class="text-xs leading-[16px] tracking-[0px] text-[#A1A1AA]">Purchase Terms and Conditions: For your convenience and to maximize your results you will be enrolled in our auto ship program and in 21 days of placing your order we will automatically send you a fresh one-month supply of NeuroSpark™ beginning in 21 days and every one-month thereafter for just $49.95 (free shipping), charged to the card you provide today. You may cancel anytime by emailing contact@feelluma.com or calling 1-888-304-8106. No future commitments, no hassles. Cancel any time.</p>

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

    </div>

    <?php
    ActiveForm::end();
    ?>

</section>

<style>
    /* Remove native checkbox look */
    input[type="checkbox"] {
        appearance: none;
        -webkit-appearance: none;
        width: 18px;
        height: 18px;
        border: 1px solid #999;
        border-radius: 2px;
        /* box can still be slightly rounded if you want */
        position: relative;
        cursor: pointer;
    }

    /* Checked state */
    input[type="checkbox"]:checked {
        background-color: #0000FF;
        border-color: #0000FF;
    }

    /* Custom SHARP checkmark */
    input[type="checkbox"]:checked::after {
        content: "";
        position: absolute;
        left: 5px;
        top: 2px;
        width: 4px;
        height: 9px;
        border: solid black;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
        /* creates a sharp angled check */
    }
</style>

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