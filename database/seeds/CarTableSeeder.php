<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App/Carfactory.php', 10)->create();
    }
};

public function run()
{
    factory(App\User::class, 50)->create()->each(function (Faker\generator $faker) {
        return array(
            'Make' => $faker->sentence(5),
            'Model' => $faker->realText(rand(80, 600)),
            'Year'  => $faker->date(),

        $user->posts()->save(factory(App\Post::class)->make()));
    });
}