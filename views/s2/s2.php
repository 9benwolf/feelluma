<?php

/** @var yii\web\View $this */

$this->title = 'LUMA Gummies | Shop';
$this->params['showNavbar'] = false;

// ✅ Extract ONLY what you need from params.php
$params = Yii::$app->params;

$pricing = [
    'gummies_25mg_reg' => $params['gummies_25mg_reg'],
    'gummies_es' => $params['gummies_es'],
];
?>

<!-- ✅ GLOBAL PRICING (ONLY DECLARED ONCE) -->
<script>
    window.PRICING = <?= json_encode($pricing) ?>;
</script>

<?= $this->render('/partials/s2-nav.php') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="">

    <?= $this->render('/partials/s2/section1') ?>

    <!-- ================= TICKER ================= -->
    <div class="relative flex h-[32px] items-center overflow-hidden bg-[#B91C1C]">
        <div class="ticker-wrapper flex">
            <div class="ticker flex gap-4 whitespace-nowrap text-white">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="dot"></div>
                    <p>60,000+ HAPPY CUSTOMERS</p>
                    <div class="dot"></div>
                    <p>NATURAL INGREDIENTS</p>
                    <div class="dot"></div>
                    <p>FREE DISCREET SHIPPING</p>
                    <div class="dot"></div>
                    <p>CLINICALLY-BACKED INGREDIENTS</p>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <style>
        .dot {
            width: 4px;
            height: 4px;
            border-radius: 999px;
            background: white;
            align-self: center;
        }

        .ticker-wrapper {
            display: flex;
            width: 200%;
        }

        .ticker {
            display: flex;
            gap: 1rem;
            animation: scroll 15s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    <?= $this->render('/partials/s2/section2') ?>
    <?= $this->render('/partials/s2/section3') ?>
    <?= $this->render('/partials/s2/section1') ?>

</div>

<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-element-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        // ====================== SWIPER ======================
        document.querySelectorAll('.dosage-content').forEach(section => {
            const mainSwiperEl = section.querySelector('.synced-swiper');
            const thumbSwiperEl = section.querySelector('.thumb-swiper');
            const desktopThumbs = section.querySelectorAll('.thumb-grid .thumb');

            if (mainSwiperEl) {
                mainSwiperEl.initialize();
                const mainSwiper = mainSwiperEl.swiper;

                // ===== CUSTOM NAVIGATION FIX =====
                const prevBtns = section.querySelectorAll('.custom-swiper-button-prev');
                const nextBtns = section.querySelectorAll('.custom-swiper-button-next');

                // pick ONLY the visible ones (fixes mobile + duplicates issue)
                const visiblePrev = Array.from(prevBtns).find(btn => btn.offsetParent !== null);
                const visibleNext = Array.from(nextBtns).find(btn => btn.offsetParent !== null);

                if (visiblePrev && visibleNext) {
                    mainSwiper.params.navigation.prevEl = visiblePrev;
                    mainSwiper.params.navigation.nextEl = visibleNext;

                    mainSwiper.navigation.destroy();
                    mainSwiper.navigation.init();
                    mainSwiper.navigation.update();
                }
                // ===== END NAV FIX =====

                if (thumbSwiperEl) {
                    thumbSwiperEl.initialize();
                    const mobileThumbs = thumbSwiperEl.querySelectorAll('.thumb');
                    mobileThumbs.forEach((thumb, index) => {
                        thumb.addEventListener('click', () => syncAllMainSwipers(index));
                    });
                }

                desktopThumbs.forEach((thumb, index) => {
                    thumb.addEventListener('click', () => syncAllMainSwipers(index));
                });

                mainSwiper.on('slideChange', () => {
                    const index = mainSwiper.realIndex;
                    document.querySelectorAll('.synced-swiper').forEach(el => {
                        if (el.swiper && el.swiper.realIndex !== index) {
                            el.swiper.slideToLoop(index);
                        }
                    });
                    updateAllThumbnailsUI(index);
                });
            }
        });

        // ====================== OTHER FUNCTIONS REMAIN UNCHANGED ======================
        function syncAllMainSwipers(index) {
            document.querySelectorAll('.synced-swiper').forEach(el => {
                if (el.swiper) el.swiper.slideToLoop(index);
            });
        }

        function updateAllThumbnailsUI(index) {
            document.querySelectorAll('.dosage-content').forEach(section => {
                const dThumbs = section.querySelectorAll('.thumb-grid .thumb');
                const mThumbs = section.querySelectorAll('.thumb-swiper .thumb');
                dThumbs.forEach(t => t.classList.remove('active'));
                if (dThumbs[index]) dThumbs[index].classList.add('active');
                mThumbs.forEach(t => t.classList.remove('active'));
                if (mThumbs[index]) mThumbs[index].classList.add('active');
            });
        }

        function getSelectedProductKey() {
            const activeDose = document.querySelector('.dosage-btn.active-dosage');
            if (!activeDose) return 'gummies_25mg_reg';
            return activeDose.dataset.target === 'div2' ? 'gummies_es' : 'gummies_25mg_reg';
        }

        function getSelectedQuantity() {
            return document.querySelector('input[name="quantity"]:checked')?.value || 1;
        }

        function getSelectedPayment() {
            return document.querySelector('input[name="payment_option"]:checked')?.value === 'subscription' ?
                'sub' :
                'otp';
        }

        function updatePriceUI() {
            const product = getSelectedProductKey();
            const qty = getSelectedQuantity();

            const subData = window.PRICING?.[product]?.sub?.[qty];
            const otpData = window.PRICING?.[product]?.otp?.[qty];
            const subDuration = subData['duration'];
            const deliveryType = subData['delivery'];
            if (!subData || !otpData) return;

            const subPrice = `$${Number(subData.amount).toFixed(2)}`;
            const subOldPrice = subData.oldprice ? `$${Number(subData.oldprice).toFixed(2)}` : '';
            const otpPrice = `$${Number(otpData.amount).toFixed(2)}`;

            const packCount = qty === '1' ? '1 PACK' : `${qty} PACKS`;
            let discountText = '25% off';

            const discountActive = document.querySelector('.reg.dosage-btn.active-dosage');

            if (!discountActive) {
                discountText = '25% off';
            }

            document.querySelectorAll('.discount-text')
                .forEach(el => el.textContent = discountText);
            document.querySelectorAll('.price-sub').forEach(el => el.textContent = subPrice);
            document.querySelectorAll('.price-sub-old').forEach(el => el.textContent = subOldPrice);
            document.querySelectorAll('.price-otp').forEach(el => el.textContent = otpPrice);
            document.querySelectorAll('.subDuration').forEach(el => el.textContent = subDuration);
            document.querySelectorAll('.deltype').forEach(el => el.textContent = deliveryType);
            document.querySelectorAll('.pack-count').forEach(el => el.textContent = packCount);
        }

        const paymentRadios = document.querySelectorAll('input[name="payment_option"]');


        function updatePaymentUI(value) {
            paymentRadios.forEach(radio => {
                const circle = radio.nextElementSibling;
                const checkmark = circle?.querySelector('.checkmark');

                if (!circle) return;

                if (radio.value === value) {
                    radio.checked = true;
                    circle.style.backgroundColor = '#B91C1C';
                    circle.style.borderColor = '#B91C1C';
                    checkmark?.classList.remove('hidden');
                } else {
                    circle.style.backgroundColor = '#fff';
                    circle.style.borderColor = '#000';
                    checkmark?.classList.add('hidden');
                }
            });

            updatePriceUI();
        }

        paymentRadios.forEach(radio => {
            radio.addEventListener('change', () => updatePaymentUI(radio.value));
        });

        document.querySelectorAll('input[name="quantity"]').forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedValue = radio.value;

                document.querySelectorAll(`label[data-package]`).forEach(label => {
                    label.classList.remove('bg-[#B91C1C]', 'border-[#09090B]', 'text-[#FAFAFA]');
                    label.classList.add('border-[#52525B]', 'text-black');
                });

                document.querySelectorAll(`label[data-package="${selectedValue}"]`).forEach(label => {
                    label.classList.add('bg-[#B91C1C]', 'border-[#09090B]', 'text-[#FAFAFA]');
                    label.classList.remove('text-black');
                });

                updatePriceUI();
            });
        });

        const dosageButtons = document.querySelectorAll('.dosage-btn');

        dosageButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.target;

                dosageButtons.forEach(b => {
                    b.classList.remove('active-dosage', 'bg-[#B91C1C]', 'text-[#FAFAFA]', 'border-[#B91C1C]');
                    b.classList.add('border-[#52525B]', 'bg-white', 'text-black');
                });

                document.querySelectorAll(`.dosage-btn[data-target="${target}"]`).forEach(b => {
                    b.classList.add('active-dosage', 'bg-[#B91C1C]', 'text-[#FAFAFA]', 'border-[#B91C1C]');
                    b.classList.remove('border-[#52525B]', 'bg-white', 'text-black');
                });

                document.querySelectorAll('.dosage-content').forEach(c => c.classList.add('absolute', 'opacity-0', 'w-0'));

                document.querySelectorAll(`.dosage-content[data-dose="${target}"]`).forEach(c => {
                    c.classList.remove('absolute', 'opacity-0', 'w-0');

                    c.querySelectorAll('swiper-container').forEach(s => {
                        if (s.swiper) s.swiper.update();
                    });
                });

                updatePriceUI();
            });
        });

        // ====================== INIT ======================
        updatePaymentUI(document.querySelector('input[name="payment_option"]:checked')?.value);
        updatePriceUI();

    });

    let swiperResizeTimer = null;

    window.addEventListener('resize', () => {
        clearTimeout(swiperResizeTimer);

        swiperResizeTimer = setTimeout(() => {
            document.querySelectorAll('.dosage-content .synced-swiper').forEach(el => {
                if (!el.swiper) return;

                const section = el.closest('.dosage-content');
                if (!section) return;

                const prevBtns = section.querySelectorAll('.custom-swiper-button-prev');
                const nextBtns = section.querySelectorAll('.custom-swiper-button-next');

                const visiblePrev = Array.from(prevBtns).find(btn => btn.offsetParent !== null);
                const visibleNext = Array.from(nextBtns).find(btn => btn.offsetParent !== null);

                if (visiblePrev && visibleNext) {
                    el.swiper.params.navigation.prevEl = visiblePrev;
                    el.swiper.params.navigation.nextEl = visibleNext;

                    el.swiper.navigation.destroy();
                    el.swiper.navigation.init();
                    el.swiper.navigation.update();
                }
            });
        }, 150);
    });
</script>