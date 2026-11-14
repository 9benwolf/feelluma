<?php

use app\components\widgets\Picture;



$basepath = 'images/thankyou/';
?>

<section class="bg-[#fafafa] font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] px-7 pt-[80px] lg:pt-[120px] lg:pb-[120px] pb-[25px]">
        <div class="flex flex-col lg:flex-row gap-[80px] lg:gap-[54px]">
            <div class="space-y-[54px] max-lg:mx-auto max-lg:max-w-[382px] lg:max-w-[606px]">

                <div class="space-y-[6px]">
                    <h3 class="font-bold text-[30px] leading-[125%] -tracking-[2.5%] font-pop">Why Two Systems Work Better Than One</h3>
                    <p class="font-medium text-base leading-[150%] -tracking-[2.5%]">Dual-System Female Desire & Pleasure Support</p>
                </div>

                <div class="space-y-8">
                    <p class="text-base lg:text-lg leading-[150%] -tracking-[2.5%]">This model illustrates how <strong>Naughty Time</strong>™ and <strong>NeuroSpark</strong>™ activate different but complementary pathways involved in:</p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="font-semibold text-lg leading-[150%] -tracking-[2.5%]">Desire and libido signaling</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="font-semibold text-lg leading-[150%] -tracking-[2.5%]">Mood and dopamine activity</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="font-semibold text-lg leading-[150%] -tracking-[2.5%]">Sensory nerve responsiveness</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="font-semibold text-lg leading-[150%] -tracking-[2.5%]">Circulatory arousal support</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="font-semibold text-lg leading-[150%] -tracking-[2.5%]">Heightened physical sensitivity</p>
                        </div>
                    </div>

                    <p class="text-base lg:text-lg leading-[150%] -tracking-[2.5%]">Combining both systems provides a more complete female desire and pleasure protocol.</p>

                    <div class="space-y-3 lg:hidden">
                        <div class="flex gap-3 items-center">
                            <div class="w-[20px] h-[20px] bg-[#D4D4D8] rounded-[6px]"></div>
                            <p class="font-medium text-base leading-[150%] -tracking-[2.5%]">Naughty Time™ only</p>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="w-[20px] h-[20px] bg-[#FCA5A5] rounded-[6px]"></div>
                            <p class="font-medium text-base leading-[150%] -tracking-[2.5%]">NeuroSpark™ only</p>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="w-[20px] h-[20px] bg-[#B91C1C] rounded-[6px]"></div>
                            <p class="font-medium text-base leading-[150%] -tracking-[2.5%]">Dual System (Naughty Time™ + NeuroSpark™)</p>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <?= Picture::widget([
                    'src' => $basepath . 's3img.webp',
                    'fallback' => $basepath . 's3img.png',
                    'alt' => 'relative activation chart',
                    'loading' => false,
                    'imgClass' => 'max-lg:mx-auto',
                    'pictureClass' => '',
                    'srcMobile' => $basepath . 's3imgmb.webp',
                    'fallbackMobile' => $basepath . 's3imgmb.png'
                ]) ?>
            </div>
        </div>
    </div>
</section>