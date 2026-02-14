<template>
    <div class="min-h-screen bg-gray-900 py-12">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-30">
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="font-oswald text-4xl font-bold text-white uppercase">Profile Settings</h1>
                <Link :href="route('home')" class="text-blue-400 hover:text-blue-300 mt-2 inline-block">← Back to Home</Link>
            </div>

            <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20">
                <h2 class="text-2xl font-bold text-white mb-6">Profile Information</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="text-white text-sm font-semibold mb-2 block">Name</label>
                        <p class="text-white text-lg">{{ user.name }}</p>
                    </div>
                    
                    <div>
                        <label class="text-white text-sm font-semibold mb-2 block">Email</label>
                        <p class="text-white text-lg">{{ user.email }}</p>
                    </div>
                    
                    <div class="pt-4">
                        <Link 
                            :href="route('admin.dashboard')" 
                            class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition-colors uppercase"
                        >
                            Go to Admin Dashboard
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    user: Object,
});
</script>
