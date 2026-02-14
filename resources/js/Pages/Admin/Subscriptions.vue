<template>
    <div class="min-h-screen">
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover">
        </div>
        <div class="relative z-10 min-h-screen p-8 pt-24">
            <div class="max-w-7xl mx-auto">
                <h1 class="font-oswald text-5xl font-bold text-white uppercase mb-8">Subscriptions</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Active Subscriptions</p>
                        <p class="text-white text-3xl font-bold">{{ subscriptions.active_count }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Monthly Recurring Revenue</p>
                        <p class="text-green-400 text-3xl font-bold">${{ subscriptions.mrr?.toLocaleString() || 0 }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Subscription Products</p>
                        <p class="text-white text-3xl font-bold">{{ subscriptions.products?.length || 0 }}</p>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6 mb-6">
                    <h2 class="text-white text-2xl font-bold mb-4">Subscription Products</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="text-left text-white/70 py-3 px-4">Product</th>
                                    <th class="text-left text-white/70 py-3 px-4">Price</th>
                                    <th class="text-left text-white/70 py-3 px-4">Billing Cycle</th>
                                    <th class="text-left text-white/70 py-3 px-4">Active Subscribers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in subscriptions.products" :key="product.id" class="border-b border-white/10">
                                    <td class="py-3 px-4 text-white">{{ product.name }}</td>
                                    <td class="py-3 px-4 text-white">${{ product.price }}</td>
                                    <td class="py-3 px-4 text-white/70">{{ product.subscription_interval || 'Monthly' }}</td>
                                    <td class="py-3 px-4 text-white">{{ product.subscribers_count || 0 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                    <h2 class="text-white text-2xl font-bold mb-4">Active Subscriptions</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="text-left text-white/70 py-3 px-4">User</th>
                                    <th class="text-left text-white/70 py-3 px-4">Product</th>
                                    <th class="text-left text-white/70 py-3 px-4">Status</th>
                                    <th class="text-left text-white/70 py-3 px-4">Next Billing</th>
                                    <th class="text-left text-white/70 py-3 px-4">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="sub in subscriptions.active" :key="sub.id" class="border-b border-white/10">
                                    <td class="py-3 px-4 text-white">{{ sub.user?.name }}</td>
                                    <td class="py-3 px-4 text-white">{{ sub.product?.name }}</td>
                                    <td class="py-3 px-4">
                                        <span class="px-3 py-1 rounded-full text-xs bg-green-500/20 text-green-400">
                                            {{ sub.status || 'Active' }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-white/70">{{ sub.next_billing_date }}</td>
                                    <td class="py-3 px-4 text-white">${{ sub.amount }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

defineProps({
    subscriptions: Object
});
</script>
