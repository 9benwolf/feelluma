<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);
?>

<footer class="py-[54px] px-5 bg-[#09090B] font-inter">

    <div class="container mx-auto max-w-[1200px]">
        <div class="flex flex-col lg:flex-row gap-5 max-lg:max-w-[390px] max-lg:mx-auto w-full lg:justify-between lg:px-[154.39px]">
            <div class="bg-[#18181B] space-y-6 p-6 rounded-[32px] max-w-[390px] lg:max-w-[360px] w-full">
                <img src="/images/luma-logo-white.svg" alt="Luma logo white">

                <p class="font-pop font-semibold leading-[125%] -tracking-[2.5%] text-2xl text-[#FAFAFA]">FEEL THE SPARK AGAIN</p>

                <div class="space-y-3">
                    <div class="flex gap-[6px]">
                        <img src="/images/phone.svg" alt="phone svg">

                        <p class="text-lg text-[#E4E4E7] leading-[150%] -tracking-[2.5%]">1-888-304-8106</p>
                    </div>
                    <div class="flex gap-[6px]">
                        <img src="/images/phone.svg" alt="mail svg">

                        <p class="text-lg text-[#E4E4E7] leading-[150%] -tracking-[2.5%]">contact@feelluma.com</p>
                    </div>
                    <div>
                        <img width="187" height="54" src="/images/location.png?v=1" alt="Location, 1604 Ramsey Ct. Toms River New Jersey 08753. United States" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="lg:max-w-[451.21px] max-lg:mt-6 lg:flex lg:gap-[32px] w-full">
                <div class="flex gap-[32px] lg:w-full">
                    <div class="space-y-3 w-full max-w-[179px]">
                        <p class="text-[12px] text-[#E4E4E7] leading-[150%] -tracking-[2.5%]">Explore</p>
                        <div class="space-y-1 text-[16px] leading-[150%] -tracking-[2.5%] text-[#FAFAFA] font-semibold w-full">
                            <a href="/about<?= $qs ? '?' . $qs : '' ?>" class="block">About Us</a>
                            <a href="/contact<?= $qs ? '?' . $qs : '' ?>" class="block">Contact</a>

                        </div>
                    </div>

                    <div class="space-y-3 w-full max-w-[179px]">
                        <p class="text-[12px] text-[#E4E4E7] leading-[150%] -tracking-[2.5%]">LEGAL</p>
                        <div class="space-y-1 text-[16px] leading-[150%] -tracking-[2.5%] text-[#FAFAFA] font-semibold w-full">
                            <a href="/terms<?= $qs ? '?' . $qs : '' ?>" class="block">Terms of Service</a>
                            <a href="/privacy<?= $qs ? '?' . $qs : '' ?>" class="block">Privacy Policy</a>
                            <a href="/refund<?= $qs ? '?' . $qs : '' ?>" class="block">Refund Policy</a>
                            <a href="/shipping<?= $qs ? '?' . $qs : '' ?>" class="block">Shipping Policy</a>
                        </div>
                    </div>
                </div>

                <img src="/images/3cardset.png" alt="" class="max-lg:mx-auto max-lg:mt-5 max-w-[104.2px] flex-none flex-shrink-0 max-h-[18.61px]">
            </div>
        </div>

        <div class="mt-5 lg:mt-3 text-[12px] -tracking-[2.5%] leading-[150%] space-y-5">
            <p class="text-[#E4E4E7] text-center">© <?= date('Y') ?>, LUMA, All Rights Reserved</p>

            <p class="text-[#71717A] text-center">† Disclaimer: These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease. Product results may vary from person to person</p>
        </div>
    </div>
</footer>