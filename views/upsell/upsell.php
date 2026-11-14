<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$session = Yii::$app->session;
$next_page = '/thankyou';
$next_page_no = '/thankyou-no';
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

<?= $this->render('/partials/upsell-nav.php') ?>

<?= $this->render('/partials/upsell/section1') ?>
<?= $this->render('/partials/upsell/section2') ?>
<?= $this->render('/partials/upsell/section3') ?>
<?= $this->render('/partials/upsell/section4') ?>
<?= $this->render('/partials/upsell/section5') ?>
<?= $this->render('/partials/upsell/section6') ?>
<?= $this->render('/partials/upsell/section7') ?>

<section class="font-inter text-[#fafafa] bg-[#172554]">

    <?php
    $form = ActiveForm::begin([
        'id' => 'upsell_form',
        'enableAjaxValidation' => TRUE
    ]);
    ?>

    <input type="hidden" name="next_page" value="<?= $next_page; ?>">

    <div class="container max-w-[1305px] mx-auto py-20 max-xl:px-5">

        <div class="space-y-[54px] max-xl:mx-auto max-xl:max-w-[390px] 
                    xl:grid xl:grid-cols-[540px_711px] xl:gap-[54px] lg:space-y-0">

            <div class="space-y-[6px] xl:hidden text-center">
                <h3 class="font-pop text-[30px] xl:text-[48px] leading-[125%] -tracking-[2.5%] font-bold">
                    Add NeuroSpark™<br class="sm:hidden"> to Your Stack
                </h3>

                <p class="leading-[150%] -tracking-[2.5%] font-bold xl:text-lg">
                    Complete the Female Desire System
                </p>
            </div>

            <!-- IMAGE -->
            <img src="/images/upsell/sec8img.png"
                alt=""
                class="w-full h-full xl:w-[540px] xl:h-[540px] object-cover">

            <!-- RIGHT SIDE -->
            <div class="flex flex-col justify-between gap-[54px]">

                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] xl:text-[48px] leading-[125%] -tracking-[2.5%] font-bold hidden xl:block">
                        Add NeuroSpark™ to Your Stack
                    </h3>
                    <p class="leading-[150%] -tracking-[2.5%] font-bold xl:text-lg hidden xl:block">
                        Complete the Female Desire System
                    </p>
                </div>

                <div class="space-y-3 leading-[150%] -tracking-[2.5%] xl:text-lg font-normal">
                    <p>Upgrade your <b>Naughty Time™</b> protocol with targeted neural activation and sensory pathway support.</p>
                    <p>When desire pathways are supported, the next step is translating that signal into <b>heightened sensitivity, excitement, and physical responsiveness.</b></p>
                    <p><b>NeuroSpark™</b> helps activate the neural pathways that convert desire into <b>pleasure signaling and sensory amplification.</b></p>
                </div>

                <div class="flex flex-col gap-[32px] xl:items-center">
                    <button id="submitBtn" class="bg-[#008000] hover:bg-[#EF4444] transition-all duration-[0.8s] text-[#FAFAFA] text-center leading-[150%] -tracking-[2.5%] py-2 w-full max-w-[390px] xl:max-w-[400px] rounded-[4px]">
                        COMPLETE MY ORDER <b></b>
                    </button>
                    <div class="bg-black p-5 rounded-md">

                        <?= $form->field($model, 'terms', [
                            'errorOptions' => ['class' => 'text-red-600 text-center text-xs mt-2']
                        ])->checkbox([
                            'checked' => true,
                            'class' => 'accent-[#DC2626]',
                            'labelOptions' => ['class' => 'flex gap-[14px] items-center justify-center'],
                            'label' => '<span class="ms-1 font-poppins text-xs">
        Click the checkbox to agree to the 
        <br class="block md:hidden">
        <a class="font-semibold underline" href="' . Url::to(['/terms']) . '">
            Purchase Terms and Conditions.
        </a>
    </span>'
                        ]) ?>

                        <p class="text-lg text-center">
                            Yes, I want to accelerate my results for $49.95
                        </p>
                    </div>
                    <a href="<?= $next_page_no ?>" class="underline block text-center text-xs xl:max-w-[257px] leading-[150%] -tracking-[2.5%] text-[#D4D4D8]">
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