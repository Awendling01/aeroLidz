<template>
    <Head :title="product.name" />

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <Link href="/shop" class="hover:text-primary">Shop</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">{{ product.name }}</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div>
                    <div class="mb-4">
                        <img
                            :src="selectedImage"
                            :alt="product.name"
                            class="w-full h-[400px] md:h-[500px] object-cover bg-light-gray"
                        >
                    </div>
                    <div class="grid grid-cols-5 gap-2">
                        <button
                            v-for="(img, i) in product.images"
                            :key="i"
                            @click="selectedImage = img"
                            class="border-2 transition-colors"
                            :class="selectedImage === img ? 'border-primary' : 'border-transparent hover:border-gray-300'"
                        >
                            <img :src="img" :alt="`${product.name} view ${i + 1}`" class="w-full h-16 object-cover">
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <h1 class="heading-md mb-2">{{ product.name }}</h1>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-primary">
                            <svg v-for="i in 5" :key="i" class="w-5 h-5" :class="i <= Math.round(product.rating) ? 'fill-current' : 'fill-none stroke-current'" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-500">{{ product.rating }}/5.0 ({{ product.reviewCount }} reviews)</span>
                    </div>
                    
                    <p class="font-oswald text-3xl mb-6">
                        <span v-if="product.fromPrice">From </span>${{ product.price.toFixed(2) }}
                    </p>

                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">{{ product.description }}</p>
                        <ul class="space-y-2 text-sm">
                            <li v-for="feature in product.features" :key="feature" class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ feature }}
                            </li>
                        </ul>
                    </div>

                    <!-- Stock Status -->
                    <div class="mb-6">
                        <span v-if="product.inStock" class="inline-flex items-center text-sm text-green-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            In Stock
                        </span>
                        <span v-else class="inline-flex items-center text-sm text-red-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            Out of Stock
                        </span>
                    </div>

                    <!-- Quantity -->
                    <div class="flex items-center gap-4 mb-6">
                        <label class="font-oswald uppercase text-sm tracking-wider">Quantity</label>
                        <div class="flex border border-gray-300">
                            <button @click="qty > 1 && qty--" class="px-3 py-2 hover:bg-gray-100 transition-colors">-</button>
                            <span class="px-4 py-2 border-x border-gray-300 min-w-[50px] text-center">{{ qty }}</span>
                            <button @click="qty++" class="px-3 py-2 hover:bg-gray-100 transition-colors">+</button>
                        </div>
                    </div>

                    <button 
                        @click="addToCart" 
                        class="btn-primary w-full text-lg py-4 mb-3"
                        :disabled="!product.inStock || adding"
                    >
                        {{ adding ? 'Adding...' : 'Add to Cart' }}
                    </button>

                    <p class="text-center text-sm text-gray-500">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Free shipping on orders over $100
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    product: Object,
});

const qty = ref(1);
const selectedImage = ref(props.product.images[0]);
const adding = ref(false);

const addToCart = () => {
    adding.value = true;
    
    router.post('/cart/add', {
        id: props.product.id,
        name: props.product.name,
        price: props.product.price,
        quantity: qty.value,
        image: props.product.images[0],
    }, {
        preserveScroll: true,
        onSuccess: () => {
            alert(`${qty.value} item(s) added to cart!`);
            qty.value = 1;
        },
        onFinish: () => {
            adding.value = false;
        }
    });
};
</script>
