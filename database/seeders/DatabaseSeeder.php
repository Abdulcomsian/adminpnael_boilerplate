<?php
namespace Database\Seeders;

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
        $this->call(CountriesTableSeeder::class); 
        $this->call(RoleSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(VendorUserSeeder::class);

    }
}
