<template>
    <div class="min-h-screen">
        <!-- Hero Background -->
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover">
        </div>

        <!-- Main Content -->
        <div class="relative z-10 min-h-screen p-8 pt-24">
            <div class="max-w-7xl mx-auto">
                <div class="mb-8">
                    <h1 class="font-oswald text-5xl font-bold text-white uppercase mb-2">Financial Reports</h1>
                    <p class="text-white/70 text-lg">Complete financial overview and analytics</p>
                </div>

                <!-- Revenue Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Revenue</h3>
                        <p class="text-white text-3xl font-bold">${{ financial.total_revenue.toLocaleString() }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Today's Revenue</h3>
                        <p class="text-white text-3xl font-bold">${{ financial.revenue_today.toLocaleString() }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">This Month</h3>
                        <p class="text-white text-3xl font-bold">${{ financial.revenue_this_month.toLocaleString() }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Avg Order Value</h3>
                        <p class="text-white text-3xl font-bold">${{ financial.average_order_value ? financial.average_order_value.toFixed(2) : '0.00' }}</p>
                    </div>
                </div>

                <!-- Orders Stats -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Orders</h3>
                        <p class="text-white text-2xl font-bold">{{ financial.total_orders }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Completed</h3>
                        <p class="text-green-400 text-2xl font-bold">{{ financial.completed_orders }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Pending</h3>
                        <p class="text-yellow-400 text-2xl font-bold">{{ financial.pending_orders }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Cancelled</h3>
                        <p class="text-red-400 text-2xl font-bold">{{ financial.cancelled_orders }}</p>
                    </div>
                </div>

                <!-- Revenue by Month -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6 mb-8">
                    <h2 class="font-oswald text-2xl font-bold text-white uppercase mb-6">Revenue by Month (Last 12 Months)</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Month</th>
                                    <th class="px-4 py-3 text-right text-sm font-semibold text-white/70">Orders</th>
                                    <th class="px-4 py-3 text-right text-sm font-semibold text-white/70">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="month in financial.revenue_by_month" :key="month.month" class="border-b border-white/10">
                                    <td class="px-4 py-3 text-white">{{ month.month }}</td>
                                    <td class="px-4 py-3 text-right text-white">{{ month.orders }}</td>
                                    <td class="px-4 py-3 text-right text-white font-semibold">${{ month.revenue.toLocaleString() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                    <h2 class="font-oswald text-2xl font-bold text-white uppercase mb-6">Top Products by Revenue</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="px-4 py-3 text-left text-sm font-semibold text-white/70">Product</th>
                                    <th class="px-4 py-3 text-right text-sm font-semibold text-white/70">Units Sold</th>
                                    <th class="px-4 py-3 text-right text-sm font-semibold text-white/70">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in financial.top_products" :key="product.name" class="border-b border-white/10">
                                    <td class="px-4 py-3 text-white">{{ product.name }}</td>
                                    <td class="px-4 py-3 text-right text-white">{{ product.units_sold }}</td>
                                    <td class="px-4 py-3 text-right text-white font-semibold">${{ product.revenue.toLocaleString() }}</td>
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
    financial: Object
});
</script>
