<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<section class="bg-gradient-to-b from-[#500724] to-[#9D174D] font-inter text-white">
    <div class="mx-auto container max-w-[1920px] pt-[80px] lg:pt-0">
        <div class="flex flex-col lg:flex-row">

            <div class="space-y-[54px] max-lg:px-5 max-lg:max-w-[490px] max-lg:mx-auto pb-[80px] lg:flex-1 lg:flex lg:flex-col lg:justify-center lg:w-[50%] lg:pl-20 xl:pl-40 lg:pr-20 lg:pt-20">

                <div class="space-y-2.5">
                    <h2 class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">LIBIDO GUMMIES</h2>
                    <h1 class="font-bold font-pop text-[48px] leading-[100%] -tracking-[2.5%] lg:text-[72px]">FEEL THE<br> SPARK AGAIN</h1>
                </div>

                <div class="text-[14px] space-y-[16px] leading-[150%] -tracking-[2.5%] lg:text-[16px]">
                    <p>Say hello to <b>Naughty Time</b>—the gummy made for women who want HIGHER LIBIDO, more confidence, and more fun after dark.</p>

                    <p>With a delicious Strawberry Peach Gummies and a formula designed to support mood, desire, and connection, <b>Luma helps you step into the moment feeling bold, playful, and ready for anything - with a libido that is sky-high.</b></p>

                    <p>Because great nights start with the right energy.</p>
                </div>

                <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="bg-[#FFF7ED] hover:bg-[#FAFAFA] transition-all duration-[0.8s] text-[#B91C1C] py-[8px] text-base font-bold w-full lg:max-w-[400px] rounded-[4px]">SHOP NOW</button>
            </div>

            <img src="/images/lander/sec1img-new.png" alt="" class="max-lg:max-w-[430px] lg:max-w-[960px] lg:max-h-[960px] max-lg:mx-auto lg:flex-1 lg:w-[50%]">

        </div>
    </div>
</section>