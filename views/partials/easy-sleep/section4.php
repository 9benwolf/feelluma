<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="font-inter text-[#27272A]">
    <div class="container mx-auto py-[80px]">
        <div class="space-y-[54px] px-5 max-lg:mx-auto max-lg:max-w-[490px]">
            <div class="space-y-2.5">
                <p class="text-center text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                    WHY EASY SLEEP GUMMIES?
                </p>
                <h2 class="text-center font-pop text-[30px] font-bold leading-[100%] -tracking-[2.5%] text-[#6B21A8]">
                    YOUR ULTIMATE <br class="md:hidden">
                    SLEEP COMPANION
                </h2>
            </div>

            <div class="flex flex-col gap-5 lg:flex-row lg:justify-center">
                <div class="max-w-[390px] space-y-4 bg-[#FEF2F2] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/easy-sleep/sec4imga-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#6B21A8]">
                        DRIFT OFF EASILY
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Supports relaxation and helps quiet nighttime stress so you can fall asleep faster.
                    </p>

                    <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#6B21A8] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#EF4444] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">SHOP NOW</a>

                </div>

                <div class="max-w-[390px] space-y-4 bg-[#FFF7ED] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/easy-sleep/sec4imgb-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#C2410C]">
                        SLEEP DEEPER
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Designed to support restful, uninterrupted sleep throughout the night.
                    </p>

                    <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#C2410C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#F97316] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">
                        SHOP NOW
                    </a>

                </div>

                <div class="max-w-[390px] space-y-4 bg-[#EFF6FF] px-5 py-6 max-lg:mx-auto lg:relative lg:w-full lg:pb-[72px]">
                    <img src="/images/easy-sleep/sec4imgc-new.png" alt="">

                    <h3 class="font-pop text-2xl font-bold leading-[125%] -tracking-[2.5%] text-[#0369A1]">
                        WAKE UP REFRESHED
                    </h3>

                    <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#27272A]">
                        Helps you wake up feeling rested, restored, and ready for the day ahead.
                    </p>

                    <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#0369A1] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#0EA5E9] lg:absolute lg:bottom-[24px] lg:max-w-[274.6px] xl:max-w-[350px]">
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