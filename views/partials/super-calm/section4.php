<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="font-inter text-[#27272A]">
    <div class="container mx-auto py-[80px]">
        <div class="space-y-[54px] px-5 max-lg:mx-auto max-lg:max-w-[490px]">
            <div class="space-y-2.5">
                <p class="text-center text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                    WHY SUPER CALM GUMMIES?
                </p>
                <h2 class="text-center font-pop text-[30px] font-bold leading-[100%] -tracking-[2.5%] text-[#075985]">
                    YOUR ULTIMATE CALM COMPANION
                </h2>
            </div>

            <div class="flex flex-col gap-5 lg:flex-row lg:justify-center">
                <div class="max-w-[390px] space-y-4 bg-[#FEF2F2] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/super-calm/sec4imga-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#B91C1C]">
                        RELAX & RESET
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Supports relaxation and helps you unwind after stressful days.
                    </p>

                    <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#B91C1C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#EF4444] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">SHOP NOW</a>

                </div>

                <div class="max-w-[390px] space-y-4 bg-[#FFF7ED] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/super-calm/sec4imgb-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#C2410C]">
                        PEACEFUL MOOD
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Powered by CalmiSense™ Ashwagandha to support mood, reduce stress, and help you feel emotionally balanced.
                    </p>

                    <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#C2410C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#F97316] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">
                        SHOP NOW
                    </a>

                </div>

                <div class="max-w-[390px] space-y-4 bg-[#EFF6FF] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/super-calm/sec4imgc-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#0369A1]">
                        STAY PRESENT
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Helps calm your mind so you can focus on enjoying the moment instead of feeling overwhelmed.
                    </p>

                    <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#0369A1] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#0EA5E9] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">
                        SHOP NOW
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full">
        <div class="h-[6px] w-[33.3%] w-full bg-[#DC2626]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#EA580C]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#0284C7]"></div>
    </div>
</section>