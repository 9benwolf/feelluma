<?php
$reviews = [
    [
        'name' => 'Jessica M.',
        'review' => 'These gummies have honestly been great for helping me unwind in the evenings. They relax me without making me feel sleepy or foggy, and they really help set a calm mood. My husband and I both noticed the difference the first night we tried them.',
    ],
    [
        'name' => 'Amanda L.',
        'review' => 'Really nice relaxing effect. Perfect for winding down together after a long day.',
    ],
    [
        'name' => 'Lauren T.',
        'review' => 'I was a little skeptical but these actually work very well. They help me relax and feel more present without any weird side effects. Definitely something we’ll keep ordering.',
    ],
    [
        'name' => 'Nicole P.',
        'review' => 'Very relaxing and gentle. I wake up feeling totally normal the next day.',
    ],
    [
        'name' => 'Ashley R.',
        'review' => 'These have become part of our Friday night routine. They help us relax and just enjoy the evening together without feeling overly strong or heavy.',
    ],
    [
        'name' => 'Danielle S.',
        'review' => 'Works pretty quickly for me. Usually within about an hour I can feel the calming effect. It’s subtle but definitely noticeable.',
    ],
    [
        'name' => 'Stephanie W.',
        'review' => 'Love these. Just a really smooth, relaxing feeling.',
    ],
    [
        'name' => 'Rachel C.',
        'review' => 'I appreciate that these don’t feel overwhelming like some other products we’ve tried. Just a nice calming effect that helps us unwind and enjoy the moment more.',
    ],
    [
        'name' => 'Brittany H.',
        'review' => 'Super relaxing and easy to take. Definitely recommend.',
    ],
    [
        'name' => 'Megan K.',
        'review' => 'My partner and I both really like these gummies. They help take the edge off after a stressful day and make it easier to relax together. No lingering effects the next morning which is a big plus.',
    ],
    [
        'name' => 'Olivia D.',
        'review' => 'Works within about an hour for me. Very smooth and relaxing.',
    ],
    [
        'name' => 'Courtney B.',
        'review' => 'These are perfect for evenings when we just want to relax and disconnect from the stress of the day. I like that they feel natural and not too strong.',
    ],
    [
        'name' => 'Erin J.',
        'review' => 'Really happy with these so far. Nice calming effect.',
    ],
    [
        'name' => 'Sarah V.',
        'review' => 'These surprised me in a good way. They help me feel relaxed and more present without making me feel sleepy or out of it. I also like that the effect feels clean and wears off naturally.',
    ],
    [
        'name' => 'Natalie G.',
        'review' => 'Great product. Very relaxing and enjoyable.',
    ],
];
?>

<section class="bg-[#FAFAFA] font-inter text-[#27272A]">
    <div class=" max-w-[1200px] mx-auto container py-20 max-lg:px-5">
        <div class="space-y-[54px] max-lg:max-w-[390px] max-lg:mx-auto">
            <div class="space-y-[6px] text-center">
                <h3 class="text-[#B91C1C] font-bold leading-[125%] -tracking-[2.5%] text-[30px] lg:text-[48px] font-pop">CUSTOMER REVIEWS</h3>
                <p class="leading-[150%] -tracking-[2.5%]">96% would recommend this product</p>
            </div>

            <div class="flex flex-col gap-[12px] lg:flex-wrap lg:flex-row max-xl:justify-center" id="reviews-container">

                <?php foreach ($reviews as $i => $r): ?>

                    <div class="review-item px-4 py-4 rounded-[6px] border border-[#E4E4E7] space-y-4 lg:max-w-[230.4px]">
                        <div class="flex gap-4">
                            <p class="font-semibold text-sm leading-[150%] -tracking-[2.5%]"><?= $r['name'] ?></p>

                            <div class="flex gap-[4px] max-w-[92px] w-full">
                                <img src="/images/verified-green.svg" alt="" class="max-w-[12px]">
                                <nobr class="text-[#52525B] text-[12px] leading-[150%] -tracking-[2.5%]">Verified Buyer</nobr>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <img src="/images/5-star.svg" alt="" class="max-w-[88px]">

                            <p class="text-[14px] leading-[150%] -tracking-[2.5%] font-normal"><?= $r['review'] ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            <button id="show-more-reviews"
                class="mt-4 px-4 py-2 bg-[#E4E4E7] rounded-[4px] block mx-auto">
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