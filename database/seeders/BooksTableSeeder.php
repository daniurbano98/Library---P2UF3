<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('books')->insert([
                'isbn' => $faker->unique()->isbn13(),
                'title' => $faker->sentence(5),
                'author' => $faker->name,
                'published_date' => $faker->date('Y-m-d'),
                'description' => $faker->paragraph(3),
                'price' => $faker->randomFloat(2, 10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
