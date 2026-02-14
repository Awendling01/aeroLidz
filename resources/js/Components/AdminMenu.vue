<template>
    <div>
        <!-- Hamburger Button -->
        <button
            @click="$emit('toggle')"
            class="fixed top-6 right-6 z-[100] bg-black/40 p-4 rounded-lg hover:bg-black/60 transition-all duration-300"
        >
            <div class="space-y-2">
                <span class="block w-8 h-0.5 bg-white transition-all duration-300" :class="open ? 'rotate-45 translate-y-2.5' : ''"></span>
                <span class="block w-8 h-0.5 bg-white transition-all duration-300" :class="open ? 'opacity-0' : ''"></span>
                <span class="block w-8 h-0.5 bg-white transition-all duration-300" :class="open ? '-rotate-45 -translate-y-2.5' : ''"></span>
            </div>
        </button>

        <!-- Slide-out Menu -->
        <transition
            enter-active-class="transition-transform duration-300 ease-out"
            enter-from-class="translate-x-full"
            enter-to-class="translate-x-0"
            leave-active-class="transition-transform duration-300 ease-in"
            leave-from-class="translate-x-0"
            leave-to-class="translate-x-full"
        >
            <div v-if="open" class="fixed top-0 right-0 w-80 h-full bg-black/95 backdrop-blur-xl z-[90] overflow-y-auto shadow-2xl">
                <div class="p-8 pt-24">
                    <h2 class="font-oswald text-2xl font-bold text-white mb-8 uppercase tracking-wide">
                        Admin Reports
                    </h2>
                    
                    <nav class="space-y-2">
                        <Link
                            :href="route('admin.dashboard')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.dashboard') }"
                        >
                            Dashboard
                        </Link>

                        <Link
                            :href="route('admin.users')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.users') }"
                        >
                            Users
                        </Link>

                        <Link
                            :href="route('admin.purchases-by-user')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.purchases-by-user') }"
                        >
                            Purchases by User
                        </Link>

                        <Link
                            :href="route('admin.financial')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.financial') }"
                        >
                            Financial Reports
                        </Link>

                        <Link
                            :href="route('admin.subscriptions')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.subscriptions') }"
                        >
                            Subscriptions
                        </Link>

                        <Link
                            :href="route('admin.payments')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.payments') }"
                        >
                            Payments & Past Due
                        </Link>

                        <Link
                            :href="route('admin.analytics')"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                            :class="{ 'bg-primary': route().current('admin.analytics') }"
                        >
                            Site Analytics
                        </Link>

                        <div class="border-t border-white/20 my-4"></div>

                        <Link
                            href="/"
                            class="block px-4 py-3 text-white hover:bg-white/10 rounded-lg transition-all duration-200 font-medium"
                        >
                            Back to Site
                        </Link>
                    </nav>
                </div>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    open: Boolean
});

defineEmits(['toggle']);
</script>
