<?php
$faqLists = [
    [
        'question' => 'Who is Easy Sleep designed for?',
        'answer' => 'Easy Sleep was created for women who want support falling asleep faster, staying asleep longer, and waking up feeling more rested. It\'s perfect for women dealing with stress, racing thoughts, restless nights, or inconsistent sleep.'
    ],
    [
        'question' => 'How long does Easy Sleep take to work?',
        'answer' => 'Many women say they start feeling more relaxed within about 30-60 minutes of taking Easy Sleep. Results may vary, but consistent nightly use is recommended for the best experience.'
    ],
    [
        'question' => 'What does Easy Sleep feel like?',
        'answer' => 'Easy Sleep is designed to help you feel calm, relaxed, and ready for bed - without feeling heavy or overly sedated. Just a smoother, more peaceful transition into restful sleep.'
    ],
    [
        'question' => 'Is Easy Sleep safe?',
        'answer' => 'Easy Sleep is made with carefully Selected ingredients designed for nighttime wellness support. <br><br> As with any supplement, we recommend checking with your healthcare provider before use if you are pregnant, nursing, taking medication, or have a medical condition.'
    ],
    [
        'question' => 'What is your return policy?',
        'answer' => 'We want you to love your experience with Easy Sleep. If you\'re not satisfied with your order, contact our support team and we\'ll work with you to make it right.'
    ],
    [
        'question' => 'How long does shipping take?',
        'answer' => 'Most orders are processed within 1-2 business days. Shipping times may vary depending on your location, but most customers receive their order within 3-7 business days.'
    ],
    [
        'question' => 'Do you offer free shipping?',
        'answer' => 'Yes! We offer free shipping on qualifying orders. Shipping promotions may vary throughout the year, so be sure to check the offer available at checkout.'
    ],
]
?>

<section class="font-inter text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] py-[80px] max-lg:px-5">

        <div class="space-y-[6px] -tracking-[2.5%] max-lg:mx-auto max-lg:max-w-[390px] lg:text-center">
            <p class="text-base font-semibold leading-[150%]">FREQUENTLY ASKED QUESTIONS</p>
            <h2 class="font-pop text-[30px] font-bold leading-[125%] text-[#6B21A8] lg:text-[48px]">YOU’VE GOT QUESTIONS, WE’VE GOT ANSWERS</h2>
        </div>

        <div class="mx-auto mt-[54px] space-y-4 text-[#09090B] max-lg:max-w-[390px] lg:max-w-[680px]">
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
                        class="text-accent my-2 text-xs transition-all duration-100 ease-in md:text-base">
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