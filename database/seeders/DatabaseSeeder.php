<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        BooksTableSeeder::class,
        CategoriesTableSeeder::class,
        BookCategoryTableSeeder::class
       ]);
    }
}
