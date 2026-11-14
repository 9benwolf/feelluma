<?php
$queryParams = Yii::$app->request->queryParams;
$qs = http_build_query($queryParams);

?>
<header class="h-[60px] lg:h-[76px] relative">
    <div class="container mx-auto max-w-[1080px] max-lg:px-5 h-full">
        <div class="flex items-center justify-between w-full h-full">
            <a href="/super-calm<?= $qs ? '?' . $qs : '' ?>">
                <img src="/images/luma-logo.svg" alt="Feelluma Logo" class="w-[81.59px] lg:w-[108.77px] block">
            </a>
            <button id="cartBtn">
                <img src="/images/cart.svg" alt="cart logo" class="w-[24px] h-[24px] block">
            </button>
        </div>
    </div>
</header>

<div id="cartOverlay" class="fixed inset-0 z-50 hidden">
    <div id="cartBg" class="absolute inset-0 bg-black/50"></div>
    <div id="cartPanel"
        class="absolute right-0 top-0 h-screen w-full bg-white transform translate-x-full transition-transform duration-300 lg:max-w-[390px] shadow-lg overflow-y-auto pb-8"
        style="-webkit-overflow-scrolling: touch;">

        <div class="flex items-center justify-between px-5 py-4 bg-black border-b">
            <h2 class="text-2xl font-semibold text-white font-pop">Your Cart</h2>
            <button id="closeCart" class="text-white">✕</button>
        </div>

        <div class="px-4 py-8 space-y-8 font-inter">
            <div>
                <p class="text-xs font-medium text-center font-inter">Congrats! You're eligible for FREE EXPRESS SHIPPING.</p>
                <img src="/images/cart-loader.svg" alt="cart loader" class="mx-auto">
            </div>
            <div class="rounded-[6px] bg-[#F4F4F5] p-3">
                <p class="text-center texxt-xs leading-[150%] -tracking-[2.5%]">
                    Join the <b>100,000+</b> customers who have trusted LUMA Naughty Time Libido Gummies.
                </p>
            </div>
        </div>

        <div class="mt-[22px] space-y-3 lg:h-[411px]">
            <div id="cart-items-container"></div>
            <div id="cart-empty-message" class="hidden py-10 text-center">
                <p class="text-xs text-gray-500">Oops! Your cart seems to be empty.</p>
            </div>
        </div>

        <div class="px-5 mt-5 space-y-6">
            <div class="border-t border-b border-[#E4E4E7] py-4 space-y-5 px-5">
                <div class="flex justify-between">
                    <p class="text-lg leading-[150%] -tracking-[2.5%]">Subtotal:</p>
                    <p class="text-lg font-semibold leading-[150%] -tracking-[2.5%] cart-subtotal">$0.00</p>
                </div>
                <div class="flex justify-between">
                    <div class="flex gap-[6px]">
                        <img src="/images/s2/truck.svg" alt="" class="max-w-[16px]">
                        <p class="text-xs leading-[150%] -tracking-[2.5%]">Shipping</p>
                    </div>
                    <p class="font-semibold text-xs leading-[150%] -tracking-[2.5%]">FREE</p>
                </div>
            </div>

            <form id="checkoutForm" action="/super-calm/order<?= $qs ? '?' . $qs : '' ?>" method="POST">
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">
                <input type="hidden" name="product" id="checkout-product">
                <input type="hidden" name="quantity" id="checkout-quantity">
                <input type="hidden" name="type" id="checkout-type">
                <input type="hidden" name="product_id" id="checkout-product-id">
                <button id="checkout-btn" class="py-3 bg-[#B91C1C] hover:bg-[#EF4444] transition-all duration-[0.8s] text-[#fafafa] rounded-full w-full text-lg font-bold leading-[150%] -tracking-[2.5%] checkout-btn">
                    CHECKOUT
                </button>
            </form>
            <img src="/images/3cardset.png" alt="" class="mx-auto">
            <p class="text-center text-xs leading-[150%] -tracking-[2.5%]">100% secure and protected payments</p>
        </div>
    </div>
</div>

<div id="cartToast" class="fixed z-50 px-4 py-2 text-white transition-opacity duration-300 bg-black rounded shadow opacity-0 bottom-10 right-5">
    Added to cart!
</div>

