<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<header class="h-[60px] lg:h-[76px]">
    <div class="container mx-auto py-2.5">
        <div class="flex items-center justify-center">
            <a href="/<?= $qs ? '?' . $qs : '' ?>">
                <img src="/images/luma-logo.svg" alt="Feelluma Logo" class="w-[81.59px] lg:w-[108.77px] block">
            </a>
        </div>
    </div>
</header>