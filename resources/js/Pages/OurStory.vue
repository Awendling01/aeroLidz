<template>
    <Head>
        <title>Our Story - AeroLidz</title>
        <meta name="description" content="Learn how AeroLidz started from a simple idea to eliminate light bar wind noise and grew into the original aerodynamic light bar cover company.">
        <meta property="og:title" content="Our Story - AeroLidz">
        <meta property="og:description" content="From a Christmas gift idea to the world's first aerodynamic light bar cover. Discover the AeroLidz story.">
    </Head>

    <!-- Hero -->
    <section class="relative h-[50vh] min-h-[400px] flex items-center justify-center bg-dark">
        <img src="/images/story/hero.jpg" alt="About AeroLidz" class="absolute inset-0 w-full h-full object-cover opacity-40">
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="heading-xl">About Us</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Our Story</span>
            </nav>
        </div>
    </div>

    <!-- Story Timeline -->
    <section class="section-padding">
        <div class="max-w-4xl mx-auto">
            <!-- Intro -->
            <div class="text-center mb-16">
                <p class="text-lg text-gray-600 italic max-w-3xl mx-auto">
                    "In 2017, my wife gave me a light bar for Christmas. I installed it only to discover a horrible whistling noise at any speed over 30 mph. That frustration led me to create AeroLidz."
                </p>
                <p class="mt-4 font-oswald text-primary uppercase tracking-wider">— Gabe, Founder</p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-px top-0 bottom-0 w-0.5 bg-gray-200 hidden md:block"></div>

                <div v-for="(event, i) in timeline" :key="i" class="mb-12 md:mb-16">
                    <div class="md:grid md:grid-cols-2 md:gap-12 items-center" :class="i % 2 === 0 ? '' : 'md:direction-rtl'">
                        <div :class="i % 2 === 0 ? 'md:text-right md:pr-12' : 'md:order-2 md:pl-12'">
                            <span class="inline-block bg-primary text-white font-oswald text-sm px-4 py-1 mb-3">
                                {{ event.date }}
                            </span>
                            <h3 class="font-oswald text-xl uppercase mb-2">{{ event.title }}</h3>
                            <p class="text-gray-600">{{ event.description }}</p>
                        </div>
                        <div :class="i % 2 === 0 ? 'md:pl-12' : 'md:order-1 md:pr-12'">
                            <img
                                v-if="event.image"
                                :src="event.image"
                                :alt="event.title"
                                class="w-full h-64 object-cover mt-4 md:mt-0"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-16">
                <Link href="/shop" class="btn-primary text-lg px-12">Shop Now</Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';

const timeline = [
    {
        date: 'December 2016',
        title: 'The Christmas Gift',
        description: 'Gabe received a light bar as a Christmas gift from his wife. After installing it, he discovered a terrible whistling noise at highway speeds.',
        image: '/images/story/christmas-gift.jpg',
    },
    {
        date: 'January 2017',
        title: 'The DIY Prototype',
        description: 'Frustrated by the noise, Gabe created a DIY solution using spray-painted PVC conduit. It worked — the noise was gone. He posted photos to social media and got 20 inquiries within 20 minutes.',
        image: '/images/story/prototype.jpg',
    },
    {
        date: 'February 2017',
        title: 'Company Formation',
        description: 'Seeing the demand, Gabe officially formed the company on February 23rd. Two days later, the search for a manufacturer began.',
        image: '/images/story/formation.jpg',
    },
    {
        date: 'March 2017',
        title: 'The Name',
        description: "The company needed a name. Gabe's wife suggested \"AeroLidz\" — a nod to the aerodynamic design and the cover being a \"lid\" for the light bar. The name stuck.",
        image: null,
    },
    {
        date: 'June 2017',
        title: 'First Product',
        description: 'The first AeroLidz products were presented to the public. While the initial execution was challenging, the concept proved the demand was real.',
        image: '/images/story/first-product.jpg',
    },
    {
        date: 'August 2017',
        title: 'Smokey Mountain Jeep Invasion',
        description: 'AeroLidz debuted at the Smokey Mountain Jeep Invasion show and completely sold out. This was the validation that this was more than just a side project.',
        image: '/images/story/jeep-invasion.jpg',
    },
    {
        date: 'October 2017',
        title: 'InsertZ Innovation',
        description: 'The discovery that led to the InsertZ product line — printed graphics that slide between the cover and the light bar for a custom look.',
        image: '/images/story/insertz.jpg',
    },
    {
        date: '2018-2019',
        title: 'SEMA Shows & Awards',
        description: 'AeroLidz participated in SEMA shows, gaining industry recognition and awards for innovation in the off-road accessory market.',
        image: '/images/story/sema.jpg',
    },
    {
        date: '2020',
        title: 'COVID Pivot to E-Commerce',
        description: 'When COVID shut down trade shows and retail, AeroLidz pivoted to direct-to-consumer e-commerce, reaching customers nationwide.',
        image: null,
    },
    {
        date: '2021',
        title: 'Rapid Scaling',
        description: 'The company scaled rapidly, bringing production in-house for faster turnaround and better quality control.',
        image: '/images/story/scaling.jpg',
    },
    {
        date: '2022',
        title: 'Generation 2 Cover',
        description: 'The Gen 2 cover launched with improved aerodynamics, better materials, and an even easier snap-on installation.',
        image: '/images/story/gen2.jpg',
    },
    {
        date: '2025',
        title: 'Custom Insert App & Beyond',
        description: 'AeroLidz launched a custom insert designer app and continued innovating with new products and club experiences for the community.',
        image: '/images/story/custom-app.jpg',
    },
];
</script>
