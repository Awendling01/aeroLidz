<template>
    <Head>
        <title>The Original Aerodynamic Light Bar Cover - AeroLidz</title>
        <meta name="description" content="AeroLidz is the original aerodynamic light bar cover that eliminates wind noise and protects your light bar from road debris. Made from high-grade UV polycarbonate with customizable graphic InsertZ. 30-day money-back guarantee.">
        <meta name="keywords" content="light bar cover, aerodynamic light bar cover, AeroLidz, wind noise reduction, light bar protection, graphic inserts, Jeep accessories, off-road accessories, LED light bar cover">
        <meta property="og:title" content="AeroLidz - The Original Aerodynamic Light Bar Cover">
        <meta property="og:description" content="Eliminate wind noise and protect your light bar with the original AeroLidz cover. Customizable graphic InsertZ, UV polycarbonate, 30-day money-back guarantee.">
        <meta property="og:image" content="/images/hero/hero-bg.jpg">
        <meta property="og:url" content="/">
        <meta property="og:type" content="website">
        <meta name="twitter:title" content="AeroLidz - The Original Aerodynamic Light Bar Cover">
        <meta name="twitter:description" content="Eliminate wind noise and protect your light bar with the original AeroLidz cover. Customizable graphic InsertZ available.">
        <meta name="twitter:image" content="/images/hero/hero-bg.jpg">
    </Head>

    <!-- JSON-LD Structured Data -->
    <component :is="'script'" type="application/ld+json" v-html="organizationSchema"></component>
    <component :is="'script'" type="application/ld+json" v-html="productSchema"></component>

    <!-- Fixed full-page background -->
    <div class="fixed inset-0 z-0 bg-black">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <video
            autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover"
            poster="/images/hero/hero-bg.jpg"
        >
            <source src="/images/hero/hero-video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- All scrollable content sits on top -->
    <div class="relative z-10">

        <!-- Hero Section - transparent so fixed bg shows through -->
        <section class="h-screen min-h-[700px] flex flex-col items-center justify-center relative">
            <div class="text-center text-white px-4 max-w-5xl mx-auto">
                <h1 class="font-oswald text-5xl md:text-7xl lg:text-8xl font-bold uppercase tracking-tight mb-6 leading-[1.1]">
                    THE ORIGINAL<br>AERODYNAMIC<br>LIGHT BAR COVER
                </h1>
                <p class="text-lg md:text-2xl mb-10 font-light max-w-3xl mx-auto leading-relaxed">
                    A cover for your light bar that not only protects it from debris on the road but silences the whistling noise produced by the wind.
                </p>
                <Link href="/shop" class="inline-block bg-primary hover:bg-primary-dark text-white font-oswald font-semibold text-xl uppercase tracking-wide px-16 py-5 transition-all duration-300 hover:scale-105">
                    SHOP NOW
                </Link>
            </div>
            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
                <svg class="w-8 h-8 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </section>

        <!-- LAYER 1: White card - How It Works -->
        <section class="py-20 md:py-32 bg-white/95 backdrop-blur-sm shadow-[0_-20px_60px_rgba(0,0,0,0.4)] rounded-t-3xl relative z-10">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="font-oswald text-4xl md:text-5xl font-bold uppercase mb-8 leading-tight">
                            HOW DOES THE<br>LIGHT BAR COVER WORK?
                        </h2>
                        <div class="space-y-6 text-gray-700 text-lg leading-relaxed mb-10">
                            <p>
                                Remove the irritating wind noise with our cover while protecting your light bar on the road and trail. Our enhanced Gen 3 version comes in a crystal clear front with an opaque top and bottom to reduce light reflection back into the vehicle's cab.
                            </p>
                            <ul class="space-y-3 mt-6">
                                <li class="flex items-start gap-3">
                                    <span class="text-primary text-2xl font-bold">&bull;</span>
                                    <span>Original customizable light bar cover</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-primary text-2xl font-bold">&bull;</span>
                                    <span>High Grade UV Poly-carbonate</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-primary text-2xl font-bold">&bull;</span>
                                    <span>Covered by a 30 day money-back guarantee</span>
                                </li>
                            </ul>
                        </div>
                        <Link href="/shop" class="inline-block bg-primary hover:bg-primary-dark text-white font-oswald font-semibold text-lg uppercase tracking-wide px-12 py-4 transition-all duration-300">
                            SHOP NOW &rarr;
                        </Link>
                    </div>
                    <div class="order-1 md:order-2">
                        <img src="https://aerolidz.com/cdn/shop/files/image_1.png?v=1682490906" alt="AeroLidz light bar cover installed on a Jeep showing how it works" class="w-full h-auto shadow-2xl rounded-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- LAYER 2: Transparent - InsertZ (hero bg peeks through) -->
        <section class="py-20 md:py-32 relative">
            <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="font-oswald text-4xl md:text-5xl font-bold uppercase mb-6 text-white">
                        WHAT IS AN INSERTZ?
                    </h2>
                    <p class="text-gray-200 text-lg max-w-4xl mx-auto leading-relaxed">
                        InsertZ are printed graphics that slide between your AeroLidz cover and light bar, instantly upgrading your ride's look. They're precision-fit for all AeroLidz covers, roll up for easy storage, and are made from durable, UV-resistant material built to last.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                    <!-- Subscription InsertZ -->
                    <div class="bg-white/95 backdrop-blur-sm shadow-2xl overflow-hidden group hover:shadow-[0_25px_60px_rgba(0,0,0,0.4)] transition-shadow duration-300 rounded-lg">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img
                                src="/images/inserts/subscription-box.png"
                                alt="AeroLidz Subscription InsertZ box delivered monthly with exclusive designs"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >
                        </div>
                        <div class="p-8">
                            <h3 class="font-oswald text-2xl font-bold uppercase mb-4">Subscription InsertZ</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Get exclusive new designs delivered every month. Choose your tier and receive themed graphics like Sport, Sahara, or Rubicon starting at $30.
                            </p>
                            <Link href="/shop?category=subscription" class="inline-block bg-primary hover:bg-primary-dark text-white font-oswald font-semibold text-lg uppercase tracking-wide px-10 py-4 w-full text-center transition-all duration-300">
                                SUBSCRIBE
                            </Link>
                        </div>
                    </div>

                    <!-- Custom InsertZ -->
                    <div class="bg-white/95 backdrop-blur-sm shadow-2xl overflow-hidden group hover:shadow-[0_25px_60px_rgba(0,0,0,0.4)] transition-shadow duration-300 rounded-lg">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img
                                src="/images/inserts/custom-insert.jpg"
                                alt="Custom AeroLidz InsertZ - design your own graphic insert"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >
                        </div>
                        <div class="p-8">
                            <h3 class="font-oswald text-2xl font-bold uppercase mb-4">Custom InsertZ</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Want something one-of-a-kind? Upload your own artwork or design it here, and we'll print it on a premium InsertZ made specifically for your AeroLidz. Starting at $85.
                            </p>
                            <Link href="/shop?category=custom" class="inline-block bg-primary hover:bg-primary-dark text-white font-oswald font-semibold text-lg uppercase tracking-wide px-10 py-4 w-full text-center transition-all duration-300">
                                CUSTOMIZE IT
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LAYER 3: White card - Featured Product -->
        <section class="py-20 md:py-32 bg-white/95 backdrop-blur-sm shadow-[0_-10px_40px_rgba(0,0,0,0.3)] relative z-10">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                    <!-- Product Images -->
                    <div>
                        <div class="mb-4 bg-gray-100 rounded-lg overflow-hidden">
                            <img
                                :src="selectedImage"
                                alt="AeroLidz Light Bar Cover Dual Row 52 inch"
                                class="w-full h-[400px] md:h-[600px] object-contain"
                            >
                        </div>
                        <div class="grid grid-cols-5 gap-2">
                            <button
                                v-for="(img, i) in productImages"
                                :key="i"
                                @click="selectedImage = img"
                                class="border-4 transition-all duration-200 rounded"
                                :class="selectedImage === img ? 'border-primary' : 'border-gray-200 hover:border-gray-400'"
                            >
                                <img :src="img" :alt="`AeroLidz Light Bar Cover view ${i + 1}`" class="w-full h-20 object-cover">
                            </button>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div>
                        <h2 class="font-oswald text-3xl md:text-4xl font-bold uppercase mb-3">
                            Light Bar Cover | Dual Row 52"
                        </h2>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="flex text-amber-400">
                                <svg v-for="i in 5" :key="i" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="text-gray-600 font-medium">4.8 out of 5.0 stars</span>
                        </div>
                        <p class="text-gray-500 mb-6">411 total reviews</p>

                        <div class="mb-8">
                            <p class="text-gray-500 text-sm mb-1">Regular price</p>
                            <p class="font-oswald text-4xl font-bold">$175.00</p>
                        </div>

                        <div class="mb-10">
                            <p class="text-sm text-gray-600 mb-4">4 interest-free installments, or from $15.80/mo with Shop Pay</p>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-6">
                            <label class="font-oswald uppercase text-sm tracking-wider mb-3 block font-semibold">Qty</label>
                            <div class="flex border-2 border-gray-300 w-32">
                                <button @click="qty > 1 && qty--" class="px-4 py-3 hover:bg-gray-100 transition-colors font-bold text-lg">&minus;</button>
                                <span class="flex-1 px-4 py-3 border-x-2 border-gray-300 text-center font-semibold">{{ qty }}</span>
                                <button @click="qty++" class="px-4 py-3 hover:bg-gray-100 transition-colors font-bold text-lg">+</button>
                            </div>
                        </div>

                        <button @click="addToCart" class="w-full bg-primary hover:bg-primary-dark text-white font-oswald font-bold text-xl uppercase tracking-wide py-5 mb-4 transition-all duration-300 hover:scale-[1.02]">
                            ADD TO THE CART
                        </button>

                        <button class="w-full bg-amber-400 hover:bg-amber-500 text-black font-oswald font-bold text-xl uppercase tracking-wide py-5 mb-6 transition-all duration-300 hover:scale-[1.02]">
                            BUY IT NOW
                        </button>

                        <p class="text-center text-gray-600 text-sm">
                            Delivery expected between <strong>Wed, Feb 18</strong> and <strong>Fri, Feb 20</strong>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LAYER 4: Orange with shadow pop -->
        <section class="relative py-12 md:py-16 bg-primary shadow-[0_-8px_30px_rgba(249,102,1,0.4),0_8px_30px_rgba(249,102,1,0.4)] z-20">
            <div class="text-center text-white px-4">
                <h2 class="font-oswald text-3xl md:text-4xl font-bold uppercase mb-4">
                    EARN REWARDS EACH MILE
                </h2>
                <p class="text-lg max-w-3xl mx-auto mb-6 leading-relaxed">
                    Join the AeroBadgez Rewards Program and score Badgez every time you shop, share, or refer a friend.
                </p>
                <Link href="/rewards" class="inline-block border-4 border-white text-white hover:bg-white hover:text-primary font-oswald font-bold text-xl uppercase tracking-wide px-12 py-4 transition-all duration-300">
                    CLAIM POINTS
                </Link>
            </div>
        </section>

        <!-- LAYER 5: Transparent CTA - bg peeks through -->
        <section class="relative py-32 overflow-hidden">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative z-10 text-center text-white px-4">
                <h2 class="font-oswald text-4xl md:text-5xl font-bold uppercase mb-10">
                    WANNA KNOW MORE ABOUT AEROLIDZ?
                </h2>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <Link href="/our-story" class="inline-block border-4 border-white text-white hover:bg-white hover:text-black font-oswald font-bold text-lg uppercase tracking-wide px-10 py-4 transition-all duration-300">
                        OUR STORY
                    </Link>
                    <a href="https://www.facebook.com/Aerolidz/" target="_blank" class="inline-block bg-white text-black hover:bg-gray-200 font-oswald font-bold text-lg uppercase tracking-wide px-10 py-4 transition-all duration-300">
                        FOLLOW US
                    </a>
                </div>
            </div>
        </section>

    </div>

    <!-- Promo Popup -->
    <Transition
        enter-active-class="transition-all duration-500 ease-out"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition-all duration-300 ease-in"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div v-if="showPopup" class="fixed inset-0 z-[100] flex items-center justify-center p-4" @click.self="showPopup = false">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
            <Transition
                enter-active-class="transition-all duration-500 ease-out delay-100"
                enter-from-class="opacity-0 scale-90 translate-y-8"
                enter-to-class="opacity-100 scale-100 translate-y-0"
                leave-active-class="transition-all duration-300 ease-in"
                leave-from-class="opacity-100 scale-100"
                leave-to-class="opacity-0 scale-95"
            >
                <div v-if="showPopup" class="relative z-10 bg-white rounded-2xl shadow-2xl max-w-2xl w-full overflow-hidden">
                    <!-- Close button -->
                    <button @click="showPopup = false" class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/90 hover:bg-white rounded-full flex items-center justify-center shadow-lg transition-all hover:scale-110">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <div class="flex flex-col md:flex-row">
                        <!-- Left side - Jeep image -->
                        <div class="md:w-5/12 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden min-h-[200px] md:min-h-[380px]">
                            <img
                                src="/images/hero/product-installed.jpg"
                                alt="Jeep with AeroLidz light bar cover installed"
                                class="absolute inset-0 w-full h-full object-cover opacity-80"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="inline-block bg-primary text-white font-oswald font-bold text-sm uppercase tracking-wider px-3 py-1 rounded">
                                    10% OFF
                                </span>
                            </div>
                        </div>

                        <!-- Right side - Content -->
                        <div class="md:w-7/12 p-8 md:p-10 flex flex-col justify-center">
                            <p class="font-oswald text-sm uppercase tracking-[0.25em] text-primary font-semibold mb-2">
                                GET YOUR NEW
                            </p>
                            <h3 class="font-oswald text-3xl md:text-4xl font-bold uppercase mb-4 leading-tight">
                                SUBSCRIPTION BOX
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                Get exclusive AeroLidz Graphic InsertZ delivered to your door every month!
                            </p>

                            <div class="space-y-3">
                                <input
                                    v-model="promoEmail"
                                    type="email"
                                    placeholder="Enter your email"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:ring-0 outline-none transition-colors text-sm"
                                >
                                <button
                                    @click="claimDiscount"
                                    class="w-full bg-primary hover:bg-primary-dark text-white font-oswald font-bold text-lg uppercase tracking-wide py-4 rounded-lg transition-all duration-300 hover:scale-[1.02] hover:shadow-lg"
                                >
                                    CLAIM YOUR 10% OFF
                                </button>
                                <button @click="showPopup = false" class="w-full text-gray-400 text-xs hover:text-gray-600 transition-colors py-1">
                                    No thanks, I'll pay full price
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>
    </Transition>
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const qty = ref(1);
const selectedImage = ref('/images/products/featured-1.jpg');
const productImages = [
    '/images/products/featured-1.jpg',
    '/images/products/featured-2.jpg',
    '/images/products/featured-3.jpg',
    '/images/products/featured-4.jpg',
    '/images/products/featured-5.jpg',
];

