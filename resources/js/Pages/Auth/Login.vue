<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-30">
        </div>
        
        <div class="relative z-10 max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-20 w-auto" src="/images/logo/logo.svg" alt="AeroLidz Logo">
                <h2 class="mt-6 text-center font-oswald text-4xl font-bold text-white uppercase">
                    Sign in to your account
                </h2>
            </div>
            
            <form class="mt-8 space-y-6 bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20" @submit.prevent="submit">
                <div v-if="status" class="rounded-md bg-green-500/20 border border-green-500/30 p-4">
                    <div class="text-sm text-green-400">
                        {{ status }}
                    </div>
                </div>

                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="email" class="text-white text-sm font-semibold mb-2 block">Email address</label>
                        <input
                            id="email"
                            v-model="form.email"
                            type="email"
                            autocomplete="email"
                            required
                            class="appearance-none relative block w-full px-4 py-3 border border-white/20 bg-white/5 placeholder-gray-400 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter your email"
                        />
                        <div v-if="form.errors.email" class="text-red-400 text-sm mt-1">{{ form.errors.email }}</div>
                    </div>
                    
                    <div>
                        <label for="password" class="text-white text-sm font-semibold mb-2 block">Password</label>
                        <input
                            id="password"
                            v-model="form.password"
                            type="password"
                            autocomplete="current-password"
                            required
                            class="appearance-none relative block w-full px-4 py-3 border border-white/20 bg-white/5 placeholder-gray-400 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter your password"
                        />
                        <div v-if="form.errors.password" class="text-red-400 text-sm mt-1">{{ form.errors.password }}</div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            id="remember"
                            v-model="form.remember"
                            type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-white/20 rounded bg-white/5"
                        />
                        <label for="remember" class="ml-2 block text-sm text-white">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <Link href="/forgot-password" class="font-medium text-blue-400 hover:text-blue-300">
                            Forgot your password?
                        </Link>
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transition-colors uppercase tracking-wider"
                    >
                        <span v-if="form.processing">Signing in...</span>
                        <span v-else>Sign in</span>
                    </button>
                </div>

                <div class="text-center">
                    <span class="text-white/70 text-sm">Don't have an account? </span>
                    <Link href="/register" class="font-medium text-blue-400 hover:text-blue-300">
                        Register here
                    </Link>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm, Link, Head } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};
</script>
