<template>
    <Head>
        <title>How To Install Your Light Bar Cover & InsertZ - AeroLidz</title>
        <meta name="description" content="Step-by-step installation guide for AeroLidz light bar covers and graphic InsertZ. No tools required. Video tutorials and brand compatibility info included.">
        <meta property="og:title" content="Installation Guide - AeroLidz">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">How To</span>
            </nav>
        </div>
    </div>

    <!-- Light Bar Cover Installation -->
    <section class="section-padding">
        <div class="max-w-7xl mx-auto">
            <h1 class="heading-lg text-center mb-4">How to install the cover</h1>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
                Installing the light bar cover requires no tools whatsoever! It's easy and convenient thanks to the aerodynamic design.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div v-for="step in coverSteps" :key="step.num" class="text-center">
                    <div class="relative mb-6">
                        <img :src="step.image" :alt="step.title" class="w-full h-56 object-cover">
                        <span class="absolute top-4 left-4 bg-primary text-white font-oswald text-2xl w-10 h-10 flex items-center justify-center">
                            {{ step.num }}
                        </span>
                    </div>
                    <p class="text-gray-600">{{ step.description }}</p>
                </div>
            </div>

            <div class="text-center">
                <Link href="/shop?category=covers" class="btn-primary">Get Cover</Link>
            </div>
        </div>
    </section>

    <!-- Insert Installation -->
    <section class="section-padding bg-light-gray">
        <div class="max-w-7xl mx-auto">
            <h2 class="heading-lg text-center mb-4">How to use the inserts</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
                Our inserts fit perfectly inside our light bar covers. If you get a few, they're easily interchangeable — no tools needed!
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div v-for="step in insertSteps" :key="step.num" class="text-center">
                    <div class="relative mb-6">
                        <img :src="step.image" :alt="step.title" class="w-full h-56 object-cover">
                        <span class="absolute top-4 left-4 bg-primary text-white font-oswald text-2xl w-10 h-10 flex items-center justify-center">
                            {{ step.num }}
                        </span>
                    </div>
                    <p class="text-gray-600">{{ step.description }}</p>
                </div>
            </div>

            <div class="text-center">
                <Link href="/shop?category=graphic" class="btn-primary">Get Insert</Link>
            </div>
        </div>
    </section>

    <!-- Compatibility Warning -->
    <section class="section-padding bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6">
                <svg class="w-16 h-16 mx-auto text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
                </svg>
            </div>
            <h2 class="heading-md mb-6">We Currently Don't Make Covers for Curved Light Bars</h2>
            <p class="text-gray-600 max-w-lg mx-auto">
                Our covers are designed for straight light bars only. Stay tuned to our social media for announcements about curved bar solutions.
            </p>
        </div>
    </section>

    <!-- Brand Compatibility -->
    <section class="section-padding bg-light-gray">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- What Works -->
                <div>
                    <h3 class="heading-md text-center mb-8 text-green-600">
                        <svg class="w-8 h-8 inline mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        What Works
                    </h3>
                    <div class="grid grid-cols-3 gap-4">
                        <div v-for="brand in compatibleBrands" :key="brand" class="bg-white p-4 flex items-center justify-center h-20">
                            <span class="font-oswald text-sm uppercase text-gray-700">{{ brand }}</span>
                        </div>
                    </div>
                </div>

                <!-- What Doesn't -->
                <div>
                    <h3 class="heading-md text-center mb-8 text-red-600">
                        <svg class="w-8 h-8 inline mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        What Doesn't
                    </h3>
                    <div class="grid grid-cols-3 gap-4">
                        <div v-for="brand in incompatibleBrands" :key="brand" class="bg-white p-4 flex items-center justify-center h-20 opacity-50">
                            <span class="font-oswald text-sm uppercase text-gray-700">{{ brand }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Tutorials -->
    <section class="section-padding bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="heading-lg text-center mb-12">Easy to Follow Video Tutorials</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div v-for="(video, i) in videos" :key="i" class="relative aspect-video bg-dark group cursor-pointer">
                    <img :src="video.thumbnail" :alt="video.title" class="w-full h-full object-cover opacity-80 group-hover:opacity-60 transition-opacity">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <p class="absolute bottom-4 left-4 text-white font-oswald text-sm uppercase tracking-wider">{{ video.title }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';

const coverSteps = [
    { num: 1, image: '/images/howto/cover-step-1.jpg', description: 'Spread one end of the AeroLidz cover apart (it won\'t break) and place it over the light bar.' },
    { num: 2, image: '/images/howto/cover-step-2.jpg', description: 'With one edge secured on the light bar, continue pressing the cover down the length.' },
    { num: 3, image: '/images/howto/cover-step-3.jpg', description: 'Press the cover all the way to the far edge until it snaps tight. Check fit and adjust.' },
];

const insertSteps = [
    { num: 1, image: '/images/howto/insert-step-1.jpg', description: 'Flex the insert and line up with the outside edge of the cover.' },
    { num: 2, image: '/images/howto/insert-step-2.jpg', description: 'Slide insert behind the cover while keeping the insert flexed.' },
    { num: 3, image: '/images/howto/insert-step-3.jpg', description: 'Finally, just align the edges and trim of the insert as needed.' },
];

const compatibleBrands = [
    'ARB', 'TJM', 'Light Force', 'Quake LED', 'Rigid Industries', 'Westin',
    'Putco', 'Superchips', 'Hella', 'Vision-X USA', 'Nilight', 'Auxbeam',
];

const incompatibleBrands = [
    'KC HiLiTES', 'Baja Designs', 'Heretic Studio', 'Diode Dynamics', 'Morimoto',
];

const videos = [
    { title: 'Cover Installation Guide', thumbnail: '/images/howto/video-1.jpg' },
    { title: 'Insert Installation Guide', thumbnail: '/images/howto/video-2.jpg' },
    { title: 'Cleaning & Maintenance', thumbnail: '/images/howto/video-3.jpg' },
    { title: 'Sizing & Compatibility', thumbnail: '/images/howto/video-4.jpg' },
];
</script>
