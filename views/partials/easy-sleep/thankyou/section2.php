<?php
$basepath = '/images/easy-sleep/thankyou/';

$expectations = [
    [
        'header' => 'WEEK 1-2',
        'loops' => [
            'Easier relaxation before bed',
            'A smoother transition into your nighttime routine',
            'Feeling calmer as bedtime approaches',
            'Early signs of improved recovery',
        ],
    ],
    [
        'header' => 'WEEK 3-6',
        'loops' => [
            'More consistent sleep support',
            'Better overnight restoration',
            'More refreshing mornings',
            'Greater day-to-day readiness',
        ],
    ],
    [
        'header' => 'MONTHS 2-3',
        'loops' => [
            'A stronger sleep routine',
            'More reliable recovery habits',
            'Better consistency in how you feel each day',
            'Increased confidence in your nightly routine',
        ],
    ],
    [
        'header' => '6-12 MONTHS',
        'loops' => [
            'Long-term support for healthy sleep patterns',
            'Consistent overnight recovery support',
            'Better foundation for focus, energy, and performance',
            'A routine designed to support your wellness goals',
        ],
    ],
];

?>

<section class="bg-[#FAFAFA] font-inter">
    <div class="container mx-auto max-w-[1200px] pb-[54px] pt-[80px] max-lg:px-5 lg:pb-[80px] lg:pt-[120px]">
        <div class="flex flex-col gap-[32px] max-lg:mx-auto max-lg:max-w-[390px] lg:flex-row lg:gap-[54px]">
            <div class="my-auto space-y-[32px] max-lg:order-2 lg:max-w-[506px]">
                <div class="space-y-[6px]">
                    <h3 class="font-pop text-3xl font-bold leading-[125%] -tracking-[2.5%] lg:text-4xl">Why Daily Use Matters</h3>
                    <p class="text-lg font-medium leading-[150%] -tracking-[2.5%]">
                        Easy Sleep™ isn't designed to be used once in a while.
                    </p>
                </div>

                <p class="text-sm font-normal leading-[150%] -tracking-[2.5%]">
                    It's designed to become part of your nightly recovery routine.
                </p>

                <div class="space-y-6">
                    <p class="text-base font-semibold leading-[150%] -tracking-[2.5%]">
                        With consistent use, it helps support the foundation your body depends on for:
                    </p>

                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Relaxation before bed
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Restorative sleep
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Overnight recovery
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Morning refreshment
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <img src="/images/black-check.svg" alt="black-check">
                            <p class="text-sm leading-[150%] -tracking-[2.5%]">
                                Better daytime readiness
                            </p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            Skipping nights can interrupt that rhythm.
                        </p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            Consistency helps recovery become a habit.
                        </p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            Because the quality of your days often starts with the quality of your nights.
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
                    <p class="text-lg font-medium leading-[150%] -tracking-[2.5%]">
                        Your Recovery Journey
                    </p>
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