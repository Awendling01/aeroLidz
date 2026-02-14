<template>
    <Head>
        <title>Shop Light Bar Covers, InsertZ & Accessories - AeroLidz</title>
        <meta name="description" content="Shop AeroLidz light bar covers, graphic InsertZ, subscription boxes, and accessories. The original aerodynamic light bar cover with UV polycarbonate protection.">
        <meta property="og:title" content="Shop AeroLidz - Light Bar Covers & InsertZ">
        <meta property="og:description" content="Browse our full lineup of aerodynamic light bar covers, graphic InsertZ, and accessories. Free shipping available.">
    </Head>

    <!-- Breadcrumb -->
    <div class="bg-light-gray px-4 md:px-8 py-3">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm text-gray-500">
                <Link href="/" class="hover:text-primary">Home</Link>
                <span class="mx-2">/</span>
                <span class="text-dark">Shop</span>
            </nav>
        </div>
    </div>

    <section class="section-padding">
        <div class="max-w-7xl mx-auto">
            <h1 class="heading-lg mb-8 text-center">Shop All Products</h1>

            <!-- Category Filter -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button
                    v-for="cat in categories"
                    :key="cat.slug"
                    @click="activeCategory = cat.slug"
                    class="font-oswald uppercase text-sm tracking-wider px-5 py-2 border transition-colors"
                    :class="activeCategory === cat.slug
                        ? 'bg-dark text-white border-dark'
                        : 'bg-white text-dark border-gray-300 hover:border-dark'"
                >
                    {{ cat.name }}
                </button>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div
                    v-for="product in filteredProducts"
                    :key="product.id"
                    class="group cursor-pointer"
                >
                    <div class="relative overflow-hidden bg-light-gray mb-3">
                        <img
                            :src="product.image"
                            :alt="product.name"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                        <div
                            v-if="product.badge"
                            class="absolute bottom-0 left-0 right-0 bg-primary/75 backdrop-blur-sm px-3 py-1.5 flex items-center gap-2"
                        >
                            <span class="w-1.5 h-1.5 rounded-full bg-white flex-shrink-0"></span>
                            <span class="text-white text-xs font-oswald uppercase tracking-wider">
                                {{ product.badge }}
                            </span>
                        </div>
                    </div>
                    <h3 class="font-oswald text-sm uppercase tracking-wider mb-1">{{ product.name }}</h3>
                    <p class="text-gray-500 text-sm" v-if="product.fromPrice">From {{ product.price }}</p>
                    <p class="text-gray-500 text-sm" v-else>{{ product.price }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    products: Array,
    activeCategory: { type: String, default: 'all' },
    searchQuery: { type: String, default: '' },
    cartCount: { type: Number, default: 0 },
});

const activeCategory = ref(props.activeCategory);

const categories = [
    { name: 'All', slug: 'all' },
    { name: 'Light Bars', slug: 'light-bars' },
    { name: 'Light Bar Covers', slug: 'covers' },
    { name: 'Graphic Inserts', slug: 'graphic' },
    { name: 'Custom Inserts', slug: 'custom' },
    { name: 'Subscription', slug: 'subscription' },
    { name: 'Best Sellers', slug: 'best-selling' },
    { name: 'Limited Edition', slug: 'limited' },
    { name: 'Accessories', slug: 'accessories' },
];

const products = ref([
    { id: 1, name: 'Light Bar Cover | Dual Row 52"', price: '$175.00', image: '/images/products/cover-dual-52.jpg', category: 'covers', categories: ['covers', 'best-selling'], badge: 'Best Seller' },
    { id: 2, name: 'RGB Light Bar | Dual Row 52"', price: '$500.00', image: '/images/products/rgb-light-bar.jpg', category: 'light-bars', categories: ['light-bars', 'best-selling'] },
    { id: 3, name: 'Graphic InsertZ | Subscription Box', price: '$30.00', image: '/images/inserts/subscription-box.jpg', category: 'subscription', categories: ['subscription', 'best-selling'], fromPrice: true, badge: 'Monthly' },
    { id: 4, name: 'RGB LED Light Pods (3")', price: '$125.00', image: '/images/products/led-pods.jpg', category: 'light-bars', categories: ['light-bars'] },
    { id: 5, name: 'Light Bar Control Module', price: '$70.00', image: '/images/products/control-module.jpg', category: 'accessories', categories: ['accessories'] },
    { id: 6, name: 'Bluetooth & Remote Controller', price: '$100.00', image: '/images/products/bt-controller.jpg', category: 'accessories', categories: ['accessories'] },
    { id: 7, name: 'JL/JT 50/52" Upper Bar Brackets', price: '$500.00', image: '/images/products/brackets.jpg', category: 'accessories', categories: ['accessories'] },
    { id: 8, name: 'Graphic InsertZ | But Did You Die?', price: '$45.00', image: '/images/inserts/but-did-you-die.jpg', category: 'graphic', categories: ['graphic', 'best-selling'] },
    { id: 9, name: 'Graphic InsertZ | American Flag', price: '$45.00', image: '/images/inserts/american-flag.jpg', category: 'graphic', categories: ['graphic', 'best-selling'] },
    { id: 10, name: 'Graphic InsertZ | Wrangler', price: '$45.00', image: '/images/inserts/wrangler.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 11, name: 'Graphic InsertZ | Mardi Gras', price: '$45.00', image: '/images/inserts/mardi-gras.jpg', category: 'graphic', categories: ['graphic', 'limited'], badge: 'Limited' },
    { id: 12, name: 'LED Remote Controller', price: '$25.00', image: '/images/products/remote-controller.jpg', category: 'accessories', categories: ['accessories'] },
    { id: 13, name: 'Complete Light Bar Kit', price: '$650.00', image: '/images/products/complete-kit.jpg', category: 'light-bars', categories: ['light-bars', 'best-selling'], badge: 'Bundle' },
    { id: 14, name: 'Custom InsertZ | Dual Row 52"', price: '$85.00', image: '/images/inserts/custom-insert.jpg', category: 'custom', categories: ['custom'] },
    { id: 15, name: 'Graphic InsertZ | 3D Skeleton', price: '$45.00', image: '/images/inserts/3d-skeleton.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 16, name: 'Graphic InsertZ | Tattered Flag', price: '$45.00', image: '/images/inserts/tattered-flag.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 17, name: 'Graphic InsertZ | Rubicon', price: '$45.00', image: '/images/inserts/rubicon.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 18, name: 'Graphic InsertZ | Send It', price: '$45.00', image: '/images/inserts/send-it.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 19, name: 'Graphic InsertZ | She Likes It Dirty', price: '$45.00', image: '/images/inserts/she-likes-dirty.jpg', category: 'graphic', categories: ['graphic'] },
    { id: 20, name: 'Graphic InsertZ | St Patricks Day', price: '$45.00', image: '/images/inserts/st-patricks.jpg', category: 'graphic', categories: ['graphic', 'limited'], badge: 'Limited' },
]);

const filteredProducts = computed(() => {
    if (activeCategory.value === 'all') return products.value;
    return products.value.filter(p =>
        (p.categories && p.categories.includes(activeCategory.value)) || p.category === activeCategory.value
    );
});
</script>
