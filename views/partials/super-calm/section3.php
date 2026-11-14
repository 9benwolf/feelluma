<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="font-inter bg-[#FEF2F2] text-[#27272A]">
    <div class="container mx-auto max-w-[1920px]">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:my-auto lg:w-1/2 lg:py-20 xl:py-0">
                <div class="mx-auto w-full max-w-[430px] space-y-8 px-5 py-20 lg:max-w-[720px] lg:py-0 xl:px-0">
                    <div class="space-y-1">
                        <p class="font-semibold uppercase lg:text-lg">
                            How it works
                        </p>

                        <h2 class="lg:-tracking-[1.2px text-3xl font-bold -tracking-[0.75px] text-[#0369A1] lg:text-5xl lg:-tracking-[1.2px]">
                            POWERED BY ADAPTOGENIC ROOT 🌿 FOR EVERYDAY CALM
                        </h2>
                    </div>

                    <div class="space-y-4 font-medium -tracking-[0.4px] lg:text-lg lg:-tracking-[0.45px]">
                        <p>
                            Super Calm gummies are powered by <strong>CalmiSense™ Ashwagandha</strong>, an adaptogenic botanical traditionally used to help ease stress, support mood, and promote relaxation.
                        </p>

                        <p>
                            Feel calmer, more balanced, and more present — even during busy days.
                        </p>
                    </div>

                    <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#B91C1C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#EF4444] lg:max-w-[400px]">
                        SHOP NOW
                    </a>
                </div>
            </div>

            <div class="lg:w-[50%]">
                <img src="/images/super-calm/sec3img-new.png" alt="" class="size-full max-lg:mx-auto max-lg:max-w-[430px] lg:max-h-[960px] lg:max-w-[960px] lg:flex-1">
            </div>
        </div>
    </div>

    <div class="flex w-full">
        <div class="h-[6px] w-[33.3%] w-full bg-[#DC2626]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#EA580C]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#0284C7]"></div>
    </div>
</section>