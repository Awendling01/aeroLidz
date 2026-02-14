<template>
    <footer class="bg-dark text-white">
        <div class="max-w-[1920px] mx-auto px-4 md:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                <!-- Logo & tagline -->
                <div class="md:col-span-1">
                    <img src="/images/logo/logo-footer.png" alt="AeroLidz" class="h-12 mb-4">
                    <p class="text-gray-400 text-sm">The Original Aerodynamic Light Bar Silencer</p>
                </div>

                <!-- Shop -->
                <div>
                    <h4 class="font-oswald uppercase text-sm tracking-widest mb-4">Shop</h4>
                    <ul class="space-y-2">
                        <li><Link href="/shop?category=light-bars" class="text-gray-400 text-sm hover:text-primary transition-colors">Light Bars</Link></li>
                        <li><Link href="/shop?category=covers" class="text-gray-400 text-sm hover:text-primary transition-colors">Light Bar Covers</Link></li>
                        <li><Link href="/shop?category=custom" class="text-gray-400 text-sm hover:text-primary transition-colors">Custom Inserts</Link></li>
                        <li><Link href="/shop?category=subscription" class="text-gray-400 text-sm hover:text-primary transition-colors">Subscription Inserts</Link></li>
                    </ul>
                </div>

                <!-- Community -->
                <div>
                    <h4 class="font-oswald uppercase text-sm tracking-widest mb-4">Community</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 text-sm hover:text-primary transition-colors">Facebook Page</a></li>
                        <li><a href="#" class="text-gray-400 text-sm hover:text-primary transition-colors">Facebook Group</a></li>
                        <li><Link href="/rewards" class="text-gray-400 text-sm hover:text-primary transition-colors">Rewards Program</Link></li>
                        <li><a href="#" class="text-gray-400 text-sm hover:text-primary transition-colors">Reviews</a></li>
                    </ul>
                </div>

                <!-- About -->
                <div>
                    <h4 class="font-oswald uppercase text-sm tracking-widest mb-4">About</h4>
                    <ul class="space-y-2">
                        <li><Link href="/our-story" class="text-gray-400 text-sm hover:text-primary transition-colors">Our Story</Link></li>
                        <li><Link href="/how-to" class="text-gray-400 text-sm hover:text-primary transition-colors">How To</Link></li>
                        <li><Link href="/faq" class="text-gray-400 text-sm hover:text-primary transition-colors">FAQs</Link></li>
                    </ul>
                </div>

                <!-- Help -->
                <div>
                    <h4 class="font-oswald uppercase text-sm tracking-widest mb-4">Help</h4>
                    <ul class="space-y-2">
                        <li><Link href="/contact" class="text-gray-400 text-sm hover:text-primary transition-colors">Contact Us</Link></li>
                        <li><a href="mailto:sales@aerolidz.com" class="text-gray-400 text-sm hover:text-primary transition-colors">sales@aerolidz.com</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex flex-wrap gap-4 text-xs text-gray-500">
                    <Link href="/shipping-policy" class="hover:text-gray-300 transition-colors">Shipping Policy</Link>
                    <Link href="/return-policy" class="hover:text-gray-300 transition-colors">Return Policy</Link>
                    <Link href="/terms" class="hover:text-gray-300 transition-colors">Terms & Conditions</Link>
                    <Link href="/privacy" class="hover:text-gray-300 transition-colors">Privacy Policy</Link>
                </div>
                <p class="text-xs text-gray-500">&copy; {{ new Date().getFullYear() }} AeroLidz</p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
