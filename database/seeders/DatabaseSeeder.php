<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test users
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@aerolidz.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Test Customer',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
        ]);

        // Seed products with real images
        $this->call([
            ProductSeeder::class,
        ]);

        $this->command->info('✅ Database seeded successfully!');
        $this->command->info('👤 Admin: admin@aerolidz.com / password');
        $this->command->info('👤 Customer: customer@example.com / password');
    }
}
