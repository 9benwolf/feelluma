<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<section class="bg-gradient-to-b from-[#082F49] to-[#075985] font-inter text-white">
    <div class="container mx-auto max-w-[1920px] pt-[80px] lg:pt-0">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:flex lg:w-[50%] lg:justify-end lg:px-10 lg:py-20 xl:py-0 xl:pl-0 xl:pr-24">
                <div class="max-w-[490px] space-y-6 pb-[80px] max-lg:mx-auto max-lg:px-5 lg:flex lg:max-w-[504px] lg:flex-1 lg:flex-col lg:justify-center lg:space-y-8 lg:pb-0">
                    <div class="space-y-2.5">
                        <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                            CALM & RELAXATION GUMMIES
                        </h2>
                        <h1 class="font-pop text-5xl font-bold leading-[100%] -tracking-[2.5%] lg:text-7xl">
                            FEEL PEACEFUL <br> AGAIN
                        </h1>
                    </div>

                    <div class="space-y-[16px] text-sm leading-[150%] -tracking-[2.5%] lg:text-base lg:-tracking-[0.4px]">
                        <p>
                            Say hello to <strong>Super Calm</strong> — the gummy made for women who want LESS STRESS, calmer moods, and more peaceful moments throughout the day.
                        </p>

                        <p>
                            With delicious <strong>Kiwi Splash</strong> gummies and a formula designed to support relaxation, mood balance, and emotional wellness, Luma helps you slow down, reset, and feel more like yourself again.
                        </p>

                        <p>
                            Because calmer days start with the right support.
                        </p>
                    </div>

                    <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="block w-full rounded-[4px] bg-[#FFF7ED] py-[8px] text-center text-base font-bold text-[#B91C1C] transition-all duration-[0.8s] hover:bg-[#FAFAFA] lg:max-w-[400px]">SHOP NOW</a>
                </div>
            </div>

            <div class="lg:w-[50%]">
                <img src="/images/super-calm/sec1img-new.png" alt="" class="size-full max-lg:mx-auto max-lg:max-w-[430px] lg:max-h-[960px] lg:max-w-[960px] lg:flex-1">
            </div>
        </div>
    </div>
</section>