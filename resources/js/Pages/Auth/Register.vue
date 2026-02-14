<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero/hero-bg.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-30">
        </div>
        
        <div class="relative z-10 max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-20 w-auto" src="/images/logo/logo.svg" alt="AeroLidz Logo">
                <h2 class="mt-6 text-center font-oswald text-4xl font-bold text-white uppercase">
                    Create your account
                </h2>
            </div>
            
            <form class="mt-8 space-y-6 bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20" @submit.prevent="submit">
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="name" class="text-white text-sm font-semibold mb-2 block">Full Name</label>
                        <input
                            id="name"
                            v-model="form.name"
                            type="text"
                            autocomplete="name"
                            required
                            class="appearance-none relative block w-full px-4 py-3 border border-white/20 bg-white/5 placeholder-gray-400 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter your full name"
                        />
                        <div v-if="form.errors.name" class="text-red-400 text-sm mt-1">{{ form.errors.name }}</div>
                    </div>

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
                            autocomplete="new-password"
                            required
                            class="appearance-none relative block w-full px-4 py-3 border border-white/20 bg-white/5 placeholder-gray-400 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Create a password"
                        />
                        <div v-if="form.errors.password" class="text-red-400 text-sm mt-1">{{ form.errors.password }}</div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="text-white text-sm font-semibold mb-2 block">Confirm Password</label>
                        <input
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            type="password"
                            autocomplete="new-password"
                            required
                            class="appearance-none relative block w-full px-4 py-3 border border-white/20 bg-white/5 placeholder-gray-400 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Confirm your password"
                        />
                        <div v-if="form.errors.password_confirmation" class="text-red-400 text-sm mt-1">{{ form.errors.password_confirmation }}</div>
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transition-colors uppercase tracking-wider"
                    >
                        <span v-if="form.processing">Creating account...</span>
                        <span v-else>Create account</span>
                    </button>
                </div>

                <div class="text-center">
                    <span class="text-white/70 text-sm">Already have an account? </span>
                    <Link href="/login" class="font-medium text-blue-400 hover:text-blue-300">
                        Sign in here
                    </Link>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm, Link, Head } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post('/register', {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>
