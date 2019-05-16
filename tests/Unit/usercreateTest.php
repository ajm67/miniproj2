<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::upda53('users')->update('1', [
            'name' => 'Steve Smith',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}