<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        Author::create([
            'name' => 'Abraham Silberschatz',
            'nationality' => 'Israelis/American',
            'birth' => '1952',
            'fields' => 'Database Systems, Operating Systems',
        ]);

        Author::create([
            'name' => 'Andrew S. Tanenbaum',
            'nationality' => 'Dutch/American',
            'birth' => '1944',
            'fields' => 'Distributed computing, Operating Systems',
        ]);
    }
}
