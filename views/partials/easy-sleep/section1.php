<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<section class="bg-gradient-to-b from-[#3B0764] to-[#6B21A8] font-inter text-white">
    <div class="container mx-auto max-w-[1920px] pt-8 lg:pt-0">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:flex lg:w-[50%] lg:justify-end lg:px-10 lg:py-20 xl:py-0 xl:pl-0 xl:pr-24">
                <div class="max-w-[490px] space-y-6 pb-8 max-lg:mx-auto max-lg:px-5 lg:flex lg:max-w-[499px] lg:flex-1 lg:flex-col lg:justify-center lg:space-y-8 lg:pb-0">
                    <div class="space-y-2.5">
                        <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%] lg:text-lg">
                            SLEEP & RELAXATION GUMMIES
                        </h2>

                        <h1 class="font-pop text-[2.75rem] font-bold leading-[48px] lg:text-7xl">
                            WAKE UP <br class="hidden lg:block">
                            FEELING <br class="hidden lg:block">
                            REFRESHED
                        </h1>
                    </div>

                    <div class="space-y-[16px] font-inter text-sm leading-[150%] -tracking-[0.35px] lg:text-base lg:-tracking-[0.4px]">
                        <p>
                            Say hello to <strong>Easy Sleep</strong> — the gummy made for women who want to FALL ASLEEP FASTER, stay asleep longer, and wake up feeling rested and recharged.
                        </p>

                        <p>
                            With delicious <strong>Berry Melon Rush</strong> gummies and a formula designed to support relaxation, stress relief, and restful sleep, <strong>Easy Sleep</strong> helps you unwind at night and wake up feeling like yourself again.
                        </p>

                        <p>
                            Because better days start with better sleep.
                        </p>
                    </div>

                    <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#FFF7ED] py-[8px] text-center text-base font-bold text-[#B91C1C] transition-all duration-[0.8s] hover:bg-[#FAFAFA] lg:max-w-[400px]">SHOP NOW</a>
                </div>
            </div>

            <div class="lg:w-[50%]">
                <img src="/images/easy-sleep/sec1img-new.png" alt="" class="size-full max-lg:mx-auto max-lg:max-w-[430px] lg:max-h-[960px] lg:max-w-[960px] lg:flex-1">
            </div>
        </div>
    </div>
</section>