const addToCart = () => {
    alert(`Added ${qty.value} item(s) to cart!`);
};

// Promo popup
const showPopup = ref(false);
const promoEmail = ref('');
let popupTimer = null;

const claimDiscount = () => {
    if (promoEmail.value) {
        showPopup.value = false;
        sessionStorage.setItem('aerolidz_popup_dismissed', '1');
        alert('Check your email for your 10% discount code!');
    }
};

onMounted(() => {
    const dismissed = sessionStorage.getItem('aerolidz_popup_dismissed');
    if (!dismissed) {
        popupTimer = setTimeout(() => {
            showPopup.value = true;
        }, 5000);
    }
});

onUnmounted(() => {
    if (popupTimer) clearTimeout(popupTimer);
});

// JSON-LD Structured Data
const organizationSchema = computed(() => JSON.stringify({
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "AeroLidz",
    "url": "https://aerolidz.com",
    "logo": "https://aerolidz.com/cdn/shop/files/Logo.svg",
    "description": "The original aerodynamic light bar cover. Eliminates wind noise and protects your light bar from road debris.",
    "sameAs": [
        "https://www.facebook.com/Aerolidz/",
        "https://www.instagram.com/aerolidz/",
        "https://www.youtube.com/@aerolidz"
    ],
    "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "url": "https://aerolidz.com/contact"
    }
}));

const productSchema = computed(() => JSON.stringify({
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Light Bar Cover | Dual Row 52\"",
    "description": "The original aerodynamic light bar cover that eliminates wind noise and protects your light bar. Made from high-grade UV polycarbonate.",
    "image": "/images/products/featured-1.jpg",
    "brand": {
        "@type": "Brand",
        "name": "AeroLidz"
    },
    "offers": {
        "@type": "Offer",
        "price": "175.00",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "url": "/product/1"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "411",
        "bestRating": "5"
    }
}));
</script>
