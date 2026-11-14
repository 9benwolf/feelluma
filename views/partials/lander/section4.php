<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="font-inter text-[#27272A]">
    <div class="container mx-auto py-[80px]">
        <div class="space-y-[54px] px-5 max-lg:max-w-[490px] max-lg:mx-auto">
            <div class="space-y-2.5">
                <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%] text-center">WHY NAUGHTY TIME GUMMIES?</h2>
                <h3 class="font-bold font-pop text-[30px] leading-[100%] -tracking-[2.5%] text-[#B91C1C] text-center">YOUR ULTIMATE LIBIDO COMPANION</h3>
            </div>

            <div class="flex lg:flex-row flex-col gap-5 lg:justify-center">
                <div class="bg-[#FEF2F2] px-5 py-6 lg:pb-[72px] space-y-4 max-w-[390px] lg:w-full lg:relative max-lg:mx-auto">
                    <img src="/images/lander/sec4imga-new.png" alt="">

                    <h4 class="text-2xl text-[#B91C1C] font-bold leading-[125%] -tracking-[2.5%] font-pop">FEEL THE SPARK<br class="hidden lg:block"> EVERYWHERE</h4>

                    <p class="leading-[150%] -tracking-[2.5%] font-medium text-[#27272A]">Supports circulation, heightens sensation, and helps awaken the kind of chemistry that turns good moments into unforgettable ones.</p>

                    <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] py-[8px] text-base font-bold w-full rounded-[4px] lg:max-w-[274.6px] xl:max-w-[350px] lg:absolute lg:bottom-[24px]">SHOP NOW</button>

                </div>

                <div class="bg-[#FFF7ED] px-5 py-6 lg:pb-[72px] space-y-4 max-w-[390px] lg:w-full lg:relative max-lg:mx-auto">
                    <img src="/images/lander/sec4imgb-new.png" alt="">

                    <h4 class="text-2xl text-[#C2410C] font-bold leading-[125%] -tracking-[2.5%] font-pop">BOOSTS LIBIDO</h4>

                    <p class="leading-[150%] -tracking-[2.5%] font-medium text-[#27272A]">Powered by LumaSense™ Ashwagandha, a powerful adaptogenic root traditionally used to support mood, reduce stress, and help awaken natural desire.</p>

                    <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#C2410C] hover:bg-[#F97316] transition-all duration-[0.8s] py-[8px] text-base font-bold w-full rounded-[4px] lg:max-w-[274.6px] xl:max-w-[350px] lg:absolute lg:bottom-[24px]">SHOP NOW</button>

                </div>

                <div class="bg-[#EFF6FF] px-5 py-6 lg:pb-[72px] space-y-4 max-w-[390px] lg:w-full lg:relative max-lg:mx-auto">
                    <img src="/images/lander/sec4imgc-new.png" alt="">

                    <h4 class="text-2xl text-[#0369A1] font-bold leading-[125%] -tracking-[2.5%] font-pop">RELAX & LET GO</h4>

                    <p class="leading-[150%] -tracking-[2.5%] font-medium text-[#27272A]">Powered by LumaSense™ Ashwagandha, helping ease stress, support mood, and bring your mind and body back into the moment.</p>

                    <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#0369A1] py-[8px] hover:bg-[#0EA5E9] transition-all duration-[0.8s] text-base font-bold w-full rounded-[4px] lg:max-w-[274.6px] xl:max-w-[350px] lg:absolute lg:bottom-[24px]">SHOP NOW</button>

                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full">
        <div class="w-[33.3%] h-[6px] w-full bg-[#DC2626]"></div>
        <div class="w-[33.3%] h-[6px] w-full bg-[#EA580C]"></div>
        <div class="w-[33.3%] h-[6px] w-full bg-[#0284C7]"></div>
    </div>
</section>