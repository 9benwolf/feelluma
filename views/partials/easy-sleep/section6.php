<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="bg-[#FFF7ED] font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1080px] py-[80px] lg:py-[120px]">

        <div class="justify-center max-lg:mx-auto max-lg:max-w-[390px] max-lg:space-y-[24px] lg:grid lg:grid-cols-[390px_550.24px] lg:gap-[24px]">

            <!-- Card 1 -->
            <div class="w-full max-w-[390px] rounded-[8px] border border-[#6B21A8]">
                <div class="rounded-t-[8px] bg-[#6B21A8] p-6">
                    <img src="/images/luma-logo-white.svg" alt="" class="max-lg:max-w-[221.29px]">
                </div>

                <div class="space-y-8 rounded-b-[8px] bg-[#FAFAFA] p-8">

                    <div class="space-y-4 text-sm font-medium leading-[150%] -tracking-[2.5%] text-[#09090B]">

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Supports restful sleep & relaxation</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Helps ease nighttime stress</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Supports falling asleep & staying asleep</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Delicious Berry Melon Rush gummies</p>
                        </div>

                    </div>

                    <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#B91C1C] py-[8px] text-center text-base font-bold text-white transition-all duration-[0.8s] hover:bg-[#EF4444]">
                        Get 25% Off
                    </a>

                </div>
            </div>


            <!-- Image (spans 2 rows) -->
            <div class="w-full lg:row-span-2">
                <img
                    src="/images/easy-sleep/sec6imga-new.png"
                    alt=""
                    class="max-lg:w-full lg:h-full lg:w-[550.24px] lg:object-cover">
            </div>


            <!-- Card 2 -->
            <div class="hidden w-full max-w-[390px] lg:block">
                <img
                    src="/images/easy-sleep/sec6imgb-new.png"
                    alt=""
                    class="h-full object-cover">
            </div>

        </div>

    </div>
</section>