<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Obtener todos los libros y categorías
         $books = Book::all();
         $categories = Category::all();
 
         // Crear relaciones aleatorias entre libros y categorías
         foreach ($books as $book) {
             $book->categories()->sync($categories->random(rand(1, 3)));
         }
    }
}
