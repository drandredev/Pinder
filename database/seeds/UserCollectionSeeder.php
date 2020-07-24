<?php

use Illuminate\Database\Seeder;

class UserCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 4)
        ->create()
        ->each( function ($user)  {
            $user->posts()->createMany(
                factory(App\Post::class, 2)->make()->toArray()
            );
        });
    }
}
