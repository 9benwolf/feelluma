<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\helpers\Url;

$this->title = 'Shipping Policy';

$this->params['showNavbar'] = true;
?>

<section class="font-inter">
    <div class="container mx-auto max-w-[1082px] px-5 py-[30px]">
        <div class="space-y-[16px]">
            <h1 class="font-bold text-[32px]">Shipping Policy</h1>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">1. Processing Time</h2>

                <p class="text-[16px] lg:text-lg">Orders are processed within <span class="font-bold">1–2 business days.</span></p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">2. Shipping Time</h2>

                <ul class="list-disc list-inside">
                    <li>Domestic: <b>3–7 business days</b></li>
                    <li>International: <b>7–15 business days</b></li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">3. Shipping Fees</h2>

                <p class="text-[16px] lg:text-lg">Shipping costs are calculated at checkout.</span></p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">4. Tracking</h2>

                <p class="text-[16px] lg:text-lg">You will receive a tracking number once your order has been shipped.</span></p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">5. Delays</h2>

                <p class="text-[16px] lg:text-lg">We are not responsible for delays caused by carriers or customs.</span></p>

            </div>

        </div>
    </div>
</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>