<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\helpers\Url;

$this->title = 'Refund Policy';

$this->params['showNavbar'] = true;
?>

<section class="font-inter">
    <div class="container mx-auto max-w-[1082px] px-5 py-[30px]">
        <div class="space-y-[16px]">
            <h1 class="font-bold text-[32px]">Refund Policy</h1>

            <p class="text-[16px] lg:text-lg">We want you to be satisfied with your purchase.</p>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">1. Eligibility</h2>

                <p class="text-[16px] lg:text-lg">We do not sell your personal data. We may share it with trusted partners (payment processors, shipping providers).</p>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">2. Conditions</h2>
                <ul class="list-disc list-inside">
                    <li>Product must be returned (used or unused depending on policy)</li>
                    <li>Proof of purchase is required</li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">2. Conditions</h2>
                <ul class="list-disc list-inside">
                    <li>Product must be returned (used or unused depending on policy)</li>
                    <li>Proof of purchase is required</li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">3. Process</h2>

                <p class="text-[16px] lg:text-lg">To request a refund, contact our support team at:</p>
                <p class="text-[16px] lg:text-lg font-bold">📧 contact@feelluma.com</p>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">4. Non-Refundable Items</h2>
                <ul class="list-disc list-inside">
                    <li>Shipping fees (if applicable)</li>
                    <li>Promotional/free items</li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">5. Processing Time</h2>

                <p class="text-[16px] lg:text-lg">Refunds are processed within <span class="font-bold">5–10 business days</span> after approval.</p>
            </div>

        </div>
    </div>
</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>