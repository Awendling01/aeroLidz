<template>
    <div>
        <!-- Announcement Banner -->
        <div v-if="bannerVisible" class="bg-primary relative overflow-hidden" style="z-index: 60;">
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <div class="absolute inset-y-0 w-1/3 bg-gradient-to-r from-transparent via-white/25 to-transparent animate-shimmer"></div>
            </div>
            <div class="relative flex items-center justify-center gap-3 px-10 py-2.5">
                <svg class="w-5 h-5 text-white flex-shrink-0 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a4 4 0 00-4-4 4 4 0 004 4zm0 0V6a4 4 0 014-4 4 4 0 01-4 4zm-8 4h16M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                </svg>
                <p class="text-white text-sm md:text-base font-medium text-center">
                    <span class="font-oswald uppercase tracking-wider font-bold">Get Your New Subscription Box</span>
                    <span class="mx-2 hidden sm:inline text-white/60">|</span>
                    <span class="hidden sm:inline font-light">Exclusive Graphic InsertZ delivered monthly</span>
                </p>
                <Link
                    href="/shop?category=subscription"
                    class="flex-shrink-0 bg-white text-primary font-oswald font-bold text-xs uppercase tracking-wider px-4 py-1.5 rounded-full hover:bg-gray-100 transition-all duration-200 hover:scale-105 shadow-sm"
                >
                    SHOP NOW
                </Link>
                <button
                    @click="dismissBanner"
                    class="absolute right-3 top-1/2 -translate-y-1/2 p-1.5 text-white/70 hover:text-white transition-colors"
                    aria-label="Dismiss"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Header -->
        <header
            class="sticky top-0 z-50 bg-white shadow-sm transition-shadow duration-300"
            :class="{ 'shadow-md': scrolled }"
        >
            <div class="max-w-[1920px] mx-auto">
                <!-- Top bar with social links -->
                <div class="hidden md:flex justify-end items-center px-6 py-1 bg-dark text-white text-xs gap-4">
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>

                <!-- Main nav -->
                <nav class="flex items-center justify-between px-4 md:px-6 py-3 md:py-5">
                    <!-- Mobile menu button -->
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden p-2"
                        aria-label="Toggle menu"
                    >
                        <svg v-if="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <!-- Logo -->
                    <Link href="/" class="flex-shrink-0">
                        <img src="/images/logo/logo.svg" alt="AeroLidz" class="h-10 md:h-14">
                    </Link>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-8">
                        <!-- SHOP dropdown -->
                        <div class="relative group">
                            <button class="font-oswald text-sm uppercase tracking-widest text-dark hover:text-primary transition-colors py-2">
                                Shop
                            </button>
                            <div class="nav-dropdown">
                                <Link href="/shop?category=light-bars">Light Bars</Link>
                                <Link href="/shop?category=covers">Light Bar Covers</Link>
                                <Link href="/shop?category=subscription">Subscription Inserts</Link>
                                <Link href="/shop?category=graphic">Graphic Inserts</Link>
                                <Link href="/shop?category=custom">Custom Inserts</Link>
                                <Link href="/shop?category=best-selling">Best Selling Inserts</Link>
                                <Link href="/shop?category=limited">Limited Edition Inserts</Link>
                                <Link href="/shop?category=accessories">Accessories</Link>
                            </div>
                        </div>

                        <!-- LEARN dropdown -->
                        <div class="relative group">
                            <button class="font-oswald text-sm uppercase tracking-widest text-dark hover:text-primary transition-colors py-2">
                                Learn
                            </button>
                            <div class="nav-dropdown">
                                <Link href="/our-story">Our Story</Link>
                                <Link href="/how-to">How To</Link>
                                <Link href="/faq">FAQ</Link>
                            </div>
                        </div>

                        <!-- REWARDS -->
                        <Link href="/rewards" class="font-oswald text-sm uppercase tracking-widest text-dark hover:text-primary transition-colors py-2">
                            Rewards
                        </Link>

                        <!-- SUPPORT dropdown -->
                        <div class="relative group">
                            <button class="font-oswald text-sm uppercase tracking-widest text-dark hover:text-primary transition-colors py-2">
                                Support
                            </button>
                            <div class="nav-dropdown">
                                <Link href="/contact">Contact Us</Link>
                                <Link href="/returns">Return Center</Link>
                            </div>
                        </div>
                    </div>

                    <!-- Right side: login + cart -->
                    <div class="flex items-center gap-4">
                        <Link href="/login" class="hidden md:block text-sm text-dark hover:text-primary transition-colors">
                            Log in
                        </Link>
                        <button @click="cartOpen = !cartOpen" class="relative p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                            <span
                                v-if="cartCount > 0"
                                class="absolute -top-1 -right-1 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold"
                            >
                                {{ cartCount }}
                            </span>
                        </button>
                    </div>
                </nav>

                <!-- Mobile Menu -->
                <Transition
                    enter-active-class="transition-all duration-300 ease-out"
                    enter-from-class="max-h-0 opacity-0"
                    enter-to-class="max-h-[500px] opacity-100"
                    leave-active-class="transition-all duration-200 ease-in"
                    leave-from-class="max-h-[500px] opacity-100"
                    leave-to-class="max-h-0 opacity-0"
                >
                    <div v-if="mobileMenuOpen" class="md:hidden overflow-hidden bg-white border-t">
                        <div class="px-4 py-4 space-y-1">
                            <div>
                                <button @click="shopOpen = !shopOpen" class="w-full flex justify-between items-center py-3 font-oswald uppercase tracking-widest text-sm">
                                    Shop
                                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': shopOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </button>
                                <div v-if="shopOpen" class="pl-4 space-y-2 pb-2">
                                    <Link href="/shop?category=light-bars" class="block text-sm py-1 text-gray-600">Light Bars</Link>
                                    <Link href="/shop?category=covers" class="block text-sm py-1 text-gray-600">Light Bar Covers</Link>
                                    <Link href="/shop?category=subscription" class="block text-sm py-1 text-gray-600">Subscription Inserts</Link>
                                    <Link href="/shop?category=graphic" class="block text-sm py-1 text-gray-600">Graphic Inserts</Link>
                                    <Link href="/shop?category=custom" class="block text-sm py-1 text-gray-600">Custom Inserts</Link>
                                    <Link href="/shop?category=accessories" class="block text-sm py-1 text-gray-600">Accessories</Link>
                                </div>
                            </div>
                            <div>
                                <button @click="learnOpen = !learnOpen" class="w-full flex justify-between items-center py-3 font-oswald uppercase tracking-widest text-sm">
                                    Learn
                                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': learnOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </button>
                                <div v-if="learnOpen" class="pl-4 space-y-2 pb-2">
                                    <Link href="/our-story" class="block text-sm py-1 text-gray-600">Our Story</Link>
                                    <Link href="/how-to" class="block text-sm py-1 text-gray-600">How To</Link>
                                    <Link href="/faq" class="block text-sm py-1 text-gray-600">FAQ</Link>
                                </div>
                            </div>
                            <Link href="/rewards" class="block py-3 font-oswald uppercase tracking-widest text-sm">Rewards</Link>
                            <div>
                                <button @click="supportOpen = !supportOpen" class="w-full flex justify-between items-center py-3 font-oswald uppercase tracking-widest text-sm">
                                    Support
                                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': supportOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </button>
                                <div v-if="supportOpen" class="pl-4 space-y-2 pb-2">
                                    <Link href="/contact" class="block text-sm py-1 text-gray-600">Contact Us</Link>
                                    <Link href="/returns" class="block text-sm py-1 text-gray-600">Return Center</Link>
                                </div>
                            </div>
                            <Link href="/login" class="block py-3 font-oswald uppercase tracking-widest text-sm">Log in</Link>
                        </div>
                    </div>
                </Transition>
            </div>
        </header>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const scrolled = ref(false);
const mobileMenuOpen = ref(false);
const cartOpen = ref(false);
const cartCount = ref(0);
const shopOpen = ref(false);
const learnOpen = ref(false);
const supportOpen = ref(false);

// Announcement banner
const bannerVisible = ref(true);

const dismissBanner = () => {
    bannerVisible.value = false;
    sessionStorage.setItem('aerolidz_banner_dismissed', '1');
};

const handleScroll = () => {
    scrolled.value = window.scrollY > 10;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    if (sessionStorage.getItem('aerolidz_banner_dismissed')) {
        bannerVisible.value = false;
    }
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>
