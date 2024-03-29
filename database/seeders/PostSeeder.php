<?php

namespace Database\Seeders;

use App\Models\Posts;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::factory()->count(100)->create();
    }
}