<style>
    optgroup {
        font-style: normal;
        font-size: 12px !important;
        font-family: "Inter";
        font-weight: normal;
        src: url("../fonts/inter/inter-semibold-italic.woff2") format("woff2");
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const cartBtn = document.getElementById("cartBtn");
        const cartOverlay = document.getElementById("cartOverlay");
        const cartPanel = document.getElementById("cartPanel");
        const closeCart = document.getElementById("closeCart");
        const cartBg = document.getElementById("cartBg");
        const cartToast = document.getElementById("cartToast");

        if (!cartBtn || !cartOverlay || !cartPanel || !closeCart) return;

        // ================= OPEN / CLOSE =================
        function openCart() {
            cartOverlay.classList.remove("hidden");
            setTimeout(() => cartPanel.classList.remove("translate-x-full"), 10);
        }

        function closeCartFn() {
            cartPanel.classList.add("translate-x-full");
            setTimeout(() => cartOverlay.classList.add("hidden"), 300);
        }

        cartBtn.addEventListener("click", openCart);
        closeCart.addEventListener("click", closeCartFn);
        cartBg.addEventListener("click", closeCartFn);

        // ================= STORAGE =================
        function getCart() {
            return JSON.parse(sessionStorage.getItem("cart")) || null;
        }

        function setCart(cart) {
            sessionStorage.setItem("cart", JSON.stringify(cart));
            renderCart();
            showToast();
        }

        function showToast() {
            cartToast.classList.add("opacity-100");
            setTimeout(() => cartToast.classList.remove("opacity-100"), 1500);
        }

        // ================= RENDER CART =================
        function renderCart() {

            const cart = getCart();
            const itemsContainer = cartPanel.querySelector("#cart-items-container");
            const emptyMessage = cartPanel.querySelector("#cart-empty-message");
            const subtotalEl = cartPanel.querySelector(".cart-subtotal");

            itemsContainer.innerHTML = "";

            if (!cart) {
                emptyMessage.classList.remove("hidden");
                subtotalEl.textContent = "$0.00";
                return;
            }

            emptyMessage.classList.add("hidden");

            const qty = Number(cart.quantity);
            const type = cart.type || "sub";
            const product = cart.product;

            const pricing = window.PRICING?.[product]?.[type]?.[qty];

            const amount = pricing?.amount || 0;
            const delivery = pricing?.delivery || "";

            const productName =
                product === "supercalm_es" ?
                "Super Calm (Extra Strength)" :
                "Super Calm (25mg)";

            const productImg =
                product === "supercalm_es" ?
                "/images/super-calm/s2/image1.png?v=2.1" :
                "/images/super-calm/s2/image1b.png?v=2.1";

            itemsContainer.innerHTML = `
            <div class="flex items-start gap-3 px-4">

                <img src="${productImg}" class="max-w-[96px] max-h-[96px]">

                <div class="space-y-3 w-full max-w-[222px]">

                    <div class="space-y-1">
                        <p class="text-sm font-semibold">${productName}</p>
                        <p class="text-xs text-gray-600">${delivery}</p>
                    </div>

                    <div class="space-y-[6px]">

                        <select class="cart-pack block w-full rounded-[6px] py-[7px] px-[8px] text-xs bg-white border">

    ${["sub"].map(t => `
        <optgroup label="${t === "otp" ? "Buy Once" : "Subscribe & Save 25%"}" class="text-[#71717A] !text-xs leading-[150%] -tracking-[2.5%]">

            ${[1,2,3,4].map(qty => {

                const price = window.PRICING?.[product]?.[t]?.[qty]?.amount || 0;

                const labelQty = qty === 1 ? "1 PACK" : `${qty} PACKS`;

                return `
                    <option value="${t}-${qty}"
                        ${type === t && Number(cart.quantity) === qty ? "selected" : ""}>
                        ${labelQty} ($${Number(price).toFixed(2)})
                    </option>
                `;
            }).join("")}

        </optgroup>
    `).join("")}

</select>

                        <select class="cart-dosage block w-full rounded-[6px] py-[7px] px-[8px] text-xs bg-white border">
                            <optgroup label="Basic Plans" class="text-[#71717A] !text-xs leading-[150%] -tracking-[2.5%]">
                                <option value="25mg" ${product === "supercalm_25mg_reg" ? "selected" : ""}>25mg</option>
                                <option value="es" ${product === "supercalm_es" ? "selected" : ""}>50mg</option>
                            </optgroup>
                        </select>

                    </div>
                </div>

                <img src="/images/trash.svg" class="cursor-pointer cart-delete">

            </div>
        `;

            subtotalEl.textContent = `$${Number(amount).toFixed(2)}`;

            // ================= DELETE =================
            itemsContainer.querySelector(".cart-delete").addEventListener("click", function() {
                sessionStorage.removeItem("cart");
                renderCart();
            });

            // ================= PACK CHANGE =================
            itemsContainer.querySelector(".cart-pack").addEventListener("change", function() {

                const [newType, newQty] = this.value.split("-");

                cart.type = newType;
                cart.quantity = Number(newQty);

                setCart(cart);
            });

            // ================= DOSAGE CHANGE =================
            itemsContainer.querySelector(".cart-dosage").addEventListener("change", function() {

                cart.product =
                    this.value === "es" ?
                    "supercalm_es" :
                    "supercalm_25mg_reg";

                setCart(cart);
            });
        }

        // ================= ADD TO CART =================
        window.addToCart = function() {

            const btn = document.querySelector(".active-dosage");

            const product = btn?.dataset.target === "div2" ?
                "supercalm_es" :
                "supercalm_25mg_reg";

            const quantity =
                Number(document.querySelector('input[name="quantity"]:checked')?.value || 1);

            const type =
                document.querySelector('input[name="payment_option"]:checked')?.value === "subscription" ?
                "sub" :
                "otp";

            setCart({
                product,
                quantity,
                type
            });

            openCart();
        };

        // ================= INIT =================
        renderCart();
    });


    // ================= CHECKOUT =================
    document.getElementById("checkout-btn")?.addEventListener("click", function() {

        const cart = JSON.parse(sessionStorage.getItem("cart"));

        if (!cart) {
            alert("Your cart is empty!");
            return;
        }

        const qty = cart.quantity;
        const type = cart.type || "otp";
        const product = cart.product;

        const productId = window.PRICING?.[product]?.[type]?.[qty]?.id;

        if (!productId) {
            alert("Invalid selection");
            return;
        }

        document.getElementById("checkout-product").value = product;
        document.getElementById("checkout-quantity").value = qty;
        document.getElementById("checkout-type").value = type;
        document.getElementById("checkout-product-id").value = productId;

        document.getElementById("checkoutForm").submit();
    });
</script>