<?php
$faqLists = [
    [
        'question' => 'Who is Naughty Time designed for?',
        'answer' => 'Naughty Time is designed for women who want to enhance libido, feel more confident, and reconnect with their spark.<br><br> Stress, busy schedules, and everyday life can impact sexual desire. Naughty Time helps support relaxation and mood balance so you can feel more present, playful, and ready for intimacy when the moment arrives.'
    ],
    [
        'question' => 'How long does Naughty Time take to work?',
        'answer' => 'Many women report feeling the effects of Naughty Time within 30–60 minutes. Because it’s delivered in a fast-absorbing gummy, the ingredients begin working quickly to help support relaxation, mood, and natural desire.<br><br> For best results, take Naughty Time shortly before moments when you want to feel more confident, relaxed, and connected.'
    ],
    [
        'question' => 'What does Naughty Time feel like?',
        'answer' => 'Naughty Time isn’t about overwhelming stimulation—it’s about helping your body and mind feel more relaxed, confident, and in the mood. <br><br> Many women describe feeling calmer, more present, and more open to connection, which naturally helps spark desire and intimacy.'
    ],
    [
        'question' => 'Is Naughty Time safe?',
        'answer' => 'Naughty Time is formulated with carefully selected ingredients and manufactured according to strict quality standards.<br><br> As with any supplement, you should consult your healthcare provider before use if you are pregnant, nursing, taking medication, or have a medical condition.'
    ],
    [
        'question' => 'What is your return policy?',
        'answer' => 'We want you to love your Luma Naughty Time experience. If you’re not satisfied with your purchase, you can contact our support team within 30 days of delivery, and we’ll help make it right.<br><br> Your satisfaction is always our priority.'
    ],
    [
        'question' => 'How long does shipping take?',
        'answer' => 'Orders are typically processed within 1–2 business days. Standard shipping usually arrives within 3–5 business days, depending on your location.<br><br> Once your order ships, you’ll receive a tracking number so you can follow your package every step of the way.'
    ],
    [
        'question' => 'Do you offer free shipping?',
        'answer' => 'Yes! We offer free shipping on qualifying orders so you can enjoy Naughty Time by Luma without extra costs.<br><br> Shipping promotions and thresholds may vary, so check the checkout page for the latest offers.'
    ],
]
?>

<section class="font-inter text-[#27272A]">
    <div class="container max-w-[1200px] mx-auto py-[80px] max-lg:px-5">

        <div class="space-y-[6px] -tracking-[2.5%] lg:text-center max-lg:max-w-[390px]  max-lg:mx-auto">
            <p class="leading-[150%] font-semibold text-base">FREQUENTLY ASKED QUESTIONS</p>
            <h3 class="font-pop text-[#B91C1C] font-bold text-[30px] leading-[125%] lg:text-[48px]">YOU’VE GOT QUESTIONS, WE’VE GOT ANSWERS</h3>
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
                        class="text-accent my-2 text-xs transition-all duration-100 ease-in md:text-base">
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