<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$session = Yii::$app->session;
$next_page = '/easy-sleep/thankyou';
$payment_method  = 'credit_card';
$auto_rebill_day = '28';
$previous_order  = FALSE;
$product_id = 'upsell_neurospark'; // see params.php -> product.php
$product = params($product_id);
?>

<section class="bg-[#172554] font-inter text-[#E4E4E7]">

    <?php
    $form = ActiveForm::begin([
        'id' => 'upsell_form',
        'enableAjaxValidation' => TRUE
    ]);
    ?>

    <input type="hidden" name="next_page" value="<?= $next_page; ?>">

    <div class="container mx-auto max-w-[1305px] py-20 max-xl:px-5">

        <div class="space-y-[54px] max-xl:mx-auto max-xl:max-w-[390px] lg:space-y-0 xl:grid xl:grid-cols-[540px_711px] xl:gap-[54px]">

            <!-- IMAGE -->
            <img src="images/upsell/sec8img.png"
                alt=""
                class="h-full w-full object-cover xl:h-[540px] xl:w-[540px]">

            <!-- RIGHT SIDE -->
            <div class="flex flex-col justify-between xl:h-[487px]">

                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] xl:text-[48px]">
                        Add NeuroSpark™ to Your Stack
                    </h3>
                    <p class="font-bold leading-[150%] -tracking-[2.5%] xl:text-lg">
                        Unlock The Full Benefit Of Better Sleep
                    </p>
                </div>

                <div class="space-y-3 leading-[150%] -tracking-[2.5%] xl:text-lg">
                    <p>
                        Most people focus only on what happens at night.
                    </p>

                    <p>
                        But the real value of quality sleep is how you feel the next day.
                    </p>

                    <p>
                        NeuroSpark™ helps support:
                    </p>

                    <ul class="space-y-3 font-semibold">
                        <li class="flex gap-x-3">
                            Focus & concentration
                        </li>
                    </ul>
                </div>

                <?= $form->field(
                    $model,
                    'terms'
                )
                    ->checkbox([
                        'checked' => TRUE,
                        'labelOptions' => ['class' => 'flex items-center justify-center'],
                        'label' => '<span class="font-poppins ms-1 text-xs">Click the checkbox to agree to the <br class="block md:hidden"><a class="font-semibold text-blue-600 underline" href="' . Url::to(['/terms']) . '">Subscription Terms and Conditions.</a></span>'
                    ]) ?>

                <div class="flex flex-col gap-[54px] xl:flex-row xl:items-center">
                    <button id="submitBtn" class="w-full max-w-[390px] bg-[#B91C1C] py-2 text-center leading-[150%] -tracking-[2.5%] text-[#FAFAFA] xl:max-w-[400px]">
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

                    <a href="<?= $next_page ?>" class="block text-center text-xs leading-[150%] -tracking-[2.5%] underline xl:max-w-[257px]">
                        No thanks, I just want a single system approach
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>