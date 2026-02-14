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
                        Site Analytics
                    </h1>
                    <p class="text-white/70 text-lg">
                        User behavior and conversion metrics
                    </p>
                </div>

                <!-- Main Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Users</h3>
                        <p class="text-white text-3xl font-bold">{{ analytics.total_users }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Users With Purchases</h3>
                        <p class="text-green-400 text-3xl font-bold">{{ analytics.users_with_purchases }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-purple-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Conversion Rate</h3>
                        <p class="text-purple-400 text-3xl font-bold">{{ analytics.conversion_rate }}%</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-red-500/20 rounded-lg">
                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-white/70 text-sm font-medium mb-1">Non-Purchasers</h3>
                        <p class="text-red-400 text-3xl font-bold">{{ analytics.users_without_purchases }}</p>
                    </div>
                </div>

                <!-- Engagement & Purchase Behavior -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- User Engagement -->
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <h2 class="font-oswald text-2xl font-bold text-white uppercase mb-6">User Engagement</h2>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white/70">Active Users</span>
                                    <span class="text-white font-bold">{{ analytics.users_with_purchases }}</span>
                                </div>
                                <div class="w-full bg-white/10 rounded-full h-3">
                                    <div class="bg-green-500 h-3 rounded-full transition-all duration-500" 
                                        :style="{ width: analytics.conversion_rate + '%' }"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white/70">Inactive Users</span>
                                    <span class="text-white font-bold">{{ analytics.users_without_purchases }}</span>
                                </div>
                                <div class="w-full bg-white/10 rounded-full h-3">
                                    <div class="bg-red-500 h-3 rounded-full transition-all duration-500" 
                                        :style="{ width: (100 - analytics.conversion_rate) + '%' }"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Purchase Behavior -->
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <h2 class="font-oswald text-2xl font-bold text-white uppercase mb-6">Purchase Behavior</h2>
                        <div class="space-y-3">
                            <div class="flex justify-between py-2 border-b border-white/10">
                                <span class="text-white/70">Avg Orders per Customer</span>
                                <span class="text-white font-bold">{{ analytics.avg_orders_per_customer }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-white/10">
                                <span class="text-white/70">Avg Order Value</span>
                                <span class="text-green-400 font-bold">${{ parseFloat(analytics.avg_order_value).toFixed(2) }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-white/10">
                                <span class="text-white/70">Repeat Customers</span>
                                <span class="text-white font-bold">{{ analytics.repeat_customers }}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-white/70">One-Time Buyers</span>
                                <span class="text-white font-bold">{{ analytics.one_time_buyers }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Activity Table -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 overflow-hidden">
                    <div class="p-6 border-b border-white/20">
                        <h2 class="font-oswald text-2xl font-bold text-white uppercase">User Activity Overview</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">User</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Email</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Orders</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Total Spent</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in analytics.user_activity" :key="user.id" 
                                    class="border-b border-white/10 hover:bg-white/5">
                                    <td class="px-6 py-4 text-white font-medium">{{ user.name }}</td>
                                    <td class="px-6 py-4 text-white/70">{{ user.email }}</td>
                                    <td class="px-6 py-4 text-white">{{ user.orders_count }}</td>
                                    <td class="px-6 py-4 text-white font-semibold">${{ user.total_spent.toLocaleString() }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold"
                                            :class="{
                                                'bg-green-500/20 text-green-400': user.orders_count > 0,
                                                'bg-gray-500/20 text-gray-400': user.orders_count === 0
                                            }">
                                            {{ user.orders_count > 0 ? 'Active' : 'No Purchases' }}
                                        </span>
                                    </td>
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
    analytics: Object
});
</script>
