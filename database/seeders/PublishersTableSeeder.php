<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publishers;

class PublishersTableSeeder extends Seeder
{
    public function run()
    {
        Publishers::create([
            'name' => 'John Wiley & Sons',
            'country' => 'United States',
            'founded' => 1807,
            'genre' => 'Academic',
        ]);

        Publishers::create([
            'name' => 'Pearson Education',
            'country' => 'United Kingdom',
            'founded' => 1844,
            'genre' => 'Education',
        ]);
    }
}
