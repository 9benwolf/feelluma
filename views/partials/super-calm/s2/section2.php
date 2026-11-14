<?php
$reviews = [
    [
        'name' => 'Jessica M.',
        'review' => 'These gummies have honestly been amazing for helping me unwind at night. They calm my mind without making me feel groggy or out of it. I feel noticeably more relaxed after taking them.',
    ],
    [
        'name' => 'Amanda L.',
        'review' => 'Really calming effect. Perfect for relaxing after a stressful day when my mind won’t slow down.',
    ],
    [
        'name' => 'Lauren T.',
        'review' => 'I was skeptical at first but these actually work really well. I feel calmer, less tense, and way more emotionally balanced after taking them.',
    ],
    [
        'name' => 'Nicole P.',
        'review' => 'Very smooth and relaxing. I wake up feeling completely normal the next morning with no grogginess.',
    ],
    [
        'name' => 'Ashley R.',
        'review' => 'These have become part of my nightly routine. They help me relax and decompress without feeling overly strong or heavy.',
    ],
    [
        'name' => 'Danielle S.',
        'review' => 'Works pretty quickly for me. Usually within about an hour I can feel my body and mind start to relax. Subtle but definitely noticeable.',
    ],
    [
        'name' => 'Stephanie W.',
        'review' => 'Love these. Just a super calm, relaxing feeling that helps take the edge off stressful days.',
    ],
    [
        'name' => 'Rachel C.',
        'review' => 'I appreciate that these don’t feel overwhelming like some other products I’ve tried. Just a really clean calming effect that helps me slow down and relax.',
    ],
    [
        'name' => 'Brittany H.',
        'review' => 'Super relaxing and easy to take. Definitely recommend if you deal with stress or anxious feelings.',
    ],
    [
        'name' => 'Megan K.',
        'review' => 'My partner and I both really like these gummies. They help us relax after long days and make it easier to fully unwind at night.',
    ],
    [
        'name' => 'Olivia D.',
        'review' => 'Works within about an hour for me. Very calming and smooth without making me feel sleepy during the day.',
    ],
    [
        'name' => 'Courtney B.',
        'review' => 'These are perfect for evenings when I just want to disconnect from stress and relax. The effect feels natural and not overpowering.',
    ],
    [
        'name' => 'Erin J.',
        'review' => 'Really happy with these so far. Nice calming effect and definitely helps when I’m feeling overwhelmed.',
    ],
    [
        'name' => 'Sarah V.',
        'review' => 'These surprised me in a good way. They help me feel calmer and more emotionally balanced without making me feel foggy or tired.',
    ],
    [
        'name' => 'Natalie G.',
        'review' => 'Great product. Very relaxing, easy to take, and helps me feel much calmer after stressful days.',
    ],
];
?>

<section class="font-inter bg-[#FAFAFA] text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] py-20 max-lg:px-5">
        <div class="space-y-[54px] max-lg:mx-auto max-lg:max-w-[390px] lg:space-y-20">
            <div class="space-y-[6px] text-center">
                <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] text-[#0369A1] lg:text-[48px]">CUSTOMER REVIEWS</h3>
                <p class="leading-[150%] -tracking-[2.5%]">96% would recommend this product</p>
            </div>

            <div class="flex flex-col gap-[12px] max-xl:justify-center lg:flex-row lg:flex-wrap" id="reviews-container">

                <?php foreach ($reviews as $i => $r): ?>

                    <div class="review-item space-y-4 rounded-[6px] border border-[#E4E4E7] px-4 py-4 lg:max-w-[230.4px]">
                        <div class="flex items-center gap-4">
                            <p class="text-sm font-semibold leading-[150%] -tracking-[2.5%]"><?= $r['name'] ?></p>

                            <div class="flex w-full max-w-[92px] gap-[4px]">
                                <img src="/images/verified-green.svg" alt="" class="max-w-[12px]">
                                <nobr class="text-[12px] leading-[150%] -tracking-[2.5%] text-[#52525B]">Verified Buyer</nobr>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <img src="/images/5-star.svg" alt="" class="max-w-[88px]">

                            <p class="text-[14px] font-normal leading-[150%] -tracking-[2.5%]"><?= $r['review'] ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            <button id="show-more-reviews"
                class="mx-auto mt-4 block rounded-[4px] bg-[#E4E4E7] px-4 py-2">
                Show more reviews
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const reviews = document.querySelectorAll(".review-item");
        const btn = document.getElementById("show-more-reviews");

        let visible = 5;
        const increment = 5;

        function updateReviews() {

            const isMobile = window.innerWidth < 1024; // Tailwind lg breakpoint

            reviews.forEach((el, index) => {
                if (isMobile) {
                    el.style.display = index < visible ? "block" : "none";
                } else {
                    el.style.display = "block";
                }
            });

            if (!isMobile) {
                btn.style.display = "none";
                return;
            }

            // Update button text
            if (visible >= reviews.length) {
                btn.textContent = "Show less reviews";
            } else {
                btn.textContent = "Show more reviews";
            }
        }

        btn.addEventListener("click", function() {
            if (visible >= reviews.length) {
                // Collapse back to initial 5 reviews
                visible = 5;
            } else {
                // Show more reviews
                visible += increment;
            }
            updateReviews();
        });

        // Run on load
        updateReviews();

        // Run again when resizing
        window.addEventListener("resize", updateReviews);

    });
</script>