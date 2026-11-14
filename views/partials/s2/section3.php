<?php
$faqLists = [
    [
        'question' => 'What is Naughty Time designed to do?',
        'answer' => '<b>Naughty Time by Luma</b> is designed to support women’s <b>natural libido, mood, and confidence.</b> Powered by <b>LumaSense™ Ashwagandha</b>, this adaptogenic botanical helps reduce stress while supporting emotional balance—two key factors that influence desire and intimacy.'
    ],
    [
        'question' => 'How long does Naughty Time take to work?',
        'answer' => 'Many women report feeling the effects of Naughty Time within 30–60 minutes. Because it comes in a fast-absorbing gummy, it’s easy to enjoy shortly before moments when you want to feel relaxed, confident, and in the mood.'
    ],
    [
        'question' => 'What does Naughty Time feel like?',
        'answer' => 'Naughty Time is designed to help you feel <b>calmer, more present, and more connected.</b> By supporting mood and reducing stress, it helps create the perfect environment for natural desire and intimacy.'
    ],
    [
        'question' => 'Why do women lose libido?',
        'answer' => 'Many factors can affect libido, including <b>stress, busy schedules, hormonal shifts, fatigue, and emotional overwhelm.</b> When the body is under stress, it becomes much harder to relax and feel present—two things that are essential for desire. <br><br> Naughty Time is designed to support relaxation and mood balance so you can reconnect with your natural spark.'
    ],
    [
        'question' => 'Why does stress affect desire?',
        'answer' => 'Stress triggers the release of hormones like <b>cortisol</b>, which can interfere with mood, energy, and sexual desire. When the mind feels overwhelmed, it becomes much harder for the body to relax and respond to intimacy. <br></br> <b>LumaSense™ Ashwagandha</b> helps support the body’s stress response, helping you feel calmer, more balanced, and more open to connection.'
    ],
    [
        'question' => 'What payment methods do you support?',
        'answer' => 'We accept all major <b>credit and debit cards</b> for a fast and secure checkout experience. Additional payment options may be available at checkout depending on your location.'
    ],
    [
        'question' => 'What states do you ship to?',
        'answer' => 'We currently ship <b>throughout the United States.</b> Shipping availability may vary depending on local regulations and fulfillment coverage.'
    ],
    [
        'question' => 'What’s your shipping policy?',
        'answer' => 'Orders are typically processed within 1–2 business days. Standard shipping usually arrives within 3–5 business days, depending on your location. <br><br> Once your order ships, you’ll receive a tracking number so you can follow your package every step of the way.'
    ],
]
?>

<section class="font-inter text-[#27272A]">
    <div class="container max-w-[1200px] mx-auto py-[80px] max-lg:px-5">

        <div class="space-y-[6px] -tracking-[2.5%] text-center max-lg:max-w-[390px]  max-lg:mx-auto">
            <h3 class="font-pop text-[#B91C1C] font-bold text-[30px] leading-[125%] lg:text-[48px]">FREQUENTLY ASKED QUESTIONS</h3>
        </div>

        <div class="space-y-4 max-lg:max-w-[390px] lg:max-w-[680px] mx-auto text-[#09090B] mt-[54px]">
            <?php foreach ($faqLists as $list): ?>
                <details class="group text-lg block">
                    <summary
                        class="flex cursor-pointer flex-row items-center justify-between gap-4 py-1 font-semibold marker:[font-size:0px]">
                        <h3 class="font-semibold lg:text-lg">
                            <?= $list['question'] ?>
                        </h3>

                        <div class="w-6">
                            <svg
                                class="size-6 transform group-open:rotate-0"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="4"
                                stroke="currentColor"
                                aria-hidden="true">
                                <!-- Plus icon -->
                                <path class="transition-all duration-100 ease-in group-open:opacity-0" d="M19 9L12 16L5 9" stroke="#15161B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

                                <!-- Minus icon -->
                                <path class="opacity-0 transition-all duration-100 ease-in group-open:opacity-100" d="M5 16L12 9L19 16" stroke="#15161B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </summary>

                    <p
                        class="font-normal my-2 text-xs transition-all duration-100 ease-in md:text-base">
                        <?= $list['answer'] ?>
                    </p>
                </details>

                <hr class="border-[#A1A1AA]">

            <?php endforeach; ?>
        </div>

    </div>
    <div class="flex w-full">
        <div class="w-[33.3%] h-[6px] bg-[#DC2626]"></div>
        <div class="w-[33.3%] h-[6px] bg-[#EA580C]"></div>
        <div class="w-[33.3%] h-[6px] bg-[#0284C7]"></div>
    </div>
</section>

<script>
    document.querySelectorAll("details summary").forEach(summary => {
        summary.addEventListener("click", function(e) {
            e.preventDefault();

            const current = this.parentElement;

            document.querySelectorAll("details").forEach(d => {
                if (d !== current) d.removeAttribute("open");
            });

            current.open = !current.open;
        });
    });
</script>