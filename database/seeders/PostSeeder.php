<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10000; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'contact_phone_number' => $faker->phoneNumber,
                'created_at' => now(),
                'created_by' => 1,
                'image' => '1719662453.png'
            ]);
        }
    }
}
