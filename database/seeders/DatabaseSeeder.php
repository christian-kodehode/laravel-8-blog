<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() {

        User::factory()->create([
            'name' => 'Christian Riis',
            'username' => 'ctriis',
            'email' => 'ctriis@outlook.com',
            'password' => 'ostepop',
            'created_at' => now(),
        ]);

        Category::factory(25)->create();
        User::factory(100)->create();
        Post::factory(500)->create();
        Comment::factory(5000)->create();
    }
}
