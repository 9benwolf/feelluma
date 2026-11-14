<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$next_page = '/easy-sleep/thankyou';
?>
<?= $this->render('/partials/easy-sleep/centered-nav.php') ?>

<?= $this->render('/partials/easy-sleep/upsell1m/section1') ?>
<?= $this->render('/partials/easy-sleep/upsell/section2') ?>
<?= $this->render('/partials/easy-sleep/upsell/section3') ?>
<?= $this->render('/partials/easy-sleep/upsell/section4') ?>
<?= $this->render('/partials/easy-sleep/upsell/section5') ?>
<?= $this->render('/partials/easy-sleep/upsell/section6') ?>
<?= $this->render('/partials/easy-sleep/upsell/section7') ?>

<section class="bg-[#172554] font-inter text-[#fafafa]">
    <div class="container mx-auto max-w-[1305px] py-20 max-xl:px-5">
        <div class="space-y-[54px] max-xl:mx-auto max-xl:max-w-[390px] lg:space-y-0 xl:grid xl:grid-cols-[540px_711px] xl:gap-[54px]">

            <div class="space-y-[6px] text-center xl:hidden">
                <h3 class="text-center font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] xl:text-[48px]">
                    Add NeuroSpark™
                    <br>
                    to Your Stack
                </h3>

                <p class="text-center font-bold leading-[150%] -tracking-[2.5%] xl:text-lg">
                    Complete the Female Desire System
                </p>
            </div>

            <!-- IMAGE -->
            <img src="/images/upsell/sec8img.png"
                alt=""
                class="h-full w-full object-cover xl:h-[540px] xl:w-[540px]">

            <!-- RIGHT SIDE -->
            <div class="flex flex-col justify-center gap-[54px]">

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
            </div>
        </div>
    </div>
</section>

