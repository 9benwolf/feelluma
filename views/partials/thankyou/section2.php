<?php
$basepath = 'images/thankyou/';

$expectations = [
    [
        'header' => 'WEEK 1-2',
        'loops' => [
            'A more relaxed mood',
            'Less daily tension weighing on you',
            'A smoother, lighter emotional feel',
            'Early signs of feeling more open and receptive',
        ],
    ],
    [
        'header' => 'WEEK 3-6',
        'loops' => [
            'Stronger support for natural desire',
            'Better mood consistency',
            'More confidence in how you feel',
            'A more noticeable shift in after-dark interest',
        ],
    ],
    [
        'header' => 'MONTHS 2-3',
        'loops' => [
            'A more reliable sense of desire',
            'Better emotional balance and stress control',
            'Stronger confidence in intimate moments',
            'A more playful, connected, and ready mindset',
        ],
    ],
    [
        'header' => '6-12 MONTHS',
        'loops' => [
            'Long-term support for libido and mood',
            'A more consistent sense of confidence and ease',
            'Better daily rhythm in how you feel mentally and emotionally',
            'A formula that keeps working best as part of your routine',
        ],
    ],
];

?>

<section class="bg-[#FAFAFA] font-inter">
    <div class="container mx-auto max-w-[1200px] max-lg:px-5 pt-[80px] lg:pt-[120px] pb-[54px] lg:pb-[80px]">
        <div class="flex flex-col lg:flex-row lg:gap-[54px] gap-[32px] max-lg:mx-auto max-lg:max-w-[390px]">
            <div class="max-lg:order-2 space-y-[32px] lg:max-w-[506px]">
                <div class="space-y-[6px]">
                    <h3 class="font-bold text-[30px] leading-[125%] -tracking-[2.5%] font-pop">Why Daily Use Matters</h3>
                    <p class="font-medium text-lg leading-[150%] -tracking-[2.5%]">Naughty Time is not made for one-time use.</p>
                </div>

                <p class="font-normal text-sm leading-[150%] -tracking-[2.5%]">It works best through steady, daily use that helps your body feel more balanced, more at ease, and more open to desire over time. That is how you get the full benefit of a formula designed to support libido, mood, and confidence.</p>

                <div class="space-y-6">
                    <p class="font-semibold text-base leading-[150%] -tracking-[2.5%]">What daily use supports:</p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Ongoing support for natural libido and desire</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">A calmer mood with less daily stress</p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">Better emotional balance and feel-good energy</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">Skipping days breaks the rhythm.</p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">Consistency helps everything build.</p>
                    </div>
                </div>
            </div>
            <div class="max-lg:order-1">
                <img src="<?= $basepath ?>s2imga-new.png" alt="" class="rounded-[6px] lg:max-w-[640px]">
            </div>
        </div>
    </div>
</section>

<section class="bg-[#FAFAFA] font-inter">
    <div class="container mx-auto max-w-[1200px] max-lg:px-5 pt-[32px] pb-[60px]">
        <div class="flex flex-col lg:flex-row lg:gap-[54px] gap-[32px] max-lg:mx-auto max-lg:max-w-[390px]">
            <div>
                <img src="<?= $basepath ?>s2imgb-new.png" alt="" class="rounded-[6px]">
            </div>
            <div class="space-y-8 lg:max-w-[506px] lg:w-full">
                <div class="space-y-[6px]">
                    <h3 class="font-bold text-[30px] leading-[125%] -tracking-[2.5%] font-pop">What to Expect Over Time</h3>
                    <p class="font-medium text-lg leading-[150%] -tracking-[2.5%]">Your Feel-Good Timeline</p>
                </div>

                <div class="space-y-3">
                    <?php foreach ($expectations as $key => $loop): ?>
                        <div class="rounded-[6px] border border-[#E4E4E7] p-4">
                            <div class="space-y-3">
                                <p class="text-[#A1A1AA] text-xs leading-[150%] -tracking-[2.5%]"><?= $loop['header'] ?></p>

                                <?php foreach ($loop['loops'] as $key => $p): ?>
                                    <div class="flex gap-3">
                                        <img src="/images/black-check.svg" alt="black-check">
                                        <p class="text-sm leading-[150%] -tracking-[2.5%]"><?= $p ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full">
        <div class="w-[33.3%] h-[6px] w-full bg-[#DC2626]"></div>
        <div class="w-[33.3%] h-[6px] w-full bg-[#EA580C]"></div>
        <div class="w-[33.3%] h-[6px] w-full bg-[#0284C7]"></div>
    </div>
</section>