<?php
$faqLists = [
    [
        'question' => 'What is Super Calm designed to do?',
        'answer' => '<strong>Super Calm</strong> is designed to help you feel <strong>deeply relaxed, emotionally balanced, and at ease</strong> during stressful moments. Powered by <strong>CalmiSense™ Ashwagandha,</strong> this adaptogenic botanical helps support the body\'s stress response so you can unwind, relax, and feel more grounded throughout the day.'
    ],
    [
        'question' => 'How long does Super Calm take to work?',
        'answer' => 'Many people report feeling the effects of <strong>Super Calm</strong> within <strong>30-60 minutes.</strong> The fast-absorbing gummy format makes it easy to enjoy whenever you need help slowing down, easing tension, or relaxing after a stressful day.'
    ],
    [
        'question' => 'What does Super Calm feel like?',
        'answer' => 'Super Calm is designed to help you feel <strong>calmer, lighter, and more relaxed</strong> without feeling overwhelmed or groggy.
        <br><br>
        Many people describe feeling less mentally tense, more emotionally balanced, and better able to unwind and enjoy the moment.
        '
    ],
    [
        'question' => 'Why do people feel anxious or overwhelmed?',
        'answer' => 'Stressful schedules, constant stimulation, lack of rest, and everyday pressures can all leave the mind and body feeling overstimulated.
        <br><br>
        When stress builds up over time, it can become harder to relax, focus, sleep, and feel emotionally balanced. Super Calm is designed to help support relaxation and bring your body back into a calmer state.
        '
    ],
    [
        'question' => 'How does stress affect the body?',
        'answer' => 'Stress triggers the release of hormones like <strong>cortisol</strong>, which can affect mood, sleep, focus, and overall wellbeing. When stress levels stay elevated, the body can feel tense, restless, and mentally exhausted.
        <br><br>
        <strong>CalmiSense™ Ashwagandha</strong> helps support the body\'s natural stress response, helping you feel calmer, more balanced, and more at ease.
        '
    ],
    [
        'question' => 'Is Super Calm safe?',
        'answer' => '
        Super Calm is formulated with carefully selected ingredients and manufactured according to strict quality standards.
        <br><br>
        As with any supplement, you should consult your healthcare provider before use if you are pregnant, nursing, taking medication, or have a medical condition.
        '
    ],
    [
        'question' => 'What payment methods do you support?',
        'answer' => '
        We accept all major <strong>credit and debit cards</strong> for a fast and secure checkout experience. Additional payment options may be available at checkout depending on your location.
        '
    ],
    [
        'question' => 'What states do you ship to?',
        'answer' => '
        We currently ship <strong>throughout the United States.</strong> Shipping availability may vary depending on local regulations and fulfillment coverage.
        '
    ],
    [
        'question' => 'What’s your shipping policy?',
        'answer' => '
        Orders are typically processed within 1–2 business days. Standard shipping usually arrives within 3–5 business days, depending on your location. <br><br> Once your order ships, you’ll receive a tracking number so you can follow your package every step of the way.
        '
    ]
]
?>

<section class="font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] py-[80px] max-xl:px-5">

        <div class="space-y-[6px] text-center -tracking-[2.5%] max-lg:mx-auto max-lg:max-w-[390px]">
            <h3 class="font-pop text-[30px] font-bold leading-[125%] text-[#0369A1] lg:text-[48px]">FREQUENTLY ASKED QUESTIONS</h3>
        </div>

        <div class="mx-auto mt-[54px] space-y-4 text-[#09090B] max-lg:max-w-[390px] lg:max-w-[1200px]">
            <?php foreach ($faqLists as $list): ?>
                <details class="group block text-lg">
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
                        class="my-2 text-xs font-normal transition-all duration-100 ease-in md:text-base">
                        <?= $list['answer'] ?>
                    </p>
                </details>

                <hr class="border-[#A1A1AA]">

            <?php endforeach; ?>
        </div>

    </div>
    <div class="flex w-full">
        <div class="h-[6px] w-[33.3%] bg-[#DC2626]"></div>
        <div class="h-[6px] w-[33.3%] bg-[#EA580C]"></div>
        <div class="h-[6px] w-[33.3%] bg-[#0284C7]"></div>
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