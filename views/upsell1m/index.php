<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$next_page = '/thankyou';
?>
<?= $this->render('/partials/upsell1m-nav.php') ?>
<?= $this->render('/partials/upsell1m/section1') ?>
<?= $this->render('/partials/upsell1m/section2') ?>
<?= $this->render('/partials/upsell/section3') ?>
<?= $this->render('/partials/upsell/section4') ?>
<?= $this->render('/partials/upsell/section5') ?>
<?= $this->render('/partials/upsell/section6') ?>
<?= $this->render('/partials/upsell1m/section7') ?>
<?= $this->render('/partials/upsell1m/section8') ?>

<section class="py-[80px] lg:pb-[150px] font-pop">
  <div class="max-w-[902px] mx-auto">

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

    <div class="text-center px-4 mb-[80px]">
      <h2 class="text-[#212529] text-xl font-semibold lg:font-bold mb-[60px] lg:text-[32px] lg:mb-[32px] leading-snug">Neurospark is normally $99.95. <br><span class="text-[#B91C1C]">Save 50%</span> when you add to <br class="sm:hidden">your order today.</h2>

      <div class="relative max-w-[640px] mx-auto">
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

    <div class="space-y-10 lg:space-y-20 px-5 lg:px-0">
      <div class="" id="order_step_one">
        <h2 class="text-center mb-[55px] font-semibold text-[28px] uppercase lg:text-[36px]">Start Your Order Below</h2>

        <div class="bg-[#E4E4E4] mb-[55px]">
          <div class="bg-black text-white px-5 py-2 lg:px-[55px] lg:py-3">
            <h4 class="text-2xl font-semibold uppercase">Step 1</h4>
          </div>
          <div class="px-5 pt-[20px] pb-[60px] lg:px-[55px]">
            <h5 class="mb-5 uppercase font-medium lg:text-lg">SHIPPING INFORMATION</h5>
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

        <div class="max-w-[350px] mx-auto">
          <button id="step_one_button" type="button" class="font-medium w-full flex flex-col items-center justify-center px-5 py-3.5 cursor-pointer rounded-xl bg-[linear-gradient(180deg,#05A936_-9.33%,#14E453_38.74%,#19E958_48.33%,#12B342_77.17%,#004113_106%)] text-white gap-1 text-shadow-lg font-bebas uppercase ">
            <span class="text-[45px] leading-none pt-1">Continue to Step 2</span>
          </button>
        </div>
      </div>

      <input type="hidden" name="OrderForm[payment_processor]" value="credit_card">
      <input type="hidden" name="OrderForm[creditCardType]" id="cc_type">

      <div class="" id="order_step_two">
        <div class="bg-[#E4E4E4] mb-[55px]">
          <div class="bg-black text-white px-5 py-2 lg:px-[55px] lg:py-3">
            <h4 class="text-2xl font-semibold uppercase">Step 2</h4>
          </div>
          <div class="px-5 pt-[20px] pb-[60px] lg:px-[55px]">
            <div class="flex flex-col md:flex-row md:justify-between gap-3 md:items-center mb-5">
              <h5 class=" uppercase font-medium lg:text-lg">ENTER CREDIT CARD INFORMATION</h5>
              <picture class="block w-full max-w-[105px] flex-none">
                <img src="/images/3cardset.png" width="105" height="19" class="" alt="">
              </picture>
            </div>

            <div class="grid gap-6 grid-cols-2 md:grid-cols-3">
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
          <div class="max-w-[450px] mx-auto mb-[45px]">
            <button id="step_two_button" type="submit" class="font-medium w-full flex flex-col items-center justify-center px-5 py-3.5 cursor-pointer rounded-xl bg-[linear-gradient(180deg,#05A936_-9.33%,#14E453_38.74%,#19E958_48.33%,#12B342_77.17%,#004113_106%)] text-white gap-1 text-shadow-lg font-bebas uppercase ">
              <span class="text-[45px] leading-none pt-1">Complete My Order</span>
            </button>
          </div>

          <div class="px-5 relative mb-[45px]">
            <div class="mx-auto md:max-w-110">
              <?= $form->field($model, 'terms', ['errorOptions' => ['class' => 'text-center']])->checkbox([
                'checked' => TRUE,
                'labelOptions' => ['class' => 'flex items-center justify-center cursor-pointer [&>input]:size-5 [&>input]:flex-none [&>input]:accent-[#007BFF] [&>input]:rounded-lg'],
                'label' => '<span class="font-normal ms-3.5 text-xs group-[.has-error]:text-red-600! group-[.has-error]:*:text-red-600! text-black">Click the checkbox to agree to the <a class=" underline text-[#0095FF]" href="' . Url::to(['/terms']) . '">Purchase Terms and Conditions.</a></span>'
              ]) ?>
            </div>
          </div>
          <div class="space-y-3 text-sm lg:text-base leading-relaxed">
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