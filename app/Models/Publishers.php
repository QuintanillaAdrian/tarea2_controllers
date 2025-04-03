<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country', 'founded', 'genre'];

    // Relación: Una editorial tiene muchos libros
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

