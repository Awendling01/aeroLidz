<template>
    <div class="min-h-screen flex flex-col">
        <Header />
        <main class="flex-1">
            <slot />
        </main>
        <Footer class="relative z-10" />
    </div>
</template>

<script setup>
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
</script>
