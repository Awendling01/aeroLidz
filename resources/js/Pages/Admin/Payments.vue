<template>
    <div class="min-h-screen">
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover">
        </div>
        <div class="relative z-10 min-h-screen p-8 pt-24">
            <div class="max-w-7xl mx-auto">
                <h1 class="font-oswald text-5xl font-bold text-white uppercase mb-8">Payments</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Total Payments</p>
                        <p class="text-white text-3xl font-bold">{{ payments.all?.length || 0 }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Past Due</p>
                        <p class="text-red-400 text-3xl font-bold">{{ payments.past_due?.length || 0 }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Total Processed</p>
                        <p class="text-green-400 text-3xl font-bold">${{ calculateTotal(payments.all).toLocaleString() }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                        <p class="text-white/70 text-sm uppercase mb-2">Past Due Amount</p>
                        <p class="text-red-400 text-3xl font-bold">${{ calculateTotal(payments.past_due).toLocaleString() }}</p>
                    </div>
                </div>

                <div v-if="payments.past_due?.length" class="bg-red-500/10 border border-red-500/30 backdrop-blur-md rounded-xl p-6 mb-6">
                    <h2 class="text-red-400 text-2xl font-bold mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        Past Due Payments
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-red-500/30">
                                    <th class="text-left text-white/70 py-3 px-4">Order ID</th>
                                    <th class="text-left text-white/70 py-3 px-4">User</th>
                                    <th class="text-left text-white/70 py-3 px-4">Amount</th>
                                    <th class="text-left text-white/70 py-3 px-4">Due Date</th>
                                    <th class="text-left text-white/70 py-3 px-4">Days Overdue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="payment in payments.past_due" :key="payment.id" class="border-b border-red-500/10">
                                    <td class="py-3 px-4 text-white">#{{ payment.order_id }}</td>
                                    <td class="py-3 px-4 text-white">{{ payment.order?.user?.name }}</td>
                                    <td class="py-3 px-4 text-red-400 font-bold">${{ payment.amount }}</td>
                                    <td class="py-3 px-4 text-white/70">{{ payment.payment_date }}</td>
                                    <td class="py-3 px-4 text-red-400">{{ payment.days_overdue || 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6">
                    <h2 class="text-white text-2xl font-bold mb-4">All Payments</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="text-left text-white/70 py-3 px-4">ID</th>
                                    <th class="text-left text-white/70 py-3 px-4">Order</th>
                                    <th class="text-left text-white/70 py-3 px-4">User</th>
                                    <th class="text-left text-white/70 py-3 px-4">Method</th>
                                    <th class="text-left text-white/70 py-3 px-4">Status</th>
                                    <th class="text-left text-white/70 py-3 px-4">Amount</th>
                                    <th class="text-left text-white/70 py-3 px-4">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="payment in payments.all" :key="payment.id" class="border-b border-white/10">
                                    <td class="py-3 px-4 text-white/70">{{ payment.id }}</td>
                                    <td class="py-3 px-4 text-white">#{{ payment.order_id }}</td>
                                    <td class="py-3 px-4 text-white">{{ payment.order?.user?.name }}</td>
                                    <td class="py-3 px-4 text-white/70 uppercase">{{ payment.payment_method }}</td>
                                    <td class="py-3 px-4">
                                        <span :class="{
                                            'bg-green-500/20 text-green-400': payment.status === 'completed',
                                            'bg-yellow-500/20 text-yellow-400': payment.status === 'pending',
                                            'bg-red-500/20 text-red-400': payment.status === 'failed'
                                        }" class="px-3 py-1 rounded-full text-xs">
                                            {{ payment.status }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-white font-semibold">${{ payment.amount }}</td>
                                    <td class="py-3 px-4 text-white/70">{{ payment.payment_date }}</td>
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
    payments: Object
});

const calculateTotal = (paymentArray) => {
    if (!paymentArray || !paymentArray.length) return 0;
    return paymentArray.reduce((sum, payment) => sum + parseFloat(payment.amount || 0), 0);
};
</script>