<section class="py-[80px] font-pop lg:pb-[150px]">
    <div class="mx-auto max-w-[902px]">

        <?php $form = ActiveForm::begin([
            'id' => 'form_order',
            'enableAjaxValidation' => TRUE,
            'options' => ['class' => ''],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'text-base mb-1 inline-block font-light'],
                'inputOptions' => [
                    'class' => '!text-sm block w-full bg-white !p-4 h-12 outline-none focus:border-[#38BDF8] group-[.has-error]:border-red-600 group-[.has-success]:border-green-600'
                ],
                'options' => [
                    'class' => 'group relative'
                ],
                'errorOptions' => ['class' => 'absolute text-xs text-red-600 w-full pt-1']
            ]
        ]); ?>
        <?= $form->field($model, 'keyword')->hiddenInput(['value' => ($_GET['keyword']) ?? ''])->label(FALSE) ?>
        <?= $form->field($model, 'adgroupid')->hiddenInput(['value' => ($_GET['adgroupid']) ?? ''])->label(FALSE) ?>
        <?= $form->field($model, 'utm_campaign')->hiddenInput(['value' => ($_GET['utm_campaign']) ?? ''])->label(FALSE) ?>
        <?= $form->field($model, 'utm_content')->hiddenInput(['value' => (isset($_GET['utm_content'])) ? $_GET['utm_content'] . '_UPSELL1M' : 'UPSELL1M'])->label(FALSE) ?>
        <?= $form->field($model, 'page')->hiddenInput(['value' => '/upsell1m'])->label(FALSE) ?>
        <input type="hidden" name="next_page" value="<?= $next_page; ?>">

        <div class="mb-[80px] px-4 text-center">
            <h2 class="mb-[60px] text-xl font-semibold leading-snug text-[#212529] lg:mb-[32px] lg:text-[32px] lg:font-bold">Neurospark is normally $99.95. <br><span class="text-[#B91C1C]">Save 50%</span> when you add to <br class="sm:hidden">your order today.</h2>

            <div class="relative mx-auto max-w-[640px]">
                <label for="product1" class="group cursor-pointer">
                    <input
                        type="radio"
                        id="product1"
                        name="product_id"
                        class="hidden"
                        value="upsell_neurospark"
                        checked="true">
                    <picture class="block w-full">
                        <img src="/images/upsell1m/product-active.jpg" width="640" height="291" class="" alt="">
                    </picture>
                </label>
            </div>
        </div>

        <div class="space-y-10 px-5 lg:space-y-20 lg:px-0">
            <div class="" id="order_step_one">
                <h2 class="mb-[55px] text-center text-[28px] font-semibold uppercase lg:text-[36px]">Start Your Order Below</h2>

                <div class="mb-[55px] bg-[#E4E4E4]">
                    <div class="bg-black px-5 py-2 text-white lg:px-[55px] lg:py-3">
                        <h4 class="text-2xl font-semibold uppercase">Step 1</h4>
                    </div>
                    <div class="px-5 pb-[60px] pt-[20px] lg:px-[55px]">
                        <h5 class="mb-5 font-medium uppercase lg:text-lg">SHIPPING INFORMATION</h5>
                        <div class="grid gap-6 md:grid-cols-4">
                            <div class="md:col-span-2">
                                <?= $form->field($model, 'firstName', ['inputOptions' => ['placeholder' => 'First Name', 'value' => $lead['firstName'] ?? '']])->label(false); ?>
                            </div>
                            <div class="md:col-span-2">
                                <?= $form->field($model, 'lastName', ['inputOptions' => ['placeholder' => 'Last Name', 'value' => $lead['lastName'] ?? '']])->label(false); ?>
                            </div>

                            <div class="md:col-span-2">
                                <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => 'Email Address', 'value' => $lead['email'] ?? '']])->textInput()->input('email', ['maxlength' => true])->label(false); ?>
                            </div>
                            <div class="md:col-span-2">
                                <?= $form->field($model, 'phone', ['inputOptions' => ['placeholder' => 'Phone Number', 'value' => $lead['phone'] ?? '']])->textInput()->input('tel', ['maxlength' => true])->label(false); ?>
                            </div>

                            <div class="md:col-span-2">
                                <?= $form->field($model, 'shippingAddress1', ['inputOptions' => ['placeholder' => 'Shipping Address', 'value' => $lead['shippingAddress1'] ?? '']])->label(false); ?>
                            </div>
                            <div class="md:col-span-2">
                                <?= $form->field($model, 'shippingCity', ['inputOptions' => ['placeholder' => 'Shipping City', 'value' => $lead['shippingCity'] ?? '']])->label(false); ?>
                            </div>

                            <div class="md:col-span-1">
                                <?php
                                $countries = $model->getCountries();
                                unset($countries['CA']); // remove Canada
                                ?>
                                <?= $form->field($model, 'shippingCountry')->dropDownList($countries, ['onchange' => 'getState(this.value, "[name=\'OrderForm[shippingState]\']")'])->label(false);
                                ?>
                            </div>
                            <div class="md:col-span-1">
                                <?php $model->shippingState = $lead['shippingState'] ?? ''; ?>
                                <?= $form->field($model, 'shippingState')->dropDownList($model->getStates(), ['prompt' => 'Select State/Province'])->label(false); ?>
                            </div>
                            <div class="md:col-span-2">
                                <?= $form->field($model, 'shippingZip', ['inputOptions' => ['placeholder' => 'Shipping Zip', 'value' => $lead['shippingZip'] ?? '']])->textInput()->input('tel', ['maxlength' => true])->label(false); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto max-w-[350px]">
                    <button id="step_one_button" type="button" class="text-shadow-lg flex w-full cursor-pointer flex-col items-center justify-center gap-1 rounded-xl bg-[linear-gradient(180deg,#05A936_-9.33%,#14E453_38.74%,#19E958_48.33%,#12B342_77.17%,#004113_106%)] px-5 py-3.5 font-bebas font-medium uppercase text-white">
                        <span class="pt-1 text-[45px] leading-none">Continue to Step 2</span>
                    </button>
                </div>
            </div>

            <input type="hidden" name="OrderForm[payment_processor]" value="credit_card">
            <input type="hidden" name="OrderForm[creditCardType]" id="cc_type">

            <div class="" id="order_step_two">
                <div class="mb-[55px] bg-[#E4E4E4]">
                    <div class="bg-black px-5 py-2 text-white lg:px-[55px] lg:py-3">
                        <h4 class="text-2xl font-semibold uppercase">Step 2</h4>
                    </div>
                    <div class="px-5 pb-[60px] pt-[20px] lg:px-[55px]">
                        <div class="mb-5 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                            <h5 class="font-medium uppercase lg:text-lg">ENTER CREDIT CARD INFORMATION</h5>
                            <picture class="block w-full max-w-[105px] flex-none">
                                <img src="images/3cardset.png" width="105" height="19" class="" alt="">
                            </picture>
                        </div>

                        <div class="grid grid-cols-2 gap-6 md:grid-cols-3">
                            <div class="col-span-2 md:col-span-3">
                                <?= $form->field($model, 'cardNumber', ['inputOptions' => ['placeholder' => 'Card Number']])->input('tel', ['maxlength' => TRUE])->label(false); ?>
                            </div>
                            <div class="">
                                <?= $form->field($model, 'fields_expmonth')->dropDownList($model->getMonths(), ['prompt' => ['text' => 'Month', 'options' => ['disabled' => TRUE, 'selected' => TRUE]], 'onchange' => '$("[name=\'OrderForm[fields_expyear]\']").blur();'])->label(false); ?>
                            </div>
                            <div class="">
                                <?= $form->field($model, 'fields_expyear')->dropDownList($model->getYears(), ['prompt' => ['text' => 'Year', 'options' => ['disabled' => TRUE, 'selected' => TRUE]], 'onchange' => '$("[name=\'OrderForm[fields_expmonth]\']").blur();'])->label(false);  ?>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <?= $form->field($model, 'cvv', ['inputOptions' => ['placeholder' => 'CVV']])->textInput()->input('tel', ['maxlength' => TRUE])->label(false);  ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="mx-auto mb-[45px] max-w-[450px]">
                        <button id="step_two_button" type="submit" class="text-shadow-lg flex w-full cursor-pointer flex-col items-center justify-center gap-1 rounded-xl bg-[linear-gradient(180deg,#05A936_-9.33%,#14E453_38.74%,#19E958_48.33%,#12B342_77.17%,#004113_106%)] px-5 py-3.5 font-bebas font-medium uppercase text-white">
                            <span class="pt-1 text-[45px] leading-none">Complete My Order</span>
                        </button>
                    </div>

                    <div class="relative mb-[45px] px-5">
                        <div class="md:max-w-110 mx-auto">
                            <?= $form->field($model, 'terms', ['errorOptions' => ['class' => 'text-center']])->checkbox([
                                'checked' => TRUE,
                                'labelOptions' => ['class' => 'flex items-center justify-center cursor-pointer [&>input]:size-5 [&>input]:flex-none [&>input]:accent-[#007BFF] [&>input]:rounded-lg'],
                                'label' => '<span class="group-[.has-error]:text-red-600! group-[.has-error]:*:text-red-600! ms-3.5 text-xs font-normal text-black">Click the checkbox to agree to the <a class="text-[#0095FF] underline" href="' . Url::to(['/terms']) . '">Purchase Terms and Conditions.</a></span>'
                            ]) ?>
                        </div>
                    </div>
                    <div class="space-y-3 text-sm leading-relaxed lg:text-base">
                        <p class="text-[#A1A1AA]"><b class="font-semibold">Purchase Terms and Conditions:</b> For your convenience and to maximize your results you will be enrolled in our auto ship program and in 21 days of placing your order we will automatically send you a fresh one-month supply of NeuroSpark™ beginning in 21 days and every one-month thereafter for just $49.95 (free shipping), charged to the card you provide today. You may cancel anytime by emailing contact@feelluma.com or calling 1-888-304-8106. No future commitments, no hassles. Cancel any time.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
