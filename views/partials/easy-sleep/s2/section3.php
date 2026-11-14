<?php
$faqLists = [
    [
        'question' => 'What is Easy Sleep designed to do?',
        'answer' => '<strong>Easy Sleep</strong> is designed to help you <strong>fall asleep faster, stay asleep longer, and fully relax before bed.</strong> Powered by <strong>DreamEase™ Ashwagandha</strong>, this calming adaptogenic botanical helps support relaxation and emotional balance so your mind and body can unwind naturally at night.'
    ],
    [
        'question' => 'How long does Easy Sleep to take work?',
        'answer' => 'Many people report feeling the calming effects of <strong>Easy Sleep</strong> within <strong>30-60 minutes.</strong> The fast-absorbing gummy format makes it easy to enjoy as part of your nighttime routine before bed.'
    ],
    [
        'question' => 'What does Easy Sleep feel like?',
        'answer' => 'Easy Sleep is designed to help you feel <strong>calm, relaxed, and ready for rest.</strong> Many people describe feeling their mind slow down, their body relax, and bedtime feel much more peaceful and comfortable'
    ],
    [
        'question' => 'Why do people struggle to fall asleep?',
        'answer' => 'Stress, anxiety, overstimulation, inconsistent sleep schedules, and racing thoughts can all make it harder to relax at night. When the mind and body stay tense, falling asleep naturally becomes much more difficult.
        <br><br>
        Easy sleep is designed to help support relaxation and create a calmer nighttime experience.
        '
    ],
    [
        'question' => 'Is Easy Sleep safe?',
        'answer' => 'Easy Sleep is formulated with carefully selected ingredients and manufactured according to strict quality standards.
        <br><br>
        As with any supplement, you should consult your healthcare provider before use if you are pregnant, nursing, taking medication, or have a medical condition.
        '
    ],
    [
        'question' => 'What payment methods do you support?',
        'answer' => 'We accept all major <strong>credit and debit cards</strong> for a fast and secure checkout experience. Additional payment options may be available at checkout depending on your location.
        '
    ],
    [
        'question' => 'What states do you ship to?',
        'answer' => 'We currently ship <strong>throughout the United States.</strong> Shipping availability may vary depending on local regulations and fulfillment coverage.
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
            <h3 class="font-pop text-[30px] font-bold leading-[125%] text-[#7E22CE] lg:text-[48px]">FREQUENTLY ASKED QUESTIONS</h3>
        </div>

        <div class="mx-auto mt-[54px] space-y-4 text-[#09090B] max-lg:max-w-[390px] xl:max-w-[1200px]">
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