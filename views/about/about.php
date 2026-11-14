<?php

/** @var yii\web\View $this */

use app\helpers\UtilityHelper;
use yii\helpers\Url;

$this->title = 'About Us';

$this->params['showNavbar'] = true;
?>

<section class="font-inter">
    <div class="container mx-auto max-w-[1082px] px-5 py-[30px]">
        <div class="space-y-[16px]">
            <h1 class="font-bold text-[32px]">About Us</h1>

            <div class="space-y-2.5">

                <p class="text-[16px] lg:text-lg">At <b>Feelluma</b>, we believe every man deserves to feel confident, energized, and at his best—every single day.</p>
                <p class="text-[16px] lg:text-lg">Our mission is simple: to provide high-quality, carefully crafted supplements designed to support stamina, performance, and overall wellness. We focus on formulas that combine modern research with thoughtfully selected ingredients to help you stay consistent, confident, and in control.</p>
                <p class="text-[16px] lg:text-lg">We understand that performance isn’t just physical—it’s about how you feel, how you show up, and how you maintain confidence in your daily life. That’s why our products are designed to support your routine in a way that’s simple, effective, and easy to follow.</p>
                <p class="text-[16px] lg:text-lg">At Feelluma, we prioritize:</p>

                <ul class="list-disc list-inside">
                    <li><b>Quality ingredients</b> selected with care</li>
                    <li><b>Consistent daily support</b> for performance and stamina</li>
                    <li><b>Customer-focused experience</b> from order to delivery</li>
                </ul>

                <p class="text-[16px] lg:text-lg">We are committed to continuously improving our products and customer experience to better serve your needs.</p>
                <p class="text-[16px] lg:text-lg">If you have any questions or need assistance, our support team is here to help.</p>

            </div>

            <div class="space-y-2.5">
                <h2 class="font-roboto text-[18px] lg:text-[20px] font-semibold">Our Commitment</h2>

                <p class="text-[16px] lg:text-lg">We are dedicated to maintaining high standards in everything we do—from product development to customer support. Your satisfaction and trust are important to us.</p>

            </div>

        </div>
    </div>
</section>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>