<template>
    <Head title="Shopping Cart" />

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Cart</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-7xl mx-auto">
            <h1 class="heading-lg mb-8">Shopping Cart</h1>

            <div v-if="cartItems.length === 0" class="text-center py-12">
                <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <h2 class="text-2xl font-oswald mb-4">Your cart is empty</h2>
                <p class="text-gray-600 mb-6">Add some items to get started!</p>
                <Link href="/shop" class="btn-primary">
                    Continue Shopping
                </Link>
            </div>

            <div v-else class="grid lg:grid-cols-3 gap-8">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="space-y-4">
                        <div v-for="item in cartItems" :key="item.id" class="flex gap-4 bg-white p-4 border border-gray-200">
                            <img :src="item.image" :alt="item.name" class="w-24 h-24 object-cover">
                            
                            <div class="flex-1">
                                <h3 class="font-oswald text-lg mb-2">{{ item.name }}</h3>
                                <p class="text-gray-600 mb-2">${{ item.price.toFixed(2) }}</p>
                                
                                <div class="flex items-center gap-4">
                                    <!-- Quantity Controls -->
                                    <div class="flex border border-gray-300">
                                        <button 
                                            @click="updateQuantity(item.id, item.quantity - 1)" 
                                            class="px-3 py-1 hover:bg-gray-100"
                                            :disabled="updating"
                                        >
                                            -
                                        </button>
                                        <span class="px-4 py-1 border-x border-gray-300 min-w-[50px] text-center">
                                            {{ item.quantity }}
                                        </span>
                                        <button 
                                            @click="updateQuantity(item.id, item.quantity + 1)" 
                                            class="px-3 py-1 hover:bg-gray-100"
                                            :disabled="updating"
                                        >
                                            +
                                        </button>
                                    </div>

                                    <!-- Remove Button -->
                                    <button 
                                        @click="removeItem(item.id)" 
                                        class="text-sm text-red-600 hover:text-red-700"
                                        :disabled="updating"
                                    >
                                        Remove
                                    </button>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="font-oswald text-xl">${{ item.total.toFixed(2) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <Link href="/shop" class="text-primary hover:underline">
                            ← Continue Shopping
                        </Link>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-light-gray p-6 sticky top-24">
                        <h2 class="font-oswald text-xl uppercase mb-4">Order Summary</h2>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-medium">${{ subtotal.toFixed(2) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-medium">
                                    {{ shipping === 0 ? 'FREE' : `$${shipping.toFixed(2)}` }}
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-medium">${{ tax.toFixed(2) }}</span>
                            </div>
                            <div class="border-t border-gray-300 pt-3 flex justify-between">
                                <span class="font-oswald text-lg uppercase">Total</span>
                                <span class="font-oswald text-2xl text-primary">${{ total.toFixed(2) }}</span>
                            </div>
                        </div>

                        <button @click="checkout" class="btn-primary w-full mb-3">
                            Proceed to Checkout
                        </button>

                        <button @click="clearCart" class="btn-outline w-full text-sm">
                            Clear Cart
                        </button>

                        <p v-if="subtotal < 100" class="text-sm text-gray-600 text-center mt-4">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Add ${{ (100 - subtotal).toFixed(2) }} more for free shipping!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    cartItems: Array,
    subtotal: Number,
    shipping: Number,
    tax: Number,
    total: Number,
});

const updating = ref(false);

const updateQuantity = (id, quantity) => {
    updating.value = true;
    router.patch(`/cart/${id}`, 
        { quantity }, 
        {
            preserveScroll: true,
            onFinish: () => {
                updating.value = false;
            }
        }
    );
};

const removeItem = (id) => {
    if (confirm('Remove this item from cart?')) {
        updating.value = true;
        router.delete(`/cart/${id}`, {
            preserveScroll: true,
            onFinish: () => {
                updating.value = false;
            }
        });
    }
};

const clearCart = () => {
    if (confirm('Clear all items from cart?')) {
        updating.value = true;
        router.delete('/cart', {
            onFinish: () => {
                updating.value = false;
            }
        });
    }
};

const checkout = () => {
    alert('Checkout functionality coming soon!');
    // TODO: Implement checkout flow
};
</script>
