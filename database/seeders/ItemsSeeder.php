<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Art', 'Measuring', 'Office', 'Papers', 'Pens', 'School', 'Toys'];

        foreach ($categories as $category) {
            Items::factory()->count(12)->create(['category' => $category]);
        }
    }
}
