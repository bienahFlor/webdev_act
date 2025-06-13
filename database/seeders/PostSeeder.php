<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
  
    public function run(): void
    {
        Post::create([
            'firstname' => 'Shaniah Ysabelle',
            'middlename' => 'S.',
            'lastname' => 'Dinglasa',
            'age' => 6,
        ]);

        Post::create([
            'firstname' => 'Bienah',
            'middlename' => 'E.',
            'lastname' => 'Salvoro',
            'age' => 24,
        ]);
    }
}

