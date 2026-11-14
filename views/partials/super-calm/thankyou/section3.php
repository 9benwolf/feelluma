<?php

use app\components\widgets\Picture;



$basepath = '/images/super-calm/thankyou/';
?>

<section class="bg-[#EFF6FF] font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] px-7 pb-[25px] pt-[80px] lg:pb-[120px] lg:pt-[120px]">
        <div class="flex flex-col gap-[80px] lg:flex-row lg:gap-[54px]">
            <div class="space-y-[54px] max-lg:mx-auto max-lg:max-w-[382px] lg:max-w-[606px]">

                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] lg:text-5xl">Why Two Systems Work Better Than One</h3>
                    <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">
                        Dual-System Calm & Cognitive Support
                    </p>
                </div>

                <div class="space-y-8">
                    <p class="text-base leading-[150%] -tracking-[2.5%] lg:text-lg">
                        This model shows how <strong>Super Calm™</strong> and <strong>NeuroSpark™</strong> support different but complementary aspects of mental performance:
                    </p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                                Stress resilience & emotional balance
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                                Relaxation & mental calmness
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                                Focus & concentration
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                                Motivation & productivity
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                                Cognitive performance
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 text-base leading-[150%] -tracking-[2.5%] lg:text-lg">
                        <p>
                            <strong>Super Calm™</strong> helps create the mental environment needed for peak performance.
                        </p>

                        <p>
                            <strong>NeuroSpark™</strong> helps support the focus and clarity needed to perform at your best.
                        </p>

                        <p>
                            Together, they create a more complete mind and performance support system.
                        </p>
                    </div>

                    <div class="space-y-3 lg:hidden">
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#D4D4D8]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">Super Calm™ only</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#7DD3FC]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">NeuroSpark™ only</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="h-[20px] w-[20px] rounded-[6px] bg-[#0369A1]"></div>
                            <p class="text-base font-medium leading-[150%] -tracking-[2.5%]">Dual System: Super Calm™ + NeuroSpark™</p>
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