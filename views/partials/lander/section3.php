<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="bg-[#FEF2F2] font-inter text-[#27272A]">
    <div class="mx-auto container max-w-[1920px] pt-[80px] lg:pt-0">
        <div class="flex flex-col lg:flex-row">
            <div class="space-y-[32px] max-lg:px-5 max-lg:max-w-[490px] max-lg:mx-auto pb-[80px] lg:flex-1 lg:flex lg:flex-col lg:justify-center lg:w-[50%]">
                <div class="space-y-[6px] lg:pl-[6.25%] lg:max-w-[720px]">
                    <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">HOW IT WORKS</h2>
                    <h3 class="font-bold font-pop text-[30px] leading-[100%] -tracking-[2.5%] text-[#B91C1C] lg:text-[48px]">POWERED BY ADAPTOGENIC ROOT 🌿 FOR REAL SPARK</h3>
                </div>

                <p class="font-medium text-base lg:text-[16px] -tracking-[2.5] leading-[150%] lg:max-w-[720px] lg:pl-[6.25%]">Naughty Time gummies are powered by LumaSense™ Ashwagandha, an adaptogenic botanical known to help ease stress, support mood, and awaken your natural desire. Feel more relaxed, more confident, and fully in the moment when it matters most.</p>

                <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] py-[8px] text-base font-bold w-full lg:max-w-[400px] lg:ml-[6.25%] lg:mr-5">SHOP NOW</button>
            </div>

            <img src="/images/lander/sec3img.png" alt="" class="max-lg:max-w-[430px] lg:max-w-[960px] lg:max-h-[960px] max-lg:mx-auto lg:flex-1 lg:w-[50%]">
        </div>

        <div class="flex w-full">
            <div class="w-[33.3%] h-[6px] w-full bg-[#DC2626]"></div>
            <div class="w-[33.3%] h-[6px] w-full bg-[#EA580C]"></div>
            <div class="w-[33.3%] h-[6px] w-full bg-[#0284C7]"></div>
        </div>
    </div>
</section>