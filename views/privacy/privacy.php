<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\helpers\Url;

$this->title = 'Privacy Policy';

$this->params['showNavbar'] = true;
?>

<section class="font-inter">
    <div class="container mx-auto max-w-[1082px] px-5 py-[30px]">
        <div class="space-y-[16px]">
            <h1 class="font-bold text-[32px]">Privacy Policy</h1>

            <p class="text-[16px] lg:text-lg">We respect your privacy and are committed to protecting your personal information.</p>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">1. Information We Collect</h2>

                <ul class="list-disc list-inside font-semibold">
                    <li>Name, email, phone number</li>
                    <li>Shipping and billing address</li>
                    <li>Payment details (processed securely via third-party providers)</li>
                    <li>Website usage data (cookies, analytics)</li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">2. How We Use Your Information</h2>

                <ul class="list-disc list-inside font-semibold">
                    <li>To process and fulfill orders</li>
                    <li>To communicate with you</li>
                    <li>To improve our services</li>
                    <li>For marketing (if you opt in)</li>
                </ul>
            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">3. Sharing of Information</h2>

                <p class="text-[16px] lg:text-lg">We do not sell your personal data. We may share it with trusted partners (payment processors, shipping providers).</p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">4. Cookies</h2>

                <p class="text-[16px] lg:text-lg">We use cookies to enhance your experience and track performance.</p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">5. Data Security</h2>

                <p class="text-[16px] lg:text-lg">We implement industry-standard security measures to protect your data.</p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">6. Your Rights</h2>

                <p class="text-[16px] lg:text-lg">You may request access, correction, or deletion of your personal data by contacting us.</p>

            </div>

        </div>
    </div>
</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>