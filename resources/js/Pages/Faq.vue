<template>
    <Head>
        <title>FAQ - AeroLidz</title>
        <meta name="description" content="Frequently asked questions about AeroLidz light bar covers, InsertZ graphic inserts, installation, shipping, returns, and compatibility.">
        <meta property="og:title" content="Frequently Asked Questions - AeroLidz">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">FAQ</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-3xl mx-auto">
            <h1 class="heading-lg text-center mb-12">Frequently Asked Questions</h1>

            <!-- Light Bar Cover Questions -->
            <div class="mb-12">
                <h2 class="font-oswald text-xl uppercase tracking-wider mb-6 text-primary">Light Bar Cover Questions</h2>
                <div class="space-y-4">
                    <div
                        v-for="(faq, i) in coverFaqs"
                        :key="i"
                        class="border border-gray-200"
                    >
                        <button
                            @click="toggleFaq('cover', i)"
                            class="w-full flex justify-between items-center p-5 text-left hover:bg-light-gray transition-colors"
                        >
                            <span class="font-medium pr-4">{{ faq.question }}</span>
                            <svg
                                class="w-5 h-5 flex-shrink-0 transition-transform duration-200"
                                :class="{ 'rotate-180': openFaqs[`cover-${i}`] }"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <Transition
                            enter-active-class="transition-all duration-200 ease-out"
                            enter-from-class="max-h-0 opacity-0"
                            enter-to-class="max-h-96 opacity-100"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="max-h-96 opacity-100"
                            leave-to-class="max-h-0 opacity-0"
                        >
                            <div v-if="openFaqs[`cover-${i}`]" class="overflow-hidden">
                                <p class="px-5 pb-5 text-gray-600">{{ faq.answer }}</p>
                            </div>
                        </Transition>
                    </div>
                </div>
            </div>

            <!-- Graphic Inserts Questions -->
            <div>
                <h2 class="font-oswald text-xl uppercase tracking-wider mb-6 text-primary">Graphic Inserts Questions</h2>
                <div class="space-y-4">
                    <div
                        v-for="(faq, i) in insertFaqs"
                        :key="i"
                        class="border border-gray-200"
                    >
                        <button
                            @click="toggleFaq('insert', i)"
                            class="w-full flex justify-between items-center p-5 text-left hover:bg-light-gray transition-colors"
                        >
                            <span class="font-medium pr-4">{{ faq.question }}</span>
                            <svg
                                class="w-5 h-5 flex-shrink-0 transition-transform duration-200"
                                :class="{ 'rotate-180': openFaqs[`insert-${i}`] }"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <Transition
                            enter-active-class="transition-all duration-200 ease-out"
                            enter-from-class="max-h-0 opacity-0"
                            enter-to-class="max-h-96 opacity-100"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="max-h-96 opacity-100"
                            leave-to-class="max-h-0 opacity-0"
                        >
                            <div v-if="openFaqs[`insert-${i}`]" class="overflow-hidden">
                                <p class="px-5 pb-5 text-gray-600">{{ faq.answer }}</p>
                            </div>
                        </Transition>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { reactive } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const openFaqs = reactive({});

const toggleFaq = (section, index) => {
    const key = `${section}-${index}`;
    openFaqs[key] = !openFaqs[key];
};

const coverFaqs = [
    {
        question: 'How do we clean the AeroLidz cover?',
        answer: 'Soap and water, plastic cleaner, plastic polish, or ceramic coating are all good options. To clean the inside, you can roll up a hand towel and slide it inside. Use a broom stick to push the length of the AeroLidz.',
    },
    {
        question: 'Is it safe to take the cover into a carwash?',
        answer: "Yes, we have tested it on our own vehicles without a problem. The cover must be securely fastened to the right size light bar shown in our How To section. If your cover moves around easily, you need to secure it with a zip tie or a Velcro strap before entering. You can always ask the car wash attendant to turn off the beater bar above.",
    },
    {
        question: 'Does a triple row LED bar fit your covers?',
        answer: 'Yes, they fit the dual row covers as long as the back of them measure 3.5" front to back. The shape will be either square or a long bullet shape. See our installation pics for sizing.',
    },
    {
        question: 'Does the straight light bar cover fit a curved light bar?',
        answer: "No, it does not. We are working to find a good solution — stay in touch or follow our social media for announcements!",
    },
];

const insertFaqs = [
    {
        question: 'How do I clean the inserts?',
        answer: 'Very gently wipe with soap and water. DO NOT USE ANY CHEMICALS.',
    },
    {
        question: 'How do you eliminate the glare into the cab when using an insert?',
        answer: "It is very easy to fix this if it bothers you. Tape off the face with painter's tape 3/4\" before the front ribs. Then paint the rest with satin black spray paint.",
    },
    {
        question: 'Remote control is not working?',
        answer: 'Check to make sure there is a battery in it. If not, install a 2030 watch battery.',
    },
];
</script>
