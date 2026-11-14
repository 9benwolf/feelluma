<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$session = Yii::$app->session;
$next_page = '/thankyou';
$payment_method  = 'credit_card';
$auto_rebill_day = '28';
$previous_order  = FALSE;
$product_id = 'upsell_neurospark'; // see params.php -> product.php
$product = params($product_id);
?>

<section class="font-inter text-[#E4E4E7] bg-[#172554]">

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

            <!-- IMAGE -->
            <img src="/images/upsell/sec8img.png"
                alt=""
                class="w-full h-full xl:w-[540px] xl:h-[540px] object-cover">

            <!-- RIGHT SIDE -->
            <div class="xl:h-[487px] flex flex-col justify-between">

                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] xl:text-[48px] leading-[125%] -tracking-[2.5%] font-bold">
                        Add NeuroSpark™ to Your Stack
                    </h3>
                    <p class="leading-[150%] -tracking-[2.5%] font-bold xl:text-lg">
                        Complete the Female Desire System
                    </p>
                </div>

                <div class="space-y-3 leading-[150%] -tracking-[2.5%] xl:text-lg">
                    <p>Upgrade your <b>Naughty Time™</b> protocol with targeted neural activation and sensory pathway support.</p>
                    <p>When desire pathways are supported, the next step is translating that signal into <b>heightened sensitivity, excitement, and physical responsiveness.</b></p>
                    <p><b>NeuroSpark™</b> helps activate the neural pathways that convert desire into <b>pleasure signaling and sensory amplification.</b></p>
                </div>

                <?= $form->field(
                    $model,
                    'terms'
                )
                    ->checkbox([
                        'checked' => TRUE,
                        'labelOptions' => ['class' => 'flex items-center justify-center'],
                        'label' => '<span class="ms-1 font-poppins text-xs">Click the checkbox to agree to the <br class="block md:hidden"><a class="font-semibold text-blue-600 underline" href="' . Url::to(['/terms']) . '">Subscription Terms and Conditions.</a></span>'
                    ]) ?>

                <div class="flex flex-col gap-[54px] xl:flex-row xl:items-center">
                    <button id="submitBtn" class="bg-[#B91C1C] text-[#FAFAFA] text-center leading-[150%] -tracking-[2.5%] py-2 w-full max-w-[390px] xl:max-w-[400px]">
                        UPGRADE TO THE COMPLETE FEMALE DESIRE PROTOCOL FOR <b>$49.95</b>
                    </button>

                    <div class="text-center">
                        <?php

                        echo $form->field($model, 'previous_order_id')
                            ->hiddenInput(['value' => isset($previous_order['id']) ? $previous_order['id'] : ''])
                            ->label(FALSE);
                        echo $form->field($model, 'product_id')->hiddenInput(['value' => $product_id])->label(FALSE);;

                        ?>
                    </div>

                    <a href="<?= $next_page ?>" class="underline block text-center text-xs xl:max-w-[257px] leading-[150%] -tracking-[2.5%]">
                        No thanks, I just want a single system approach
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>