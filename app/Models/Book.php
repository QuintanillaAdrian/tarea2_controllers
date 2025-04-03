<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'copyright', 'edition', 'pages', 'author_id', 'publisher_id'];

    // Relación: Un libro pertenece a un autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relación: Un libro pertenece a una editorial
    public function publisher()
    {
        return $this->belongsTo(Publishers::class);
    }
}
