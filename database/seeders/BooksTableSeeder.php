<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Operating System Concepts',
            'edition' => '9th',
            'copyright' => 2012,
            'pages' => 976,
            'author_id' => 1, // ID de Abraham Silberschatz
            'publisher_id' => 1, // ID de John Wiley & Sons
        ]);

        Book::create([
            'title' => 'Database System Concepts',
            'edition' => '6th',
            'copyright' => 2010,
            'pages' => 1376,
            'author_id' => 1, // ID de Abraham Silberschatz
            'publisher_id' => 1, // ID de John Wiley & Sons
        ]);

        Book::create([
            'title' => 'Computer Networks',
            'edition' => '5th',
            'copyright' => 2010,
            'pages' => 960,
            'author_id' => 2, // ID de Andrew S. Tanenbaum
            'publisher_id' => 2, // ID de Pearson Education
        ]);
        Book::create([
            'title' => 'Modern Operating Systems',
            'edition' => '4th',
            'copyright' => 2014,
            'pages' => 1136,
            'author_id' => 2, // ID de Andrew S. Tanenbaum
            'publisher_id' => 2, // ID de Pearson Education
        ]);
    }
}
