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
                        Admin Dashboard
                    </h1>
                    <p class="text-white/70 text-lg">
                        Welcome back! Here's your overview.
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- Total Users -->
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Users</h3>
                        <p class="text-white text-3xl font-bold">{{ stats.total_users.toLocaleString() }}</p>
                    </div>

                    <!-- Total Orders -->
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Orders</h3>
                        <p class="text-white text-3xl font-bold">{{ stats.total_orders.toLocaleString() }}</p>
                    </div>

                    <!-- Total Revenue -->
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-amber-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Revenue</h3>
                        <p class="text-white text-3xl font-bold">${{ stats.total_revenue.toLocaleString() }}</p>
                    </div>

                    <!-- Pending Orders -->
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-red-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Pending Orders</h3>
                        <p class="text-white text-3xl font-bold">{{ stats.pending_orders }}</p>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 overflow-hidden">
                    <div class="p-6 border-b border-white/20">
                        <h2 class="font-oswald text-2xl font-bold text-white uppercase">Recent Orders</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Order ID</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Customer</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Total</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Status</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="order in stats.recent_orders" :key="order.id" class="border-b border-white/10 hover:bg-white/5">
                                    <td class="px-6 py-4 text-white">#{{ order.id }}</td>
                                    <td class="px-6 py-4 text-white">{{ order.user?.name || 'Guest' }}</td>
                                    <td class="px-6 py-4 text-white font-semibold">${{ order.total }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold"
                                            :class="{
                                                'bg-green-500/20 text-green-400': order.status === 'completed',
                                                'bg-yellow-500/20 text-yellow-400': order.status === 'pending',
                                                'bg-red-500/20 text-red-400': order.status === 'cancelled'
                                            }">
                                            {{ order.status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-white/70">{{ new Date(order.created_at).toLocaleDateString() }}</td>
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
import { Head } from '@inertiajs/vue3';

defineProps({
    stats: Object
});
</script>
