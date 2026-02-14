<template>
    <Head>
        <title>Contact Us - AeroLidz</title>
        <meta name="description" content="Get in touch with AeroLidz. Questions about light bar covers, InsertZ, orders, or compatibility? Our team is here to help.">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Contact</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-4xl mx-auto">
            <h1 class="heading-lg text-center mb-4">Get In Touch</h1>
            <p class="text-center text-gray-600 mb-12">
                Have a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>

            <div class="grid md:grid-cols-2 gap-12 mb-12">
                <!-- Contact Form -->
                <div>
                    <form @submit.prevent="submitForm" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Name *</label>
                            <input
                                v-model="form.name"
                                type="text"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Email *</label>
                            <input
                                v-model="form.email"
                                type="email"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Subject *</label>
                            <input
                                v-model="form.subject"
                                type="text"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Message *</label>
                            <textarea
                                v-model="form.message"
                                required
                                rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary"
                            ></textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full" :disabled="submitting">
                            {{ submitting ? 'Sending...' : 'Send Message' }}
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h3 class="font-oswald text-xl uppercase mb-4">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="font-medium">Email</p>
                                <a href="mailto:sales@aerolidz.com" class="text-primary hover:underline">
                                    sales@aerolidz.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="font-medium">Business Hours</p>
                                <p class="text-gray-600">Monday - Friday: 9am - 5pm EST</p>
                                <p class="text-gray-600">Weekend: Closed</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <div>
                                <p class="font-medium">Social Media</p>
                                <div class="flex gap-3 mt-2">
                                    <a href="https://www.facebook.com/Aerolidz/" target="_blank" class="text-gray-600 hover:text-primary">
                                        Facebook
                                    </a>
                                    <a href="https://www.instagram.com/aerolidz/" target="_blank" class="text-gray-600 hover:text-primary">
                                        Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 bg-light-gray p-6">
                        <h4 class="font-oswald text-lg uppercase mb-3">Quick Links</h4>
                        <ul class="space-y-2 text-sm">
                            <li><Link href="/faq" class="text-primary hover:underline">FAQs</Link></li>
                            <li><Link href="/shipping-policy" class="text-primary hover:underline">Shipping Policy</Link></li>
                            <li><Link href="/return-policy" class="text-primary hover:underline">Return Policy</Link></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const form = ref({
    name: '',
    email: '',
    subject: '',
    message: '',
});

const submitting = ref(false);

const submitForm = () => {
    submitting.value = true;
    
    // TODO: Implement actual form submission
    setTimeout(() => {
        alert('Thank you for your message! We will get back to you soon.');
        form.value = {
            name: '',
            email: '',
            subject: '',
            message: '',
        };
        submitting.value = false;
    }, 1000);
};
</script>
