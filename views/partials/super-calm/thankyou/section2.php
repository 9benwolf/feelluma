<?php
$basepath = '/images/super-calm/thankyou/';

$expectations = [
    [
        'header' => 'WEEK 1-2',
        'loops' => [
            'A calmer, more relaxed mood',
            'Less daily tension weighing on you',
            'A smoother, lighter emotional feel',
            'Early signs of feeling more open and receptive',
        ],
    ],
    [
        'header' => 'WEEK 3-6',
        'loops' => [
            'Better mood consistency',
            'More ease during stressful days',
            'A calmer response when life feels loud',
            'A more noticeable shift in your daily relaxation routine',
        ],
    ],
    [
        'header' => 'MONTHS 2-3',
        'loops' => [
            'A more reliable sense of calm',
            'Better emotional balance and stress control',
            'More confidence in how you handle pressure',
            'A steadier, more grounded daily mindset',
        ],
    ],
    [
        'header' => '6-12 MONTHS',
        'loops' => [
            'Long-term mood and relaxation support',
            'A more consistent sense of confidence and ease',
            'Better daily rhythm in how you feel mentally and emotionally',
            'A formula that works best as part of your routine'
        ],
    ],
];

?>

<section class="bg-[#FAFAFA] font-inter">
    <div class="container mx-auto max-w-[1200px] pb-[54px] pt-[80px] max-lg:px-5 lg:pb-[80px] lg:pt-[120px]">
        <div class="flex flex-col gap-[32px] max-lg:mx-auto max-lg:max-w-[390px] lg:flex-row lg:gap-[54px]">
            <div class="my-auto space-y-[32px] max-lg:order-2 lg:max-w-[506px]">
                <div class="space-y-[6px]">
                    <h3 class="font-pop text-3xl font-bold leading-[125%] -tracking-[2.5%] lg:text-4xl">
                        Why Daily Use Matters
                    </h3>
                    <p class="text-lg font-medium leading-[150%] -tracking-[2.5%]">
                        Super Calm is not made for one-time use.
                    </p>
                </div>

                <div class="space-y-4 text-sm font-normal leading-[150%] -tracking-[0.35px]">
                    <p class="pr-3 sm:pr-0">
                        It works best as part of a steady daily routine that helps your body feel more balanced, more at ease, and better prepared to handle everyday stress. Powered by CalmiSense™ Ashwagandha, Super Calm is designed to help promote calm mood, relaxation, and emotional balance over time.
                    </p>
                </div>


                <div class="space-y-6">
                    <p class="text-base font-semibold leading-[150%] -tracking-[2.5%]">
                        What daily use supports:
                    </p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Ongoing calm and relaxation support
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                A smoother mood during stressful days
                            </p>
                        </div>
                        <div class="flex gap-3 pr-2 md:pr-0">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                A more steady, grounded daily routine
                            </p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            Skipping days breaks the rhythm.</p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            Consistency helps everything build.
                        </p>
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
    <div class="container mx-auto max-w-[1200px] pb-[60px] pt-[32px] max-lg:px-5">
        <div class="flex flex-col gap-[32px] max-lg:mx-auto max-lg:max-w-[390px] lg:flex-row lg:gap-[54px]">
            <div>
                <img src="<?= $basepath ?>s2imgb-new.png" alt="" class="rounded-[6px]">
            </div>
            <div class="space-y-8 lg:w-full lg:max-w-[506px]">
                <div class="space-y-[6px]">
                    <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] lg:text-4xl">
                        What to Expect Over Time
                    </h3>
                    <p class="text-lg font-medium leading-[150%] -tracking-[2.5%]">Your Feel-Good Timeline</p>
                </div>

                <div class="space-y-3">
                    <?php foreach ($expectations as $key => $loop): ?>
                        <div class="rounded-[6px] border border-[#E4E4E7] p-4">
                            <div class="space-y-3">
                                <p class="text-xs leading-[150%] -tracking-[2.5%] text-[#A1A1AA]"><?= $loop['header'] ?></p>

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
        <div class="h-[6px] w-[33.3%] w-full bg-[#DC2626]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#EA580C]"></div>
        <div class="h-[6px] w-[33.3%] w-full bg-[#0284C7]"></div>
    </div>
</section>