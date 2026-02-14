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
                        Users
                    </h1>
                    <p class="text-white/70 text-lg">
                        All registered users and their activity
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Users</h3>
                        <p class="text-white text-3xl font-bold">{{ stats.total_users }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Users with Orders</h3>
                        <p class="text-green-400 text-3xl font-bold">{{ stats.users_with_orders }}</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20">
                        <h3 class="text-white/70 text-sm font-medium mb-1">Total Revenue</h3>
                        <p class="text-white text-3xl font-bold">${{ stats.total_revenue_from_users.toLocaleString() }}</p>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl border border-white/20 overflow-hidden">
                    <div class="p-6 border-b border-white/20">
                        <h2 class="font-oswald text-2xl font-bold text-white uppercase">All Users</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">ID</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Name</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Email</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Role</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Orders</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Total Spent</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white/70">Joined</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id" class="border-b border-white/10 hover:bg-white/5">
                                    <td class="px-6 py-4 text-white">{{ user.id }}</td>
                                    <td class="px-6 py-4 text-white font-medium">{{ user.name }}</td>
                                    <td class="px-6 py-4 text-white/70">{{ user.email }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-semibold"
                                            :class="{
                                                'bg-purple-500/20 text-purple-400': user.role === 'admin',
                                                'bg-blue-500/20 text-blue-400': user.role === 'user'
                                            }">
                                            {{ user.role }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-white">{{ user.orders_count }}</td>
                                    <td class="px-6 py-4 text-green-400 font-semibold">${{ user.total_spent.toLocaleString() }}</td>
                                    <td class="px-6 py-4 text-white/70">{{ new Date(user.created_at).toLocaleDateString() }}</td>
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
    users: Array,
    stats: Object
});
</script>
