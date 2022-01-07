<?php

namespace Database\Seeders;

use App\Models\UserHistory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DifficultySeeder::class,
            SoalSeeder::class,
            ItemSeeder::class,
            UserSeeder::class,
            UserDetailSeeder::class,
            InventorySeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            DummySeeder::class
        ]);
    }
}
