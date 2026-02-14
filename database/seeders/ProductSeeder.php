<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // LIGHT BAR COVERS
            [
                'name' => 'Light Bar Cover | Dual Row 52"',
                'slug' => 'light-bar-cover-dual-52',
                'description' => 'The AeroLidz light bar cover eliminates wind noise and protects your light bar from road debris. Made from high-grade UV polycarbonate for maximum durability. Our enhanced Gen 3 version comes in a crystal clear front with an opaque top and bottom to reduce light reflection back into the vehicle\'s cab.',
                'price' => 175.00,
                'category' => 'covers',
                'in_stock' => true,
                'featured' => true,
                'badge' => 'Best Seller',
                'from_price' => false,
                'rating' => 4.8,
                'review_count' => 411,
                'features' => [
                    'Eliminates wind noise',
                    'High-grade UV polycarbonate',
                    'No-tool installation',
                    'Fits 50"-52" dual row bars',
                    'Crystal clear front with opaque top/bottom',
                    '30-day money-back guarantee'
                ],
                'images' => [
                    '/images/products/featured-1.jpg',
                    '/images/products/featured-2.jpg',
                    '/images/products/featured-3.jpg',
                    '/images/products/featured-4.jpg',
                    '/images/products/featured-5.jpg',
                    '/images/products/cover-dual-52-main.png',
                    '/images/products/cover-dual-52-1.png',
                    '/images/products/cover-dual-52-4.jpg',
                    '/images/products/cover-dual-52-6.jpg',
                ],
                'specifications' => [
                    'Material' => 'High-grade UV polycarbonate',
                    'Size' => '50"-52" (Dual Row)',
                    'Color' => 'Crystal Clear with opaque top/bottom',
                    'Weight' => '2.5 lbs',
                    'Installation' => 'No tools required',
                    'Warranty' => '30-day money-back guarantee'
                ],
                'sort_order' => 1,
            ],
            [
                'name' => 'Light Bar Cover | Single Row 50"',
                'slug' => 'light-bar-cover-single-50',
                'description' => 'Aerodynamic light bar cover designed specifically for single row light bars. Eliminates whistling noise and protects from debris.',
                'price' => 149.00,
                'category' => 'covers',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 186,
                'features' => [
                    'Single row design',
                    'UV resistant polycarbonate',
                    'Easy snap-on installation',
                    'Reduces wind noise',
                    '30-day guarantee'
                ],
                'images' => [
                    '/images/products/cover-dual-52.jpg',
                    '/images/products/cover-1.jpg',
                    '/images/products/cover-2.jpg',
                    '/images/products/cover-3.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV polycarbonate',
                    'Size' => '50" (Single Row)',
                    'Color' => 'Crystal Clear',
                    'Weight' => '1.8 lbs',
                ],
                'sort_order' => 2,
            ],

            // LIGHT BARS
            [
                'name' => 'RGB Light Bar 52" | Dual Row',
                'slug' => 'rgb-light-bar-52-dual',
                'description' => 'High-performance RGB light bar with multi-color capabilities. Features advanced LED technology for maximum brightness and customizable color options. Perfect for off-road adventures and trail riding.',
                'price' => 449.00,
                'category' => 'light-bars',
                'in_stock' => true,
                'featured' => true,
                'badge' => 'New',
                'from_price' => false,
                'rating' => 4.9,
                'review_count' => 89,
                'features' => [
                    'Multi-color RGB LEDs',
                    'High-intensity flood/spot combo',
                    'Bluetooth app control',
                    'IP68 waterproof rated',
                    'Includes mounting hardware',
                    '2-year warranty'
                ],
                'images' => [
                    '/images/products/rgb-light-bar.jpg',
                    '/images/products/rgb-light-bar-1.jpg',
                    '/images/products/rgb-light-bar-2.jpg',
                    '/images/products/rgb-light-bar-5.jpg',
                    '/images/products/rgb-with-cover.jpg',
                ],
                'specifications' => [
                    'Length' => '52"',
                    'LED Type' => 'RGB CREE',
                    'Lumens' => '28,000',
                    'Power' => '300W',
                    'Waterproof' => 'IP68',
                    'Operating Voltage' => '9-32V DC'
                ],
                'sort_order' => 3,
            ],
            [
                'name' => 'LED Light Pods (Pair)',
                'slug' => 'led-light-pods-pair',
                'description' => 'Compact high-output LED pods perfect for supplemental lighting. Durable aluminum housing with excellent heat dissipation.',
                'price' => 129.00,
                'category' => 'light-bars',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.6,
                'review_count' => 142,
                'features' => [
                    'Compact 3" design',
                    'Flood or spot beam',
                    'Die-cast aluminum housing',
                    'IP67 waterproof',
                    'Adjustable bracket'
                ],
                'images' => [
                    '/images/products/led-pods.jpg',
                ],
                'specifications' => [
                    'Size' => '3" x 3"',
                    'Lumens' => '4,800 per pod',
                    'Power' => '40W per pod',
                    'Waterproof' => 'IP67'
                ],
                'sort_order' => 4,
            ],

            // INSERTZ - SUBSCRIPTION
            [
                'name' => 'InsertZ Subscription Box',
                'slug' => 'insertz-subscription',
                'description' => 'Get exclusive new designs delivered every month. Choose your tier and receive themed graphics like Sport, Sahara, or Rubicon. Keep your ride fresh with new looks every month!',
                'price' => 30.00,
                'category' => 'subscription',
                'in_stock' => true,
                'featured' => true,
                'badge' => 'Popular',
                'from_price' => true,
                'rating' => 4.9,
                'review_count' => 256,
                'features' => [
                    'New exclusive design monthly',
                    'Choice of themed graphics',
                    'UV-resistant material',
                    'Precision fit for AeroLidz',
                    'Rolls up for easy storage',
                    'Cancel anytime'
                ],
                'images' => [
                    '/images/inserts/subscription-box.png',
                    '/images/inserts/subscription-package.jpg',
                    '/images/inserts/subscription-january.jpg',
                    '/images/inserts/subscription-howitworks.jpg',
                ],
                'specifications' => [
                    'Subscription' => 'Monthly',
                    'Material' => 'UV-resistant vinyl',
                    'Fit' => 'All AeroLidz covers',
                    'Shipping' => 'Free',
                    'Cancellation' => 'Anytime'
                ],
                'sort_order' => 5,
            ],

            // INSERTZ - CUSTOM
            [
                'name' => 'Custom InsertZ - Design Your Own',
                'slug' => 'custom-insertz',
                'description' => 'Want something one-of-a-kind? Upload your own artwork or design it here, and we\'ll print it on a premium InsertZ made specifically for your AeroLidz.',
                'price' => 85.00,
                'category' => 'custom',
                'in_stock' => true,
                'featured' => true,
                'badge' => null,
                'from_price' => true,
                'rating' => 4.8,
                'review_count' => 178,
                'features' => [
                    'Upload your own design',
                    'Professional printing',
                    'High-grade UV resistant material',
                    'Precision cut to fit',
                    'Easy installation',
                    'Ships in 5-7 business days'
                ],
                'images' => [
                    '/images/inserts/custom-insert.jpg',
                ],
                'specifications' => [
                    'Material' => 'Premium UV-resistant vinyl',
                    'Print Quality' => 'High resolution',
                    'Fit' => 'All AeroLidz covers',
                    'Production Time' => '5-7 business days',
                    'Design Upload' => 'High-res JPG, PNG, or PDF'
                ],
                'sort_order' => 6,
            ],

            // INSERTZ - GRAPHIC DESIGNS
            [
                'name' => 'American Flag InsertZ',
                'slug' => 'american-flag-insertz',
                'description' => 'Show your patriotic pride with this stunning American flag design. Perfect for those who love their country and their ride.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => true,
                'badge' => 'Best Seller',
                'from_price' => false,
                'rating' => 4.9,
                'review_count' => 445,
                'features' => [
                    'High-quality American flag print',
                    'UV-resistant material',
                    'Weather resistant',
                    'Easy to install and remove',
                    'Fits all AeroLidz covers'
                ],
                'images' => [
                    '/images/inserts/american-flag.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers',
                    'Durability' => 'Outdoor rated 3+ years'
                ],
                'sort_order' => 7,
            ],
            [
                'name' => 'Tattered Flag InsertZ',
                'slug' => 'tattered-flag-insertz',
                'description' => 'A rugged, battle-worn American flag design for those who appreciate the weathered look of Old Glory.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 298,
                'features' => [
                    'Distressed flag design',
                    'UV-resistant printing',
                    'Durable vinyl material',
                    'Easy installation'
                ],
                'images' => [
                    '/images/inserts/tattered-flag.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 8,
            ],
            [
                'name' => 'Rubicon InsertZ',
                'slug' => 'rubicon-insertz',
                'description' => 'Show off your Rubicon pride with this bold design inspired by the legendary Jeep trim level.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.8,
                'review_count' => 203,
                'features' => [
                    'Rubicon themed design',
                    'High-contrast graphics',
                    'UV-resistant material',
                    'Easy to swap out'
                ],
                'images' => [
                    '/images/inserts/rubicon.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 9,
            ],
            [
                'name' => 'Wrangler InsertZ',
                'slug' => 'wrangler-insertz',
                'description' => 'Classic Wrangler design perfect for any Jeep enthusiast. Clean, bold graphics that pop.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 167,
                'features' => [
                    'Wrangler branding',
                    'Bold design',
                    'UV-resistant',
                    'Quick install'
                ],
                'images' => [
                    '/images/inserts/wrangler.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 10,
            ],
            [
                'name' => '3D Skeleton InsertZ',
                'slug' => '3d-skeleton-insertz',
                'description' => 'Add some edge to your ride with this detailed 3D skeleton design. Perfect for those who like a darker aesthetic.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.6,
                'review_count' => 134,
                'features' => [
                    '3D effect design',
                    'Detailed skeleton graphic',
                    'UV-resistant material',
                    'Weather resistant'
                ],
                'images' => [
                    '/images/inserts/3d-skeleton.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 11,
            ],
            [
                'name' => '"But Did You Die?" InsertZ',
                'slug' => 'but-did-you-die-insertz',
                'description' => 'Funny and bold, this design brings humor to your off-road adventures. Perfect for trail riders with a sense of humor.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.9,
                'review_count' => 312,
                'features' => [
                    'Humorous design',
                    'Bold lettering',
                    'UV-resistant',
                    'Great conversation starter'
                ],
                'images' => [
                    '/images/inserts/but-did-you-die.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 12,
            ],
            [
                'name' => '"Send It" InsertZ',
                'slug' => 'send-it-insertz',
                'description' => 'For the adrenaline junkies who live by the "send it" mentality. Bold and aggressive design.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.8,
                'review_count' => 189,
                'features' => [
                    'Bold "Send It" graphics',
                    'Aggressive styling',
                    'UV-resistant',
                    'Durable material'
                ],
                'images' => [
                    '/images/inserts/send-it.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 13,
            ],
            [
                'name' => '"She Likes It Dirty" InsertZ',
                'slug' => 'she-likes-it-dirty-insertz',
                'description' => 'Fun and playful design for off-roaders who aren\'t afraid to get dirty. Eye-catching and humorous.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 241,
                'features' => [
                    'Playful design',
                    'Bold statement',
                    'UV-resistant',
                    'Easy to install'
                ],
                'images' => [
                    '/images/inserts/she-likes-dirty.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 14,
            ],
            [
                'name' => 'Mardi Gras InsertZ',
                'slug' => 'mardi-gras-insertz',
                'description' => 'Celebrate Mardi Gras year-round with this festive purple, green, and gold design.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => 'Limited',
                'from_price' => false,
                'rating' => 4.6,
                'review_count' => 87,
                'features' => [
                    'Festive Mardi Gras colors',
                    'Seasonal design',
                    'UV-resistant',
                    'Limited edition'
                ],
                'images' => [
                    '/images/inserts/mardi-gras.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 15,
            ],
            [
                'name' => 'St. Patrick\'s Day InsertZ',
                'slug' => 'st-patricks-insertz',
                'description' => 'Show your Irish spirit with this green-themed St. Patrick\'s Day design.',
                'price' => 49.00,
                'category' => 'graphic',
                'in_stock' => true,
                'featured' => false,
                'badge' => 'Limited',
                'from_price' => false,
                'rating' => 4.5,
                'review_count' => 76,
                'features' => [
                    'St. Patrick\'s themed',
                    'Festive green design',
                    'UV-resistant',
                    'Seasonal limited edition'
                ],
                'images' => [
                    '/images/inserts/st-patricks.jpg',
                ],
                'specifications' => [
                    'Material' => 'UV-resistant vinyl',
                    'Size' => 'Fits 50"-52" covers'
                ],
                'sort_order' => 16,
            ],

            // ACCESSORIES
            [
                'name' => 'Complete Kit | Light Bar + Cover + Controller',
                'slug' => 'complete-kit-bundle',
                'description' => 'Everything you need in one package! Includes 52" RGB light bar, AeroLidz cover, and Bluetooth controller. Save $150 when you bundle!',
                'price' => 599.00,
                'category' => 'accessories',
                'in_stock' => true,
                'featured' => true,
                'badge' => 'Save $150',
                'from_price' => false,
                'rating' => 4.9,
                'review_count' => 92,
                'features' => [
                    'Complete setup included',
                    'RGB 52" light bar',
                    'AeroLidz cover',
                    'Bluetooth controller',
                    'All mounting hardware',
                    'Save $150 vs buying separately'
                ],
                'images' => [
                    '/images/products/complete-kit.jpg',
                ],
                'specifications' => [
                    'Includes' => 'Light bar, cover, controller, hardware',
                    'Value' => '$749 if purchased separately',
                    'Savings' => '$150'
                ],
                'sort_order' => 17,
            ],
            [
                'name' => 'Bluetooth Control Module',
                'slug' => 'bluetooth-control-module',
                'description' => 'Advanced Bluetooth control module for RGB light bars. Control colors, brightness, and patterns from your smartphone.',
                'price' => 79.00,
                'category' => 'accessories',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 143,
                'features' => [
                    'Bluetooth 5.0',
                    'iOS and Android compatible',
                    'Color customization',
                    'Pattern control',
                    'Easy wiring'
                ],
                'images' => [
                    '/images/products/bt-controller.jpg',
                ],
                'specifications' => [
                    'Bluetooth' => '5.0',
                    'Range' => '30 feet',
                    'Compatibility' => 'Most RGB light bars'
                ],
                'sort_order' => 18,
            ],
            [
                'name' => 'RGB Control Module',
                'slug' => 'rgb-control-module',
                'description' => 'Wired RGB control module with multiple color and pattern options. Perfect for those who prefer physical controls.',
                'price' => 59.00,
                'category' => 'accessories',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.6,
                'review_count' => 98,
                'features' => [
                    'Wired control',
                    'Multiple color modes',
                    'Pattern selection',
                    'Brightness control',
                    'Compact design'
                ],
                'images' => [
                    '/images/products/control-module.jpg',
                ],
                'specifications' => [
                    'Type' => 'Wired',
                    'Cable Length' => '10 feet',
                    'Compatibility' => 'Most RGB light bars'
                ],
                'sort_order' => 19,
            ],
            [
                'name' => 'Wireless Remote Controller',
                'slug' => 'wireless-remote-controller',
                'description' => 'Compact wireless remote for controlling your RGB light bar. Keep it on your keychain for easy access.',
                'price' => 39.00,
                'category' => 'accessories',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.5,
                'review_count' => 156,
                'features' => [
                    'Compact design',
                    'RF wireless',
                    'Color and pattern control',
                    'Keychain friendly',
                    'Long battery life'
                ],
                'images' => [
                    '/images/products/remote-controller.jpg',
                ],
                'specifications' => [
                    'Type' => 'RF Wireless',
                    'Range' => '50 feet',
                    'Battery' => 'CR2032 (included)'
                ],
                'sort_order' => 20,
            ],
            [
                'name' => 'Mounting Brackets Set',
                'slug' => 'mounting-brackets-set',
                'description' => 'Heavy-duty mounting brackets for secure light bar installation. Fits most roof racks and bumpers.',
                'price' => 49.00,
                'category' => 'accessories',
                'in_stock' => true,
                'featured' => false,
                'badge' => null,
                'from_price' => false,
                'rating' => 4.7,
                'review_count' => 201,
                'features' => [
                    'Heavy-duty steel',
                    'Powder coated finish',
                    'Universal fit',
                    'All hardware included',
                    'Easy installation'
                ],
                'images' => [
                    '/images/products/brackets.jpg',
                ],
                'specifications' => [
                    'Material' => 'Steel',
                    'Finish' => 'Powder coated black',
                    'Fits' => 'Most 50"-52" light bars'
                ],
                'sort_order' => 21,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        $this->command->info('✅ Seeded ' . count($products) . ' products with images!');
    }
}
