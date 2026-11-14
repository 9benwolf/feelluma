<?php
$benefit = [
    [
        'benefit' => 'BENEFITS',
        'texts' =>
        '
        <strong>Promotes Calm & Relaxation</strong> <br>
        Super Calm helps ease everyday stress and tension so you can feel more relaxed, balanced, and at ease throughout the day. 
        <br><br>
        <strong>Reduces Stress & Mental Overload</strong> <br>
        Powered by <strong>CalmiSense™ Ashwagandha</strong>, an adaptogenic root traditionally used to help the body manage stress and support emotional wellbeing.
        <br><br>
        <strong>Supports Mood & Emotional Balance</strong> <br>
        By helping calm the mind and support relaxation, Super Calm helps you feel lighter, more grounded, and emotionally centered.
        <br><br>
        <strong>Helps You Unwind Naturally</strong> <br>
        When your mind feels calm and your body feels balanced, it becomes easier to relax, recharge, and fully enjoy the moment without feeling overwhelmed.
        '
    ],
    [
        'benefit' => 'RECOMMENDED USAGE',
        'texts' =>
        '
        <strong>Take 1 gummy daily with or without food.</strong> You may also take 1 gummy whenever you want additional support for relaxation, stress relief, and emotional balance.
        <br><br>
        The fast-absorbing gummy format makes <strong>Super Calm</strong> easy to enjoy whenever your mind feels overwhelmed, tense, or overstimulated.
        <br><br>
        Do not exceed the recommended serving size.
        '
    ],
    [
        'benefit' => 'FORMULA HIGHLIGHTS',
        'texts' =>
        '
        <strong>CalmiSense™ Ashwagandha</strong>
        <br><br>
        Ashwagandha is a powerful adaptogenic botanical traditionally used to help the body manage stress while supporting mood, relaxation, and emotional wellbeing.
        <br><br>
        Because stress can leave the mind and body feeling overwhelmed, helping the body relax naturally may support a calmer mood, reduced tension, and a greater sense of balance overall.
        '
    ],
    [
        'benefit' => 'INGREDIENTS',
        'texts' =>
        '
        <strong>Active Ingredient:</strong>
        <br><br>
        CalmiSense™ Ashwagandha (Withania somnifera root extract)
        <br><br>
        <strong>Other Ingredients:</strong>
        Natural kiwi flavor, pectin, organic cane sugar, citric acid, natural color, and plant-based gummy base.
        <br><br>
        Super Calm Gummies are made with high-quality ingredients and crafted to deliver a delicious, refreshing flavor experience in every bite.
        '
    ],
];

$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);

?>

