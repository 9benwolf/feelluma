<?php

use app\components\widgets\Picture;



$basepath = '/images/super-calm/thankyou/';
?>

<section class="bg-[#F4F4F5] font-inter text-[#09090B]">
    <div class="container mx-auto max-w-[1200px] px-5 py-[80px] lg:pb-[120px] lg:pt-[120px]">
        <div class="grid gap-[32px] lg:grid-cols-[540px_auto] lg:gap-[54px]">

            <div>
                <img src="<?= $basepath ?>s4img-new.png" alt="" class="rounded-[6px]">
            </div>

            <div class="space-y-8">
                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[24px] font-bold leading-[125%] -tracking-[2.5%] lg:text-3xl">Why Staying Consistent Matters More Than Anything</h3>
                    <p class="text-sm font-medium leading-[150%] -tracking-[2.5%]">Your body does not respond best to random use.</p>
                    <p class="text-sm font-medium leading-[150%] -tracking-[2.5%]">It responds better to steady use over time.</p>
                </div>

                <div class="space-y-6 rounded-[6px] border border-[#E4E4E7] bg-[#fafafa] p-4">
                    <p class="font-bold">Daily use:</p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Helps support a more balanced mood
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Helps your body stay more at ease under daily stress
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Supports natural desire more consistently over time
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/check-only.svg" alt="">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Builds a better foundation for confidence and feel-good energy
                            </p>
                        </div>
                    </div>

                    <p class="text-sm leading-[150%] -tracking-[2.5%]">
                        Stopping and restarting can slow down progress. Staying consistent gives the formula a better chance to work.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>