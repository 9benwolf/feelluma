<?php

use app\components\widgets\Picture;



$basepath = '/images/easy-sleep/thankyou/';
?>

<section class="bg-[#fafafa] font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] px-7 pb-[25px] pt-[80px] lg:pb-[120px] lg:pt-[120px]">
        <div class="flex flex-col gap-[80px] lg:flex-row lg:gap-[54px]">
            <div class="space-y-[54px] max-lg:mx-auto max-lg:max-w-[382px] lg:max-w-[606px]">

                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] lg:text-5xl">You Activated Two Systems at Once</h3>
                    <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">Recover Better. Perform Better.</p>
                </div>

                <div class="space-y-8">
                    <p class="text-base leading-[150%] -tracking-[2.5%] lg:text-lg">
                        <strong>Easy Sleep™</strong> and <strong>NeuroSpark™</strong> were designed to support different stages of the same cycle:
                    </p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">Fall asleep easier</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">Recover more deeply</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">Wake up refreshed</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">Stay focused longer</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">Maintain energy throughout the day</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-base leading-[150%] -tracking-[2.5%] lg:text-lg">
                            Easy Sleep™ works while you sleep.
                        </p>
                        <p class="text-base leading-[150%] -tracking-[2.5%] lg:text-lg">
                            NeuroSpark™ works while you're awake.
                        </p>
                        <p class="text-base font-bold leading-[150%] -tracking-[2.5%] lg:text-lg">
                            Together, they help support peak performance around the clock.
                        </p>
                    </div>

                    <div class="space-y-3 lg:hidden">
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#D4D4D8]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">Naughty Time™ only</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#D8B4FE]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">NeuroSpark™ only</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#7E22CE]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">
                                Dual System (Easy Sleep™ + NeuroSpark™)
                            </p>
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