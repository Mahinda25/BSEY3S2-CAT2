<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obituary;

class ObituarySeeder extends Seeder
{
    public function run()
    {
        Obituary::create([
            'name' => 'John Doe',
            'date_of_birth' => '1970-01-01',
            'date_of_death' => '2020-01-01',
            'content' => 'John Doe was a loving father and husband...',
            'author' => 'Jane Doe',
            'slug' => \Str::slug('John Doe-2020-01-01'),
        ]);
    }
}
