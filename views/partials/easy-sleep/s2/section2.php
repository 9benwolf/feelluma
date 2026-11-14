<?php
$reviews = [
    [
        'name' => 'Olivia M.',
        'review' => 'These gummies have honestly been great for my nighttime routine. They help me wind down without feeling overly heavy or groggy the next morning.',
    ],
    [
        'name' => 'Rachel S.',
        'review' => 'Really smooth bedtime support. I take them before bed and they help me feel more relaxed and ready to sleep.',
    ],
    [
        'name' => 'Brianna L.',
        'review' => 'I was skeptical at first, but these fit into my routine really well. They help me settle down at night without feeling out of it.',
    ],
    [
        'name' => 'Hannah K.',
        'review' => 'Very calming and gentle. I wake up feeling normal, rested, and not foggy.',
    ],
    [
        'name' => 'Alyssa R.',
        'review' => 'These have become part of my nightly routine. They help me relax after a long day and make bedtime feel easier.',
    ],
    [
        'name' => 'Megan P.',
        'review' => 'Works pretty quickly for me. Usually within about an hour I feel more relaxed and ready for bed.',
    ],
    [
        'name' => 'Vanessa W.',
        'review' => 'Love these. Just a smooth, relaxing nighttime feeling without being too strong.',
    ],
    [
        'name' => 'Jasmine C.',
        'review' => 'I like that these do not feel overwhelming like some other sleep products. Just a calm, easy wind-down.',
    ],
    [
        'name' => 'Nicole H.',
        'review' => 'Super easy to take and perfect before bed. Definitely recommend.',
    ],
    [
        'name' => 'Courtney B.',
        'review' => 'My partner and I both like these gummies. They help us relax at night without feeling heavy the next morning.',
    ],
    [
        'name' => 'Danielle T.',
        'review' => 'Works within about an hour for me. Very smooth and relaxing.',
    ],
    [
        'name' => 'Kelsey N.',
        'review' => 'These are perfect for evenings when I want to disconnect from the day and get into rest mode.',
    ],
    [
        'name' => 'Amber J.',
        'review' => 'Really happy with these so far. Nice bedtime support and easy to take.',
    ],
    [
        'name' => 'Paige V.',
        'review' => 'These surprised me in a good way. They help me feel relaxed and more settled before sleep.',
    ],
    [
        'name' => 'Lindsay G.',
        'review' => 'Great product. Very calming, enjoyable, and perfect for my nighttime routine.',
    ],
];
?>

<section class="font-inter bg-[#FAFAFA] text-[#27272A]">
    <div class="container mx-auto max-w-[1200px] py-20 max-lg:px-5">
        <div class="space-y-[54px] max-lg:mx-auto max-lg:max-w-[390px] lg:space-y-20">
            <div class="space-y-[6px] text-center">
                <h3 class="font-pop text-[30px] font-bold leading-[125%] -tracking-[2.5%] text-[#7E22CE] lg:text-[48px]">CUSTOMER REVIEWS</h3>
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