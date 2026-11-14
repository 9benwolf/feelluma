<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<section class="bg-[#FFF7ED] font-inter text-[#27272A]">
    <div class="container max-w-[1080px] mx-auto py-[80px]">

        <div class="max-lg:space-y-[24px] lg:grid lg:grid-cols-[390px_550.24px] lg:gap-[24px] max-lg:max-w-[390px] max-lg:mx-auto justify-center">

            <!-- Card 1 -->
            <div class="rounded-[8px] border border-[#B91C1C] w-[390px]">
                <div class="bg-[#B91C1C] p-6 rounded-t-[8px]">
                    <img src="/images/luma-logo-white.svg" alt="" class="max-lg:max-w-[221.29px]">
                </div>

                <div class="p-8 bg-[#FAFAFA] space-y-8 rounded-b-[8px]">

                    <div class="space-y-4 text-sm leading-[150%] -tracking-[2.5%] font-medium text-[#09090B]">

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Supports natural libido and desire</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Powered by LumaSense™ Ashwagandha</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Helps ease stress & boost mood</p>
                        </div>

                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black check">
                            <p>Delicious strawberry peach gummies</p>
                        </div>

                    </div>

                    <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="text-white bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] py-[8px] text-base font-bold w-full rounded-[4px]">
                        Get 25% Off
                    </button>

                </div>
            </div>


            <!-- Image (spans 2 rows) -->
            <div class="lg:row-span-2 w-full">
                <img
                    src="/images/lander/sec6imga-new.png"
                    alt=""
                    class="lg:w-[550.24px] lg:h-full lg:object-cover max-lg:w-full">
            </div>


            <!-- Card 2 -->
            <div class="w-[390px] hidden lg:block">
                <img
                    src="/images/lander/sec6imgb-new.png"
                    alt=""
                    class="h-full object-cover">
            </div>

        </div>

    </div>
</section>