<?php
echo Yii::$app->view->renderFile('@app/views/components/orderModal.php');

$this->registerJsFile(
    Url::to(['/js/cleave.js']),
    ['depends' => 'yii\web\JqueryAsset']
);
$this->registerJsFile(
    Url::to(['/js/order.js']),
    ['depends' => 'yii\web\JqueryAsset']
);
$this->registerJs(
    <<<JS
$(document).ready(function(){
  var order_form = $('#form_order');

  make_order("#form_order", "#step_two_button", '/order/make-order');

  $('#order_step_two').hide();
  $('#step_one_button').on('click', function(e){
    e.preventDefault();

    order_form.yiiActiveForm('validateAttribute', 'orderform-firstname');
    order_form.yiiActiveForm('validateAttribute', 'orderform-lastname');
    order_form.yiiActiveForm('validateAttribute', 'orderform-email');
    order_form.yiiActiveForm('validateAttribute', 'orderform-phone');
    order_form.yiiActiveForm('validateAttribute', 'orderform-shippingaddress1');
    order_form.yiiActiveForm('validateAttribute', 'orderform-shippingcity');
    order_form.yiiActiveForm('validateAttribute', 'orderform-shippingcountry');
    order_form.yiiActiveForm('validateAttribute', 'orderform-shippingstate');
    order_form.yiiActiveForm('validateAttribute', 'orderform-shippingzip');

    e.preventDefault();
    
    if (check_form_fields('#order_step_one')) {
      $.when(
        $.post('/order/step-one', order_form.serialize())
      ).done(function() {
        $('#order_step_two').show();
        $('html,body').animate({ scrollTop: $('#order_step_two').offset().top }, 500)
      });
    }
  });

  // Format Credit Card
  var cleave = new Cleave('#orderform-cardnumber', {
    delimiter: '',
    creditCard: true,
    onCreditCardTypeChanged: function (type) {
      $('#cc_type').val('');
      type = type.split("15")[0];

      if (type != 'unknown' && type != 'uatp' && type != 'maestro') {
        type = (type == 'mastercard') ? 'master' : type;
        $('#cc_type').val(type);
      }
    }
  });

  function check_form_fields(form) {
    var checking = 0;

    $.each($(form + " input[aria-required=true], " + form + " select[aria-required=true], " + form + " textarea[aria-required=true]"), function (index) {
      if ($(this).val() == '' || $(this).attr('aria-invalid') === 'true') {
        checking++;
      }
    });

    return (checking == 0) ? true : false;
  }

});
JS
);
?>