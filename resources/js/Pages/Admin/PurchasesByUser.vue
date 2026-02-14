<template>
    <div class="min-h-screen">
        <!-- Hero Background -->
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <img 
                src="/images/hero/hero-bg.jpg" 
                alt="Background" 
                class="absolute inset-0 w-full h-full object-cover"
            >
        </div>

        <!-- Main Content -->
        <div class="relative z-10 min-h-screen p-8 pt-24">
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <div class="mb-12">
                    <h1 class="font-oswald text-5xl font-bold text-white uppercase mb-2">
                        Purchases by User
                    </h1>
                    <p class="text-white/70 text-lg">
                        Detailed purchase history for all users
                    </p>
                </div>

                <!-- User Purchase Cards -->
                <div class="space-y-6">
                    <div v-for="user in userPurchases" :key="user.id" 
                        class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 overflow-hidden">
                        <!-- User Header -->
                        <div class="p-6 border-b border-white/20 flex justify-between items-start">
                            <div>
                                <h3 class="text-white text-2xl font-bold mb-1">{{ user.name }}</h3>
                                <p class="text-white/70">{{ user.email }}</p>
                            </div>
                            <div class="text-right">
                                <div class="mb-4">
                                    <p class="text-white/70 text-sm mb-1">Total Orders</p>
                                    <p class="text-white text-3xl font-bold">{{ user.total_orders }}</p>
                                </div>
                                <div>
                                    <p class="text-white/70 text-sm mb-1">Total Spent</p>
                                    <p class="text-green-400 text-3xl font-bold">${{ user.total_spent.toLocaleString() }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Orders Table -->
                        <div class="p-6">
                            <h4 class="text-white font-semibold text-lg mb-4">Order History</h4>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-white/20">
                                            <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Order ID</th>
                                            <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Date</th>
                                            <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Status</th>
                                            <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Items</th>
                                            <th class="px-4 py-3 text-right text-sm font-semibold text-white/70">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="order in user.orders" :key="order.id" 
                                            class="border-b border-white/10 hover:bg-white/5">
                                            <td class="px-4 py-3 text-white">#{{ order.id }}</td>
                                            <td class="px-4 py-3 text-white/70">
                                                {{ new Date(order.created_at).toLocaleDateString() }}
                                            </td>
                                            <td class="px-4 py-3">
                                                <span class="px-3 py-1 rounded-full text-xs font-semibold"
                                                    :class="{
                                                        'bg-green-500/20 text-green-400': order.status === 'completed',
                                                        'bg-yellow-500/20 text-yellow-400': order.status === 'pending',
                                                        'bg-red-500/20 text-red-400': order.status === 'cancelled'
                                                    }">
                                                    {{ order.status }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-white/70">
                                                {{ order.items?.length || 0 }} item(s)
                                            </td>
                                            <td class="px-4 py-3 text-white font-semibold text-right">
                                                ${{ order.total }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- No Data Message -->
                <div v-if="!userPurchases || userPurchases.length === 0" 
                    class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-12 text-center">
                    <svg class="w-16 h-16 text-white/30 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <h3 class="text-white text-xl font-semibold mb-2">No Purchases Yet</h3>
                    <p class="text-white/70">No users have made purchases yet.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    userPurchases: Array
});
</script>
