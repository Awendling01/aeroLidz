<template>
    <Head>
        <title>Customer Reviews - AeroLidz</title>
        <meta name="description" content="Read real customer reviews of AeroLidz light bar covers and graphic InsertZ. 4.8 out of 5 stars from over 400 verified buyers.">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Reviews</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-4xl mx-auto">
            <h1 class="heading-lg text-center mb-4">Customer Reviews</h1>
            <p class="text-center text-gray-600 mb-12">
                See what our customers have to say about AeroLidz products.
            </p>

            <!-- Overall Rating -->
            <div class="bg-light-gray p-8 mb-12 text-center">
                <div class="flex items-center justify-center mb-4">
                    <div class="flex text-primary text-3xl">
                        <svg v-for="i in 5" :key="i" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <p class="font-oswald text-4xl mb-2">4.8 out of 5</p>
                <p class="text-gray-600">Based on 411 reviews</p>
            </div>

            <!-- Review List -->
            <div class="space-y-6">
                <div v-for="review in reviews" :key="review.id" class="border border-gray-200 p-6">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <div class="flex text-primary mb-2">
                                <svg v-for="i in 5" :key="i" class="w-4 h-4" :class="i <= review.rating ? 'fill-current' : 'fill-none stroke-current'" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="font-medium">{{ review.author }}</p>
                            <p class="text-sm text-gray-500">{{ review.date }}</p>
                        </div>
                        <span v-if="review.verified" class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">
                            Verified Purchase
                        </span>
                    </div>
                    <h3 class="font-medium mb-2">{{ review.title }}</h3>
                    <p class="text-gray-600 mb-3">{{ review.content }}</p>
                    <p class="text-sm text-gray-500">Product: {{ review.product }}</p>
                </div>
            </div>

            <!-- Load More -->
            <div class="text-center mt-8">
                <button class="btn-outline">Load More Reviews</button>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const reviews = ref([
    {
        id: 1,
        rating: 5,
        author: 'Mike Johnson',
        date: 'February 5, 2026',
        verified: true,
        title: 'Perfect solution for wind noise!',
        content: 'This cover completely eliminated the annoying whistling from my light bar. Installation was super easy and it looks great. Highly recommend!',
        product: 'Light Bar Cover | Dual Row 52"',
    },
    {
        id: 2,
        rating: 5,
        author: 'Sarah Williams',
        date: 'January 28, 2026',
        verified: true,
        title: 'Game changer',
        content: 'I was skeptical at first, but this really works. No more wind noise at highway speeds. The quality is excellent and it fits perfectly.',
        product: 'Light Bar Cover | Dual Row 52"',
    },
    {
        id: 3,
        rating: 4,
        author: 'David Martinez',
        date: 'January 20, 2026',
        verified: true,
        title: 'Great product, minor fit issue',
        content: 'The cover works great and looks good. Had a slight fitment issue but customer service helped me sort it out quickly. Very happy overall.',
        product: 'Light Bar Cover | Dual Row 52"',
    },
    {
        id: 4,
        rating: 5,
        author: 'Jennifer Lee',
        date: 'January 15, 2026',
        verified: true,
        title: 'Love the custom inserts!',
        content: 'The subscription box is awesome! Get new designs every month and they are super easy to swap out. My Jeep looks different every time.',
        product: 'Graphic InsertZ | Subscription Box',
    },
    {
        id: 5,
        rating: 5,
        author: 'Robert Brown',
        date: 'January 10, 2026',
        verified: true,
        title: 'Excellent quality',
        content: 'High quality product that does exactly what it says. Installation took less than 5 minutes. Worth every penny.',
        product: 'Light Bar Cover | Dual Row 52"',
    },
]);
</script>
