<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'LUMA Gummies | Order';
$this->params['showNavbar'] = false;

$quantity = $_POST['quantity'] ?? 1;
$productName = '';
$params = Yii::$app->params;
$product_id = $_POST['product_id'] ?? null;
$product = $_POST['product'] ?? null;
$quantity = $_POST['quantity'] ?? 1;
$type = $_POST['type'] ?? 'otp';

$session = Yii::$app->session;
$next_page = '/super-calm/upsell';

$prod_name = $product === 'supercalm_es'
    ? 'Super Calm (Extra Strength)'
    : 'Super Calm (25mg)';

$productImage = $product === 'supercalm_es'
    ? '/images/super-calm/s2/image1.png?v=2.1'
    : '/images/super-calm/s2/image1b.png?v=2.1';

$typeLabel = $type === 'sub'
    ? 'Delivered monthly (save 25%)'
    : 'Delivered once';

$days = 1;
if ($prod_name === 'Super Calm (Extra Strength)') {
    switch ($quantity) {
        case 1:
            $days = 15;
            break;
        case 2:
            $days = 30;
            break;
        case 3:
            $days = 45;
            break;
        case 4:
            $days = 60;
            break;
    }
} else if ($prod_name === 'Super Calm (25mg)') {
    switch ($quantity) {
        case 1:
            $days = 21;
            break;
        case 2:
            $days = 45;
            break;
        case 3:
            $days = 45;
            break;
        case 4:
            $days = 60;
            break;
    }
}

// ✅ Get pricing from params.php
$pricingParams = Yii::$app->params[$product] ?? null;

$subtotal = 0;
if ($pricingParams && isset($pricingParams[$type][$quantity]['amount'])) {
    $subtotal = $pricingParams[$type][$quantity]['amount'];
}

$total = $subtotal; // shipping is free for now

if (empty($product_id)) {
    header("Location: /super-calm/s2");
    exit; // important to stop script execution after redirect
}

//find productname using the id
foreach ($params as $key => $item) {
    if (isset($item['id']) && $item['id'] == $product_id) {
        $productName = $key;
        break;
    }
}

$perDay = ($quantity * 30) / $subtotal;

?>

<?= $this->render('/partials/super-calm/centered-nav.php') ?>

<?php $form = ActiveForm::begin([
    'id' => 'make-order',
    'enableAjaxValidation' => TRUE,
    'options' => [ // e.g., a Tailwind utility class for spacing or background color
        'class' => 'space-y-6 '
    ],
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}", // controls the default template for each input field
        'labelOptions' => ['class' => 'uppercase font-semibold text-sm',], // label options
        'inputOptions' => [ // for example, a common set of Tailwind classes for inputs
            'class' => 'block w-full px-3  bg-white py-2 tracking-tight text-base rounded-sm border border-stone-300',
        ],
        'errorOptions' => ['class' => 'text-sm text-red-600 mt-1',], // error message styling
    ],
]); ?>

<?= $form->field($model, 'keyword')
    ->hiddenInput(['value' => (isset($_GET['keyword'])) ? $_GET['keyword'] : ''])
    ->label(FALSE)
?>
<?= $form->field($model, 'adgroupid')
    ->hiddenInput(['value' => (isset($_GET['adgroupid'])) ? $_GET['adgroupid'] : ''])
    ->label(FALSE)
