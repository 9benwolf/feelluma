<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="bg-[#FFF7ED] font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1920px] pt-[80px] lg:pt-0">
        <div class="flex flex-col lg:flex-row">
            <div class="space-y-[54px] pb-[80px] max-lg:mx-auto max-lg:max-w-[490px] max-lg:px-5 lg:order-2 lg:flex lg:w-[50%] lg:flex-1 lg:flex-col lg:justify-center lg:py-20 xl:py-0">
                <div class="space-y-[6px] lg:pl-[6.25%] lg:pr-5">
                    <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                        BENEFITS
                    </p>
                    <h2 class="font-pop text-3xl font-bold leading-[100%] -tracking-[2.5%] lg:text-5xl">
                        YOU’LL BE SO F*@KING CALM
                    </h2>
                </div>

                <div class="space-y-[32px] text-[14px] leading-[150%] -tracking-[2.5%] lg:pl-[6.25%]">
                    <div class="space-y-[12px]">
                        <h3 class="font-pop text-2xl font-bold text-[#0369A1]">
                            CALM & RELAXATION
                        </h3>
                        <p class="font-medium text-[#27272A]">
                            Helps quiet racing thoughts and supports a more peaceful state of mind.
                        </p>
                    </div>
                    <div class="space-y-[12px]">
                        <h3 class="font-pop text-2xl font-bold text-[#0369A1]">
                            MOOD SUPPORT
                        </h3>
                        <p class="font-medium text-[#27272A]">
                            Supports emotional balance and helps you feel more centered throughout the day.
                        </p>
                    </div>
                    <div class="space-y-[12px]">
                        <h3 class="font-pop text-2xl font-bold text-[#0369A1]">
                            FEEL-GOOD ENERGY
                        </h3>
                        <p class="font-medium text-[#27272A]">
                            Creates a calm, positive vibe without making you feel sluggish or weighed down.
                        </p>
                    </div>
                </div>

                <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#B91C1C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#EF4444] lg:ml-[6.25%] lg:max-w-[400px]">SHOP NOW</a>
            </div>

            <div class="lg:w-[50%]">
                <img src="/images/super-calm/sec2img-new.png" alt="" class="size-full max-lg:mx-auto max-lg:max-w-[430px] lg:max-h-[960px] lg:max-w-[960px] lg:flex-1">
            </div>

        </div>
    </div>
</section>