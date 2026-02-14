<template>
    <Head>
        <title>AeroBadgez Rewards Program - AeroLidz</title>
        <meta name="description" content="Join the AeroBadgez Rewards Program and earn points every time you shop, share, or refer a friend. Redeem for discounts on AeroLidz products.">
    </Head>

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden bg-primary">
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="heading-xl mb-4">AeroBadgez Rewards Program</h1>
            <p class="text-lg max-w-xl mx-auto">
                Earn Badgez on every purchase and redeem them for discounts on future gear.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Rewards</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-4xl mx-auto">
            <h2 class="heading-lg text-center mb-12">How It Works</h2>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        1
                    </div>
                    <h3 class="font-oswald text-xl uppercase mb-2">Shop</h3>
                    <p class="text-gray-600">Earn 1 Badgez for every dollar spent</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        2
                    </div>
                    <h3 class="font-oswald text-xl uppercase mb-2">Collect</h3>
                    <p class="text-gray-600">Accumulate Badgez from purchases, reviews, and referrals</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        3
                    </div>
                    <h3 class="font-oswald text-xl uppercase mb-2">Redeem</h3>
                    <p class="text-gray-600">Use your Badgez for discounts on future orders</p>
                </div>
            </div>

            <!-- Ways to Earn -->
            <div class="bg-light-gray p-8 mb-8">
                <h3 class="heading-md mb-6">Ways to Earn Badgez</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <strong>Make a Purchase</strong> - Earn 1 Badgez per $1 spent
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <strong>Write a Review</strong> - Earn 50 Badgez for each product review
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <strong>Refer a Friend</strong> - Earn 100 Badgez when they make their first purchase
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <strong>Birthday Bonus</strong> - Get 200 Badgez on your birthday
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <strong>Social Sharing</strong> - Earn 25 Badgez for sharing on social media
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Redemption -->
            <div class="bg-white border border-gray-200 p-8">
                <h3 class="heading-md mb-6">Redeem Your Badgez</h3>
                <p class="text-gray-600 mb-4">
                    100 Badgez = $10 off your order
                </p>
                <p class="text-gray-600 mb-6">
                    You can redeem your Badgez at checkout. The discount will be automatically applied based on your available balance.
                </p>
                <Link href="/shop" class="btn-primary">
                    Start Shopping
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>