?>
<?= $form->field($model, 'utm_campaign')
    ->hiddenInput(['value' => (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : ''])
    ->label(FALSE)
?>
<?= $form->field($model, 'utm_content')
    ->hiddenInput([
        'value' => Yii::$app->request->get('utm_content', 'feelluma_order')
    ])
    ->label(false)
?>

<input type="hidden" name="next_page" value="<?= $next_page ?>">
<div class="hidden order-option-selection">
    <div class="container">
        <div id="toggleContent" class="-mx-4 order-option-selection-bottom md:mx-0">
            <div class="py-5 my-5 option-selection">
                <div id="subContent" class="grid items-end max-w-screen-md md:mx-auto">
                    <div class="flex items-start">
                        <div class="mx-auto">
                            <input type="radio"
                                name="product_id"
                                class="btn-check"
                                autocomplete="off"
                                data-pp=""
                                data-amount="<?= number_format($subtotal, 2) ?>"
                                data-name="<?= $productName ?>"
                                data-sub_name="<?= $productName ?>"
                                data-products=""
                                data-product_thumb="<?= $productImage ?>"
                                data-normal_amount="<?= number_format($subtotal, 2) ?>"
                                data-save_amount="<?= number_format($subtotal, 2) ?>"
                                value="<?= $productName ?>"
                                id="product_1"
                                checked>
                            <label class="cursor-pointer btn btn-outline-primary"
                                for="product_1">
                                <img src="https://placehold.co/566x258?text=INACTIVE"
                                    alt=""
                                    class="product_normal">
                                <img src="https://placehold.co/566x258?text=ACTIVE"
                                    alt=""
                                    class="product_selected">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="font-inter text-[#09090B] relative">

    <!-- FULL SCREEN BACKGROUND SPLIT -->
    <div class="absolute inset-0 z-0 hidden lg:flex">
        <div class="w-1/2 bg-[#FAFAFA]"></div> <!-- Left 50% -->
        <div class="w-1/2 bg-[#F4F4F5]"></div> <!-- Right 50% -->
    </div>

    <div class="container mx-auto max-w-[1080px] relative z-10">

        <div id="orderHeader" class="bg-[#E4E4E7] sticky top-0 lg:hidden h-[56px] z-10 flex items-center justify-between px-5 cursor-pointer">
            <div class="flex items-center gap-3">
                <h2>Order Summary</h2>

                <!-- Arrow Icon -->
                <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 transition-transform duration-300"
                    fill="none" viewBox="0 0 24 24" stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </div>

            <p class="font-medium text-base leading-[150%] -tracking-[2.5%]">
                $<?= number_format($subtotal, 2) ?>
            </p>
        </div>

        <!-- Hidden Content -->
        <div id="orderContent" class="hidden py-4 bg-white sticky top-[56px]">
            <div class="px-5 lg:mt-[32px]">
                <div class="flex gap-3 p-4 border border-[#166534] rounded-[6px]">
                    <img src="/images/s2/check-orderpage.svg" alt="green check" class="h-[21px] w-[21px]">

                    <p class="text-sm leading-[150%] -tracking-[2.5%] font-medium">Made in the USA.</p>
                </div>
            </div>

            <div class="p-5 lg:p-[32px] space-y-[32px]">
                <div class="flex items-center justify-between">
                    <div class="flex gap-3">
                        <img src="<?= $productImage ?>" alt="" class="w-[64px] h-[64px]">
                        <div class="space-y-1">
                            <p class="text-sm font-semibold"><?= $prod_name ?></p>
                            <p class="text-xs text-[#27272A]"><?= $typeLabel ?></p>
                            <p class="text-xs text-[#27272A]"><?= $quantity ?> Pack (<?= $quantity * 30 ?> Gummies)</p>
                        </div>
                    </div>
                    <p class="text-sm font-medium">$<?= number_format($subtotal, 2) ?></p>
                </div>

                <div class="space-y-4">
                    <div class="flex justify-between text-xs">
                        <p>Subtotal</p>
                        <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                    </div>

                    <div class="flex justify-between text-xs">
                        <p>Shipping</p>
                        <p class="font-medium">FREE</p>
                    </div>

                    <div class="space-y-[6px]">
                        <div class="flex justify-between">
                            <p>Total</p>
                            <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GRID LAYOUT -->
        <div class="flex flex-col lg:grid lg:grid-cols-[540px_480px] gap-10">

            <!-- LEFT COLUMN -->
            <div class="flex flex-col">

                <!-- Contact -->
                <div class="p-5 lg:p-[32px] space-y-5">
                    <p class="font-medium text-lg leading-[150%] -tracking-[2.5%]">Contact</p>
                    <?= $form->field($model, 'email', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->input('email', ['maxlength' => TRUE])
                        ->textInput([
                            'placeholder' => 'Email',
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>
                </div>

                <!-- Shipping Address -->
                <div class="p-5 lg:p-[32px] space-y-5">
                    <p class="font-medium text-lg leading-[150%] -tracking-[2.5%]">Shipping Address</p>
                    <?= $form->field($model, 'shippingCountry', [
                        'inputOptions' => ['class' => 'col-start-1 row-start-1 appearance-auto cursor-pointer block w-full px-1 md:px-3 bg-white py-2 rounded-sm tracking-tight focus:border-indigo-500 focus:ring-indigo-500 text-base border border-stone-300'],
                        'options'      => ['class' => '']
                    ])
                        ->label('')
                        ->dropDownList(
                            $model->getCountries(),
                            ['onchange' => 'getState(this.value, "[name=\'OrderForm[shippingState]\']")']
                        )
                    ?>

                    <?= $form->field($model, 'firstName', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->textInput([
                            'placeholder' => 'First name',
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>

                    <?= $form->field($model, 'lastName', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->textInput([
                            'placeholder' => 'Last name',
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>

                    <?= $form->field($model, 'shippingAddress1', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->textInput([
                            'placeholder' => 'Street Address',
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>

                    <?= $form->field($model, 'shippingCity', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->textInput([
                            'placeholder' => 'City',
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>

                    <?= $form->field($model, 'shippingState', [
                        'inputOptions' => ['class' => 'ilc w-full bg-white border border-[#E4E4E7] py-4 px-3 rounded-[6px] text-sm'],
                        'options'      => ['class' => '']
                    ])
                        ->label('')
                        ->dropDownList(
                            $model->getStates(),
                            ['prompt' => 'Select State / Province']
                        ) ?>

                    <?= $form->field($model, 'shippingZip', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->input('tel')
                        ->textInput([
                            'placeholder' => 'Zip Code',
                            'maxlength' => 10,
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>

                    <?= $form->field($model, 'phone', [
                        'options' => ['class' => '']
                    ])
                        ->label('')
                        ->input('tel', ['maxlength' => TRUE])
                        ->textInput([
                            'placeholder' => 'Phone Number',
                            'maxlength' => 16,
                            'class' => 'ilc w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                        ]) ?>
                    <div class="flex gap-[6px]">
                        <input type="checkbox" class="w-5 h-5">
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">Save this information for next time</p>
                    </div>
                </div>

            </div>

            <!-- SUMMARY -->
            <div class="order-3 hidden lg:block lg:order-none lg:col-start-2 lg:row-start-1">

                <div class="px-5 lg:mt-[32px]">
                    <div class="flex gap-3 p-4 border border-[#166534] rounded-[6px]">
                        <img src="/images/s2/check-orderpage.svg" alt="green check" class="h-[21px] w-[21px]">

                        <p class="text-sm leading-[150%] -tracking-[2.5%] font-medium">Made in the USA.</p>
                    </div>
                </div>

                <div class="p-5 lg:p-[32px] space-y-[32px]">
                    <div class="flex items-center justify-between">
                        <div class="flex gap-3">
                            <img src="<?= $productImage ?>" alt="" class="w-[64px] h-[64px]">
                            <div class="space-y-1">
                                <p class="text-sm font-semibold"><?= $prod_name ?></p>
                                <p class="text-xs text-[#27272A]"><?= $quantity ?> Pack (<?= $quantity * 30 ?> Gummies)</p>
                            </div>
                        </div>
                        <p class="text-sm font-medium">$<?= number_format($subtotal, 2) ?></p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex justify-between text-xs">
                            <p>Subtotal · 1 Item</p>
                            <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                        </div>

                        <div class="flex justify-between text-xs">
                            <p>Shipping</p>
                            <p class="font-medium">FREE</p>
                        </div>

                        <div class="space-y-[6px]">
                            <div class="flex justify-between">
                                <p>Total</p>
                                <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LEFT COLUMN CONTINUED (Payment + Bottom) -->
            <div class="flex flex-col order-2 lg:order-none lg:col-start-1 lg:row-start-2">

                <!-- Payment -->
                <div class="p-5 lg:p-[32px] space-y-5">
                    <div class="space-y-[6px]">
                        <p class="font-medium text-lg leading-[150%] -tracking-[2.5%]">Payment</p>
                        <p class="text-[#52525B] text-sm leading-[150%] -tracking-[2.5%]">All transactions are secure and encrypted</p>
                    </div>

                    <div class="rounded-[8px]">
                        <div class="p-3 flex justify-between border border-[#52525B] rounded-t-[8px]">
                            <div class="flex gap-3">
                                <div class="w-[20px] h-[20px] flex items-center justify-center border border-black rounded-full">
                                    <div class="w-[8px] h-[8px] rounded-full bg-black"></div>
                                </div>

                                <p class="font-medium">Credit Card</p>
                            </div>
                            <img src="/images/3cardset.png" alt="" class="max-w-[104.21px] max-h-[18.61px]">
                        </div>

                        <div class="bg-[#F4F4F5] px-3 py-5 space-y-4 rounded-b-[8px] border border-[#E4E4E7] order-form-data">
                            <input type="hidden" name="OrderForm[creditCardType]" id="cc_type">
                            <div>
                                <?= $form->field($model, 'cardNumber', [
                                    'options' => ['class' => 'cc_field']
                                ])
                                    ->label('')
                                    ->input('tel', ['maxlength' => TRUE])
                                    ->textInput([
                                        'placeholder' => 'Card Number',
                                        'class' => 'w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                                    ]) ?>
                            </div>
                            <div class="flex gap-4">

                                <?= $form->field($model, 'fields_expmonth', [
                                    'options' => ['class' => 'w-full cc_field'],
                                    'inputOptions' => ['class' => 'bg-white w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'],

                                ])
                                    ->label('')
                                    ->dropDownList($model->getMonths(), [
                                        'prompt' => [
                                            'text' => 'Month',
                                            'options' => ['disabled' => TRUE, 'selected' => TRUE]
                                        ],
                                        'onchange' => '$("[name=\'OrderForm[fields_expyear]\']").blur();'
                                    ]) ?>

                                <?= $form->field($model, 'fields_expyear', [
                                    'options' => ['class' => 'w-full cc_field'],
                                    'inputOptions' => ['class' => 'bg-white w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'],

                                ])
                                    ->label('')
                                    ->dropDownList($model->getYears(), [
                                        'prompt' => [
                                            'text' => 'Year',
                                            'options' => ['disabled' => TRUE, 'selected' => TRUE]
                                        ],
                                        'onchange' => '$("[name=\'OrderForm[fields_expmonth]\']").blur();'
                                    ]) ?>

                                <?= $form->field($model, 'cvv', [
                                    'options' => ['class' => 'cc_field w-full']
                                ])
                                    ->label('')
                                    ->input('tel', ['maxlength' => TRUE])
                                    ->textInput([
                                        'placeholder' => 'Security Code',
                                        'class' => 'w-full border border-[#E4E4E7] py-4 px-3 rounded-[6px]'
                                    ]) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom sections (Pay Now + Footer) -->
                <div class="p-5 lg:p-[32px] space-y-4 order-4 lg:order-none">
                    <hr class="border-[#E4E4E7]">
                    <div class="py-5 space-y-[19px]">

                        <div class="lg:hidden lg:order-none lg:col-start-2 lg:row-start-1">

                            <div class="lg:mt-[32px]">
                                <div class="flex gap-3 p-4 border border-[#166534] rounded-[6px]">
                                    <img src="/images/s2/check-orderpage.svg" alt="green check" class="h-[21px] w-[21px]">

                                    <p class="text-sm leading-[150%] -tracking-[2.5%] font-medium">Made in the USA.</p>
                                </div>
                            </div>

                            <div class="py-5 lg:p-[32px] space-y-[32px]">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-3">
                                        <img src="<?= $productImage ?>" alt="" class="w-[64px] h-[64px]">
                                        <div class="space-y-1">
                                            <p class="text-sm font-semibold"><?= $prod_name ?></p>
                                            <p class="text-xs text-[#27272A]"><?= $quantity ?> Pack (<?= $quantity * 30 ?> Gummies)</p>
                                        </div>
                                    </div>
                                    <p class="text-sm font-medium">$<?= number_format($subtotal, 2) ?></p>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex justify-between text-xs">
                                        <p>Subtotal · 1 Item</p>
                                        <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                                    </div>

                                    <div class="flex justify-between text-xs">
                                        <p>Shipping</p>
                                        <p class="font-medium">FREE</p>
                                    </div>

                                    <div class="space-y-[6px]">
                                        <div class="flex justify-between">
                                            <p>Total</p>
                                            <p class="font-medium">$<?= number_format($subtotal, 2) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?= \yii\helpers\Html::submitButton(
                            '<span>Pay Now</span>',
                            [
                                'class' => 'cc_field bg-[#B91C1C] text-[#FAFAFA] py-3 w-full rounded-full font-bold text-lg -tracking-[2.5%] hover:bg-[#EF4444] transition-all duration-[0.8s]',
                                'id'    => 'button_complete_order'
                            ]
                        ) ?>

                        <?php if ($type === 'sub'): ?>
                            <?= $form->field(
                                $model,
                                'terms',
                                ['options' => ['id' => 'terms_check']]
                            )
                                ->checkbox([
                                    'checked' => true,
                                    'class' => 'w-5 h-5 accent-red-600',
                                    'labelOptions' => ['class' => 'flex items-center justify-center'],
                                    'label' => '<span class="text-xs ms-4">Click the checkbox to agree to the<br class="sm:hidden"> <a class="font-semibold underline" href="' . Url::to(['/terms']) . '">Purchase Terms and Conditions.</a></span>'
                                ]) ?>

                            <p class="text-xs text-[#A1A1AA]">
                                By purchasing Naughty Time, you confirm that you are at least 18 years of age. You acknowledge that Naughty Time is designed and formulated for long-term, daily use and can be taken regularly for years. You acknowledge that it is highly advisable to maintain a consistent, daily intake of Naughty Time to achieve ideal results. Naughty Time has plenty of benefits in addition to supporting your libido, and these would be possible if Naughty Time is taken as recommended. Amazing VIP privileges await loyal and committed customers! VIP Club customers enjoy big discounts while enjoying the best results possible. LUMA Gummies’ VIP Club perks and the impressive long-term benefits are some of the reasons why our customers stay with us for years! All active customers are pre-qualified for our Exclusive VIP Club benefits, where after 3 consecutive months, the credit card you used to purchase today will be charged the same amount, which immediately qualifies you to claim your VIP privileges. VIP customers can get Naughty Time for as low as $<?= number_format($subtotal, 2) ?> - that’s just $<?= number_format($perDay, 2) ?>/day! By completing your order, you agree to have your card charged $<?= number_format($subtotal, 2) ?> today, and every <?= $days ?> days thereafter. Upon reaching your third month, you may claim your VIP privileges by calling our hotline, giving you over 50% off every month for future orders! Your confirmed purchase today would be covered by our 100% money-back guarantee. If you are unhappy with your purchase for any reason, you may cancel at any time without penalties or fees.
                            </p>

                        <?php else: ?>

                            <div class="">
                                <?= $form->field(
                                    $model,
                                    'terms',
                                    ['options' => ['id' => 'terms_check']]
                                )
                                    ->checkbox([
                                        'checked' => true,
                                        'class' => 'w-5 h-5 accent-red-600',
                                        'labelOptions' => ['class' => 'flex items-center justify-center'],
                                        'label' => '<span class="text-xs ms-4">Click the checkbox to agree to the<br class="sm:hidden"> <a class="font-semibold underline" href="' . Url::to(['/terms']) . '">Purchase Terms and Conditions.</a></span>'
                                    ]) ?>
                            </div>

                        <?php endif; ?>


                    </div>
                </div>

                <div class="order-5 py-[26px] max-lg:px-[12.5px]">
                    <ul class="flex gap-[2px] text-sm leading-[16px] underline text-[#A1A1AA] lg:justify-center">
                        <li class="p-[6px]"><a href="/terms">Terms & Conditions</a></li>
                        <li class="p-[6px]"><a href="/privacy">Privacy Policy</a></li>
                        <li class="p-[6px]"><a href="/refund">Return Policy</a></li>
                        <li class="p-[6px]"><a href="/shipping">DMCA</a></li>
                    </ul>
                </div>

                <div class="hidden order-form-box w-100" id="order_step_two">
                    <div class="order-form-title w-100 d-block">
                        <span class="step-number"><span>Step 2:</span></span>
                        Choose your Payment Method
                    </div>
                    <div class="order-form-data w-100 d-block">
                        <div class="payement-selection-box w-100 d-block horizontal-center">
                            <div class="btn-group"
                                role="group"
                                aria-label="Basic radio toggle button group">
                                <input type="radio"
                                    class="btn-check"
                                    name="OrderForm[payment_processor]"
                                    value="credit_card"
                                    id="cc_option"
                                    autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="cc_option">
                                    <span class="selection-caption w-100 d-block">Pay with<br> Credit or Debit Card</span> <span class="w-100 d-block"></span>
                                </label>
                                <input type="radio"
                                    class="btn-check"
                                    name="OrderForm[payment_processor]"
                                    value="paypal"
                                    id="pp_option"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary"
                                    for="pp_option"> <span class="selection-caption w-100 d-block">&nbsp;<br>
                                        PAY WITH PAYPAL</span><span class=""></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php ActiveForm::end(); ?>
<style>
    #terms_check input[type="checkbox"] {
        accent-color: #DC2626;
    }
</style>

<script>
    const header = document.getElementById('orderHeader');
    const content = document.getElementById('orderContent');
    const arrow = document.getElementById('arrowIcon');

    header.addEventListener('click', () => {
        content.classList.toggle('hidden');

        // Rotate arrow when open
        arrow.classList.toggle('rotate-180');
    });
</script>

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
  var order_form = $('#make-order');

  make_order("#make-order", "#button_complete_order", '/super-calm/make-order','no-message');
  
  // Credit Card 
  var cleave = new Cleave('#orderform-cardnumber', {
    delimiter: '-',
    creditCard: true,
    onCreditCardTypeChanged: function (type) {
      type = type.split("15")[0];
      $('#cc_type').val('');
      $('#cc_container ul.cc-list li').removeClass('active');

      if (type != 'unknown' && type != 'uatp' && type != 'maestro') {
        $('#cc_type').val(type);
        $('#cc_container ul.cc-list li.'+ type).addClass('active');
      }
    }
  });

  
    $(document).on('change', 'input[name="product_id"]', function () {
        if (this.id === 'product_1_otp' || this.id === 'product_2_otp' || this.id === 'product_3_otp') {
            console.log('hide');
            $('#terms_text').hide();
            $('#subtext').html('Subscription Terms and Conditions.');
        } else {
            $('#terms_text').show();
            $('#subtext').html('Subscribe and Save Terms and Conditions.');
            
        }
    });

  // Order Options Event
  $(document).on('change', 'input[name="product_id"]', function(){
    var amount = $(this).data('amount');
    var normal_amount = $(this).data('normal_amount');
    var save_amount = $(this).data('save_amount');
    var thumb = $(this).data('product_thumb');
    var sub_name = $(this).data('sub_name');
    var prod_level = $(this).data('level');
    var product_list = $(this).data('products');
    var month = $(this).data('month');
    var month_text = $(this).data('month_text');
    var days = $(this).data('days');
    var days2 = $(this).data('days2');
    var total = amount;
    

    $('#order_summary #product_thumb').attr('src', thumb);
    $('#order_summary #product_sub_name').text(sub_name);
    $('#order_summary #prod_level').text(prod_level);
    $('#order_summary #product_list').html(product_list);
    $('#order_summary #product_amount').text(amount.toFixed(2));
    $('#order_summary #normal_amount').text(normal_amount.toFixed(2));
    $('#order_summary #save_amount').text(save_amount.toFixed(2));
    $('#order_summary #total').text(total.toFixed(2));

    $('#terms_text .month').text(month_text);
    $('#terms_text .name').text(sub_name);
    $('#terms_text .days').text(days);
    $('#terms_text .days2').text(days2);
    $('#terms_text .amount').text(total.toFixed(2));
  });

  // Select First Option by default
  $('input[name="product_id"]:last').trigger('click');
  
  // Order Step 1 Button Event
//   $('#button_complete_order').on('click', function(e){

//     e.preventDefault();
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-firstname');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-lastname');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-email');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-phone');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-shippingaddress1');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-shippingcity');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-shippingcountry');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-shippingstate');
//     // order_form.yiiActiveForm('validateAttribute', 'orderform-shippingzip');

//     // if($('#order_step_one').has('.is-invalid').length === 0 && check_form_fields('#order_step_one')) {


//       $.when(
//         $.post('/order/step-one', order_form.serialize())
//       ).done(function() {
//         $('#order_summary, #order_step_three, #order_footer').show();
//         $('html, body').animate({ scrollTop: $('#order_step_three').offset().top - 50 }, 200);
//       });

//     // }

//   });

  // Payment Method Event
  $(document).on('change', 'input[name="OrderForm[payment_processor]"]', function () {
    if($(this).val() == 'credit_card') {
      $('#order_step_three').show();
      $(".cc_field").show();
      $(".pp_field").hide(); 
      $(".cc_field input, .cc_field select").blur();
    } else {
      $('#order_step_three').hide();
      $(".cc_field").hide();
      $(".pp_field").show();
      $(".cc_field input, .cc_field select").blur(); 
    }
  });

  // Validate form fields
  function check_form_fields(step) {
    var checking = 0;

    $.each($(step + " input[aria-required=true], #orderform-shippingstate"), function (index) {
      if ($(this).val() == '') checking++
    });
      
    return (checking == 0) ? true : false;
  }


  //ILC
  function autoSaveOrder() {
    $.post('/order/auto-save-step-one', order_form.serialize());

    }

    $('.ilc').on('change', autoSaveOrder);
  $('#button_complete_order').on('click', autoSaveOrder);

});
JS
);
?>