<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<div class="bg-[#FAFAFA] font-pop">
    <div class="container mx-auto h-[60px] max-w-[1080px] px-5 lg:h-[78px]">
        <div class="flex h-full items-center justify-between">
            <a href="/easy-sleep<?= $qs ? '?' . $qs : '' ?>"><img src="/images/luma-logo.svg" alt="" class="max-lg:max-w-[81.59px]"></a>
            <button onclick="window.location.href='/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>'" class="rounded-[4px] bg-[#B91C1C] px-5 py-[8px] text-base font-bold leading-[150%] -tracking-[2.5%] text-white transition-all duration-[0.8s] hover:bg-[#EF4444]">SHOP NOW</button>
        </div>
    </div>
</div>