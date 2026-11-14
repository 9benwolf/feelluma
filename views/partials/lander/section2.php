<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="bg-[#FFF7ED] font-inter text-[#27272A]">
    <div class="mx-auto container max-w-[1920px] pt-[80px] lg:pt-0">
        <div class="flex flex-col lg:flex-row">

            <div class="space-y-[54px] max-lg:px-5 max-lg:max-w-[490px] max-lg:mx-auto pb-[80px] lg:flex-1 lg:flex lg:flex-col lg:justify-center lg:order-2 lg:w-[50%]">
                <div class="space-y-[6px] lg:pl-[6.25%] lg:pr-5">
                    <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">BENEFITS</h2>
                    <h1 class="font-bold font-pop text-[30px] leading-[100%] -tracking-[2.5%] lg:text-[48px]">YOU’LL BE SO<br class="hidden xl:block"> TURNED ON</h1>
                </div>

                <div class="text-[14px] space-y-[32px] leading-[150%] -tracking-[2.5%] lg:pl-[6.25%]">
                    <div class="space-y-[12px]">
                        <h4 class="text-[#B91C1C] text-2xl font-bold font-pop">INCREASED LIBIDO</h4>
                        <p class="font-medium text-[#27272A]">Lights your fire, and keeps it lit all night</p>
                    </div>
                    <div class="space-y-[12px]">
                        <h4 class="text-[#B91C1C] text-2xl font-bold font-pop">MOOD ENHANCEMENT</h4>
                        <p class="font-medium text-[#27272A]">Boosts pleasure and makes any bedtime moment magical</p>
                    </div>
                    <div class="space-y-[12px]">
                        <h4 class="text-[#B91C1C] text-2xl font-bold font-pop">FEEL-GOOD CHEMISTRY</h4>
                        <p class="font-medium text-[#27272A]">Creates the calm, energized state that makes intimacy feel effortless and exciting.</p>
                    </div>
                </div>

                <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] py-[8px] text-base font-bold w-full lg:max-w-[400px] lg:ml-[6.25%]">SHOP NOW</button>
            </div>

            <img src="/images/lander/sec2img-new.png" alt="" class="max-lg:max-w-[430px] lg:max-w-[960px] lg:max-h-[960px] max-lg:mx-auto lg:flex-1 lg:w-[50%]">

        </div>
    </div>
</section>