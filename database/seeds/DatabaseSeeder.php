<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(Post::class, 3)->make());
        });
    }
}
