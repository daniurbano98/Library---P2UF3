<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category'); /*se definen las relaciones entre los modelos Book y 
                                                                    Category mediante los métodos belongsToMany(). */
    }
}
