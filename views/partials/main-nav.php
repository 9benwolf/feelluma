<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<div class="bg-[#FAFAFA] font-pop">
    <div class="lg:h-[78px] h-[60px] container max-w-[1080px] mx-auto px-5">
        <div class="flex justify-between items-center h-full">
            <a href="/<?= $qs ? '?' . $qs : '' ?>"><img src="/images/luma-logo.svg" alt="" class="max-lg:max-w-[81.59px]"></a>
            <button onclick="window.location.href='/s2<?= $qs ? '?' . $qs : '' ?>'" class="bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] text-white text-base -tracking-[2.5%] leading-[150%] font-bold px-5 py-[8px] rounded-[4px]">SHOP NOW</button>
        </div>
    </div>
</div>