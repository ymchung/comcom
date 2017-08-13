<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class)->create([
        'name'=> 'admin',
        'lastname'=> 'admin',
        'email'=> 'admin@admin.com',
        'role'=> 'admin',
        'password'=> 'admin'
      ]);
      factory(App\User::class, 10)->create();
    }
}