<section class="gallery-section font-inter text-[#27272A] xl:bg-[#F0F9FF]">
    <div class="container mx-auto max-w-[1200px] py-[20px]">

        <div class="relative justify-start gap-6 xl:flex">
            <div class="relative flex items-start justify-center xl:justify-start">
                <div class="dosage-content relative block max-w-[390px] lg:max-w-[540px]" data-dose="div1">

                    <!-- MAIN SWIPER -->
                    <div class="relative overflow-hidden rounded-t-[6px] border border-[#0369A1]">
                        <swiper-container
                            class="mySwiper synced-swiper"
                            loop="true"
                            space-between="10">
                            <!-- Slides -->
                            <swiper-slide><img src="/images/super-calm/s2/image1b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image2b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image3b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image4b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image5b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image6b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image7b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image8b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image9b.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image10b.png?v=2.1" /></swiper-slide>
                        </swiper-container>

                        <div class="custom-swiper-button-prev absolute left-2 top-1/2 z-10 hidden -translate-y-1/2 cursor-pointer lg:block">
                            <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" class="rotate-180" />
                        </div>
                        <div class="custom-swiper-button-next absolute right-2 top-1/2 z-10 hidden -translate-y-1/2 cursor-pointer lg:block">
                            <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" />
                        </div>
                    </div>

                    <!-- DESKTOP GRID -->
                    <div class="thumb-grid mt-[12px] hidden flex-wrap justify-center gap-[12px] lg:flex">
                        <div class="thumb"><img src="/images/super-calm/s2/image1b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image2b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image3b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image4b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image5b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image6b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image7b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image8b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image9b.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image10b.png?v=2.1" /></div>
                    </div>

                    <!-- MOBILE THUMB SWIPER -->
                    <swiper-container
                        class="thumb-swiper mt-[12px] lg:hidden"
                        slides-per-view="auto"
                        space-between="8"
                        free-mode="true">
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image1b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image2b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image3b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image4b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image5b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image6b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image7b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image8b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image9b.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image10b.png?v=2.1" /></swiper-slide>
                    </swiper-container>

                    <div class="custom-swiper-button-prev absolute left-2 top-1/2 z-10 -translate-y-1/2 cursor-pointer lg:hidden">
                        <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" class="rotate-180" />
                    </div>
                    <div class="custom-swiper-button-next absolute right-2 top-1/2 z-10 -translate-y-1/2 cursor-pointer lg:hidden">
                        <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" />
                    </div>

                </div>
                <div class="dosage-content absolute w-0 max-w-[390px] opacity-0 lg:max-w-[540px]" data-dose="div2">

                    <!-- MAIN SWIPER -->
                    <div class="relative overflow-hidden rounded-t-[6px] border border-[#0369A1]">
                        <swiper-container
                            class="mySwiper synced-swiper"
                            loop="true"
                            space-between="10">
                            <!-- Slides -->
                            <swiper-slide><img src="/images/super-calm/s2/image1.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image2.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image3.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image4.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image5.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image6.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image7.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image8.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image9.png?v=2.1" /></swiper-slide>
                            <swiper-slide><img src="/images/super-calm/s2/image10.png?v=2.1" /></swiper-slide>
                        </swiper-container>

                        <div class="custom-swiper-button-prev absolute left-2 top-1/2 z-10 hidden -translate-y-1/2 cursor-pointer lg:block">
                            <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" class="rotate-180" />
                        </div>
                        <div class="custom-swiper-button-next absolute right-2 top-1/2 z-10 hidden -translate-y-1/2 cursor-pointer lg:block">
                            <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" />
                        </div>
                    </div>

                    <!-- DESKTOP GRID -->
                    <div class="thumb-grid mt-[12px] hidden flex-wrap justify-center gap-[12px] lg:flex">
                        <div class="thumb"><img src="/images/super-calm/s2/image1.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image2.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image3.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image4.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image5.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image6.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image7.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image8.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image9.png?v=2.1" /></div>
                        <div class="thumb"><img src="/images/super-calm/s2/image10.png?v=2.1" /></div>
                    </div>

                    <!-- MOBILE THUMB SWIPER -->
                    <swiper-container
                        class="thumb-swiper mt-[12px] lg:hidden"
                        slides-per-view="auto"
                        space-between="8"
                        free-mode="true">
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image1.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image2.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image3.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image4.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image5.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image6.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image7.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image8.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image9.png?v=2.1" /></swiper-slide>
                        <swiper-slide class="thumb"><img src="/images/super-calm/s2/image10.png?v=2.1" /></swiper-slide>
                    </swiper-container>

                    <div class="custom-swiper-button-prev absolute left-2 top-1/2 z-10 -translate-y-1/2 cursor-pointer lg:hidden">
                        <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" class="rotate-180" />
                    </div>
                    <div class="custom-swiper-button-next absolute right-2 top-1/2 z-10 -translate-y-1/2 cursor-pointer lg:hidden">
                        <img src="/images/super-calm/s2/arrow.svg" width="40" height="40" />
                    </div>

                </div>
            </div>

            <div class="py-[32px] max-xl:mx-auto sm:max-w-[390px] lg:max-w-[636px] xl:rounded-[6px] xl:border xl:border-[#0369A1] xl:bg-[#FAFAFA]">
                <div class="w-full bg-[#0369A1] py-[6px]">
                    <p class="text-center text-lg leading-[150%] -tracking-[2.5%] text-[#fafafa]">
                        YOU’RE ABOUT TO FEEL SUPER RELAXED.
                    </p>
                </div>

                <div class="mt-8 space-y-8 max-lg:px-5 xl:px-5">
                    <div class="space-y-4 text-center">
                        <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%]">
                            CALMING & STRESS SUPPORT GUMMY
                        </p>
                        <h1 class="font-pop text-[48px] font-bold leading-[100%] -tracking-[2.5%] text-[#0369A1]">SUPER CALM</h1>
                    </div>

                    <div class="flex justify-center gap-[6px]">
                        <img src="/images/5-star.svg" alt="">
                        <p class="font-medium leading-[150%] -tracking-[2.5%] text-[#52525B]">4.7/5 (200+ REVIEWS)</p>
                    </div>

                    <div class="space-y-4">
                        <p class="font-semibold leading-[150%] -tracking-[2.5%]">
                            CHOOSE YOUR BENEFIT:
                        </p>

                        <div class="space-y-1.5 font-semibold -tracking-[0.4px] text-[#27272A]">
                            <a href="/s2<?= $qs ? '?' . $qs : '' ?>" class="flex items-center gap-x-3 rounded-full bg-[#FEE2E2] p-3 <?= Yii::$app->request->url === '/' ? 'border border-[#B91C1C]' : '' ?>">
                                <div>
                                    <img width="48" height="48" src="/images/naughty-time-avatar.png" alt="">
                                </div>

                                <p>
                                    💗 SEX & INTIMACY
                                </p>
                            </a>

                            <a href="/super-calm/s2<?= $qs ? '?' . $qs : '' ?>" class="flex items-center gap-x-3 rounded-full bg-[#E0F2FE] p-3 <?= Yii::$app->request->url === '/super-calm/s2' ? 'border border-[#0369A1]' : '' ?>">
                                <div>
                                    <img width="48" height="48" src="/images/super-calm-avatar.png" alt="">
                                </div>

                                <p>
                                    😌 CALM & RELAXATION
                                </p>
                            </a>

                            <a href="/easy-sleep/s2<?= $qs ? '?' . $qs : '' ?>" class="flex items-center gap-x-3 rounded-full bg-[#F3E8FF] p-3 <?= Yii::$app->request->url === '/easy-sleep/s2' ? 'border border-[#7E22CE]' : '' ?>">
                                <div>
                                    <img width="48" height="48" src="/images/easy-sleep-avatar.png" alt="">
                                </div>

                                <p>
                                    🛌 NIGHTTIME RELAXATION
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h4 class="font-pop text-[24px] font-semibold leading-[125%] -tracking-[2.5%] text-[#0369A1]">
                            KIWI SPLASH • 30 GUMMIES
                        </h4>

                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            <strong>Super Calm Gummies</strong> are made for people who want to slow down, relax, and finally feel at ease. Powered by <strong>CalmiSense™ Ashwagandha</strong>, this powerful adaptogenic root helps support mood, ease stress, and calm an overwhelmed mind.
                        </p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            When your stress levels drop and your body feels balanced, everything feels lighter.
                            <strong>Super Calm</strong> helps you feel more relaxed, emotionally grounded, and comfortable in the moment so you can unwind without feeling sluggish or disconnected.
                        </p>
                        <p class="text-sm leading-[150%] -tracking-[2.5%]">
                            With a refreshing Kiwi Splash flavor, these craveable gummies are your go-to when life feels overwhelming, your mind won’t slow down, or you just need to seriously… <strong>chill out.</strong>
                        </p>
                    </div>

                    <div class="space-y-3">
                        <p class="font-semibold leading-[150%] -tracking-[2.5%]">DOSAGE:</p>

                        <div class="flex gap-[6px]">
                            <button
                                class="dosage-btn active-dosage block w-1/2 space-y-1 rounded-[6px] border border-[#0369A1] bg-[#0369A1] py-3 text-[#FAFAFA]"
                                data-target="div1">
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">REGULAR</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">25mg/serving</p>
                            </button>

                            <button
                                class="dosage-btn block w-1/2 space-y-1 rounded-[6px] border border-[#52525B] bg-white py-3 text-black"
                                data-target="div2">
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">EXTRA STRENGTH</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">50mg/serving</p>
                            </button>
                        </div>
                    </div>


                    <div class="space-y-3">
                        <p class="font-semibold leading-[150%] -tracking-[2.5%]">QUANTITY:</p>

                        <div class="flex gap-[6px]">
                            <!-- Package 1 -->
                            <label class="flex w-[calc(100%/4-6px)] cursor-pointer flex-col items-center rounded-[6px] border border-[#09090B] bg-[#0369A1] py-3 text-[#FAFAFA]" data-package="1">
                                <input type="radio" name="quantity" value="1" class="hidden" checked>
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">1 PACK</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">30 GUMMIES</p>
                            </label>

                            <!-- Package 2 -->
                            <label class="flex w-[calc(100%/4-6px)] cursor-pointer flex-col items-center rounded-[6px] border border-[#52525B] py-3 text-black" data-package="2">
                                <input type="radio" name="quantity" value="2" class="hidden">
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">2 PACK</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">60 GUMMIES</p>
                            </label>

                            <!-- Package 3 -->
                            <label class="flex w-[calc(100%/4-6px)] cursor-pointer flex-col items-center rounded-[6px] border border-[#52525B] py-3 text-black" data-package="3">
                                <input type="radio" name="quantity" value="3" class="hidden">
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">3 PACK</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">90 GUMMIES</p>
                            </label>

                            <!-- Package 4 -->
                            <label class="flex w-[calc(100%/4-6px)] cursor-pointer flex-col items-center rounded-[6px] border border-[#52525B] py-3 text-black" data-package="4">
                                <input type="radio" name="quantity" value="4" class="hidden">
                                <p class="font-semibold leading-[150%] -tracking-[2.5%]">4 PACK</p>
                                <p class="text-xs leading-[150%] -tracking-[2.5%]">120 GUMMIES</p>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <p class="font-semibold leading-[150%] -tracking-[2.5%]">
                            YOUR SELECTION:
                        </p>

                        <!-- Subscription Option -->
                        <label class="relative flex cursor-pointer flex-col gap-3 rounded-[6px] border border-[#09090B] p-3">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="payment_option" value="subscription" checked class="hidden">
                                <span class="radio-circle flex h-5 w-5 items-center justify-center rounded-full border border-black">
                                    <span class="checkmark hidden text-xs text-white">✓</span>
                                </span>

                                <div class="flex items-center gap-[6px]">
                                    <p class="pack-count text-lg font-semibold leading-[150%] -tracking-[2%]">1 PACK</p>
                                    <div class="rounded-[10000px] bg-[#0369A1] px-3 py-[2px]">
                                        <p class="discount-text text-xs font-bold uppercase leading-[150%] -tracking-[2.5%] text-[#fafafa]">25% OFF</p>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute right-[12px] top-[12px] flex gap-[5px]">
                                <p class="price-sub font-semibold leading-[150%] -tracking-[2.5%] text-[#09090B]">$39.95</p>
                                <p class="price-sub-old font-semibold leading-[150%] -tracking-[2.5%] text-[#52525B] line-through">$89.95</p>
                            </div>
                        </label>
                    </div>


                    <button onclick="addToCart()" class="block w-full rounded-full bg-[#0369A1] py-3 text-lg font-bold leading-[150%] -tracking-[2.5%] text-[#fafafa] transition-all duration-[0.8s] hover:bg-[#EF4444]">
                        ADD TO CART
                    </button>

                    <div class="flex justify-center gap-3 py-[6px]">
                        <div class="w-full max-w-[122px] space-y-[6px]">
                            <img src="/images/s2/truck.svg" alt="" class="mx-auto">
                            <p class="text-center text-xs font-semibold leading-[150%] -tracking-[2.5%]">FREE DISCREET SHIPPING</p>
                        </div>
                        <div class="w-full max-w-[122px] space-y-[6px]">
                            <img src="/images/s2/leaf.svg" alt="" class="mx-auto">
                            <p class="text-center text-xs font-semibold leading-[150%] -tracking-[2.5%]">NATURAL INGREDIENTS</p>
                        </div>
                        <div class="w-full max-w-[122px] space-y-[6px]">
                            <img src="/images/s2/clipboard.svg" alt="" class="mx-auto">
                            <p class="text-center text-xs font-semibold leading-[150%] -tracking-[2.5%]">CLINICALLY-TESTED INGREDIENTS</p>
                        </div>
                    </div>

                    <div class="mx-auto mt-[54px] space-y-4 rounded-[6px] border border-[#A1A1AA] bg-[#F0F9FF] px-4 py-8 text-[#09090B] max-lg:max-w-[390px] lg:max-w-[680px]">
                        <?php foreach ($benefit as $list): ?>
                            <details class="group block text-lg">
                                <summary
                                    class="flex cursor-pointer flex-row items-center justify-between gap-4 py-1 font-semibold marker:[font-size:0px]">
                                    <h3 class="font-semibold lg:text-lg">
                                        <?= $list['benefit'] ?>
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
                                    class="my-2 text-sm leading-[150%] -tracking-[2.5%] transition-all duration-100 ease-in">
                                    <?= $list['texts'] ?>
                                </p>
                            </details>

                            <hr class="border-[#A1A1AA]">

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* ================= MAIN SWIPER ================= */
    .mySwiper {
        width: 100%;
        height: 390px;
    }

    @media (min-width: 1024px) {
        .mySwiper {
            height: 540px;
        }
    }

    .mySwiper swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #FEF2F2;
    }

    /* Smart image fit (no cropping) */
    .mySwiper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 6px 6px 0 0;
        background: #fff;
    }

    /* Zoom cursor for desktop */
    @media (min-width: 1024px) {
        .swiper-zoom-container {
            cursor: zoom-in;
        }
    }

    /* ================= THUMBNAILS COMMON ================= */
    .thumb {
        cursor: pointer;
    }

    .thumb img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 6px;
        transition: 0.2s;
        will-change: transform;
    }

    .thumb:hover img {
        transform: scale(1.05);
    }

    .thumb.active {
        border: 2px solid #0369A1;
        border-radius: 6px;
    }

    /* ================= DESKTOP GRID ================= */
    .thumb-grid {
        display: none;
        /* default hidden on mobile */
    }

    @media (min-width: 1024px) {
        .thumb-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 12px;
        }

        .thumb-grid .thumb {
            width: calc(100% / 6 - 12px);
            /* 6 per row */
        }
    }

    /* ================= MOBILE THUMB SWIPER ================= */
    .thumb-swiper {
        margin-top: 12px;
        padding-left: 4px;
        /* small padding for nice edge */
    }

    .thumb-swiper swiper-slide {
        width: auto;
        /* auto width for peek effect */
    }

    .thumb-swiper .thumb {
        width: 60px;
        /* ~6.5 items visible on mobile */
    }

    .active-btn {
        @apply bg-[#0369A1] text-[#FAFAFA] border-[#0369A1];
    }
</style>