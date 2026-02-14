<template>
    <Head>
        <title>Return Center - AeroLidz</title>
        <meta name="description" content="AeroLidz return policy and process. 30-day money-back guarantee on all light bar covers. Easy returns and exchanges.">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Return Center</span>
            </nav>
        </div>
    </div>

    <section class="py-16 md:py-24">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="font-oswald text-4xl md:text-5xl font-bold uppercase mb-8 text-center">Return Center</h1>

            <div class="space-y-8 text-gray-700 leading-relaxed">
                <div>
                    <h2 class="font-oswald text-2xl font-bold uppercase mb-4">Return Policy</h2>
                    <p>We offer a <strong>30-day money-back guarantee</strong> on all AeroLidz products. If you're not satisfied with your purchase, you can return it within 30 days of delivery for a full refund.</p>
                </div>

                <div>
                    <h2 class="font-oswald text-2xl font-bold uppercase mb-4">How to Start a Return</h2>
                    <ol class="list-decimal pl-6 space-y-3">
                        <li>Email us at <a href="mailto:sales@aerolidz.com" class="text-primary hover:underline">sales@aerolidz.com</a> with your order number and reason for return.</li>
                        <li>We'll send you a return shipping label within 1-2 business days.</li>
                        <li>Pack the item securely in its original packaging and ship it back.</li>
                        <li>Once we receive and inspect the item, your refund will be processed within 5-7 business days.</li>
                    </ol>
                </div>

                <div>
                    <h2 class="font-oswald text-2xl font-bold uppercase mb-4">Conditions</h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Items must be in original, unused condition.</li>
                        <li>Custom InsertZ and personalized items are non-refundable.</li>
                        <li>Subscription InsertZ can be canceled at any time but are non-refundable for the current month.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-oswald text-2xl font-bold uppercase mb-4">Questions?</h2>
                    <p>Contact us at <a href="mailto:sales@aerolidz.com" class="text-primary hover:underline">sales@aerolidz.com</a> or visit our <Link href="/contact" class="text-primary hover:underline">Contact page</Link>.</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>
