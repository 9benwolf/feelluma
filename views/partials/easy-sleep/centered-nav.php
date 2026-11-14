<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>
<header class="relative h-[60px] lg:h-[76px]">
    <div class="container mx-auto h-full max-w-[1080px] max-lg:px-5">
        <div class="flex h-full w-full items-center justify-center">
            <a href="/easy-sleep<?= $qs ? '?' . $qs : '' ?>">
                <img src="/images/luma-logo.svg" alt="Feelluma Logo" class="block w-[81.59px] lg:w-[108.77px]">
            </a>
        </div>
    </div>
</header>