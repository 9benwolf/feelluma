<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\helpers\Url;

$this->title = 'Terms of Services';

$this->params['showNavbar'] = true;
?>

<section class="font-inter">
    <div class="container mx-auto max-w-[1082px] px-5 py-[30px]">
        <div class="space-y-[16px]">
            <h1 class="font-bold text-[32px]">Terms of Service</h1>

            <p class="text-[16px] lg:text-lg">Welcome to <span class="font-semibold">Feelluma</span>, By accessing or using our website, you agree to be bound by these Terms of Service.
            </p>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">1. Use of Website</h2>

                <p class="text-[16px] lg:text-lg">
                    You agree to use this site for lawful purposes only. You must not misuse the site or attempt to access it in unauthorized ways
                </p>
            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">2. Products & Orders</h2>

                <p class="text-[16px] lg:text-lg">All products are subject to availability. We reserve the right to refuse or cancel any order at our discretion.</p>
            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">3. Pricing</h2>

                <p class="text-[16px] lg:text-lg">Prices are listed in USD and may change without prior notice. Any applicable taxes and shipping fees will be displayed at checkout.</p>
            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">4. Subscriptions (If Applicable)</h2>

                <p class="text-[16px] lg:text-lg">By purchasing a subscription product, you agree to recurring billing based on the selected plan. You may cancel anytime through our support.</p>

            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">5. Intellectual Property</h2>

                <p class="text-[16px] lg:text-lg">All content on this site (text, images, logos) is owned by Feelluma and may not be used without permission.</p>
            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">6. Limitation of Liability</h2>

                <p class="text-[16px] lg:text-lg">We are not liable for any indirect or incidental damages resulting from the use of our products or website.</p>
            </div>
            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">7. Changes to Terms</h2>

                <p class="text-[16px] lg:text-lg">We may update these Terms at any time. Continued use of the site means you accept the updated Terms.</p>
            </div>
        </div>
    </div>
</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>